# SOLA xAI Realtime WebSocket Proxy (Cloudflare Worker)

Edge deployed proxy that mediates xAI Realtime voice so the xAI master API key never reaches the browser. Runs as a Cloudflare Worker; no VM, no container, no systemd unit.

## Why this exists

xAI Realtime is WebSocket only and does not ship an ephemeral client secret flow. Without this proxy the Moodle plugin would have to hand the master xAI key to every learner's browser, which the SOLA security audit flagged as critical defect 3.1. This Worker closes that defect.

## Why a Cloudflare Worker (not Node.js on an EC2)

Saylor already uses Cloudflare. Workers support WebSocket upgrades via `WebSocketPair`, inline HS256 JWT validation with `crypto.subtle`, and per request outbound WebSocket connections. No daemon to manage, no systemd unit to babysit, no Catalyst ticket. Deploy is a single `wrangler deploy` that an operator can run from their laptop with their Cloudflare token.

## Data flow

```
Browser                Moodle                 Worker                    xAI
   |                     |                       |                        |
   |--- GET /rt_token -->|                       |                        |
   |<--- {jwt, wssurl}---|                       |                        |
   |                                             |                        |
   |--- WSS <wssurl>?token=<jwt> --------------->|                        |
   |                                             |--- WSS /v1/realtime -->|
   |                                             |     (Bearer            |
   |                                             |      API key)          |
   |<== audio frames relayed ====================>|<== audio frames =====>|
```

## Prerequisites

- A Cloudflare account.
- `wrangler` CLI installed on the operator machine (`npm install -g wrangler` or `brew install cloudflare-wrangler`).
- The xAI master API key.
- A 32+ byte random string to use as the `MOODLE_JWT_SECRET` shared with SOLA.

## Deploy

```
cd services/xai_rt_proxy
wrangler login                                  # one time
wrangler secret put XAI_API_KEY                 # paste the xAI key
wrangler secret put MOODLE_JWT_SECRET           # paste the shared secret
wrangler deploy
```

`wrangler deploy` prints the Worker URL, something like `https://sola-xai-rt-proxy.<your-subdomain>.workers.dev`. The WebSocket endpoint is the same URL with `wss://` and path `/rt`, e.g. `wss://sola-xai-rt-proxy.<your-subdomain>.workers.dev/rt`.

In SOLA admin settings:
- `xai_proxy_url` → the `wss://` URL above (including `/rt`).
- `xai_proxy_jwt_secret` → the same value you put into `MOODLE_JWT_SECRET`.

That is the full integration. xAI voice will now route through the Worker; the master xAI key stays in Cloudflare's secret store and never reaches any learner.

## Optional: custom route

To front the Worker under a saylor.org hostname, uncomment the `[[routes]]` block in `wrangler.toml`, set your zone, and redeploy. Then set `xai_proxy_url` to the custom URL.

## Health

`GET <worker>/health` returns `{"ok":true,"upstream":"wss://api.x.ai/v1/realtime"}`. Wire into the SOLA uptime dashboard.

## Key rotation

1. Generate a new `MOODLE_JWT_SECRET` (32 byte random hex).
2. Update the SOLA admin setting first.
3. `wrangler secret put MOODLE_JWT_SECRET` and redeploy.

Expect a ~60 second window where already-issued tokens still validate against the old secret. If you need an instant cutover, rotate both ends inside a single maintenance window.

## Troubleshooting

- 401 on connect: JWT secret mismatch, expired token, or malformed token. Cloudflare logs show the `reason` in the 401 body.
- 426 on upgrade: something is hitting the URL over plain HTTP; confirm the client uses `wss://`.
- Upstream handshake fail: `wrangler secret list` to confirm `XAI_API_KEY` is set; check xAI status page.
- Learner sees "voice disabled": confirm `xai_proxy_url` is set in SOLA settings and the Worker health endpoint returns 200.

## Files

- `worker.js` — the Worker. ~150 lines; single file, no build step.
- `wrangler.toml` — deploy config. Secrets are stored on Cloudflare's side via `wrangler secret put`.

## Alternatives considered

- **Node.js daemon on an EC2 behind nginx.** Previous v3.9.13 shipped this shape; required Catalyst to provision an EC2, install Node, manage a systemd unit, and terminate TLS at nginx. Replaced in v3.9.14 with the Worker because the operational surface was strictly larger without a material benefit.
- **AWS API Gateway WebSocket API + Lambda.** Viable; Saylor is on AWS already. Rejected because API Gateway WebSocket uses a per-message invoke pattern that needs session state in DynamoDB, which is more code than the Worker for the same outcome.
- **Drop xAI Realtime entirely.** OpenAI Realtime already uses ephemeral client secrets, which need no proxy. If Saylor decides the Grok voice is not worth maintaining a proxy, disabling xAI Realtime in `voice_registry` is a one line change.
