#!/usr/bin/env python3
"""
SOLA External API Smoke Tests
==============================
Tests the external API contracts that SOLA depends on.
Catches breaking changes (endpoint renames, schema changes, new required fields)
before they reach users.

Usage:
  python3 tests/smoke_api.py --apikey sk-...

Exit codes:
  0 = all tests passed
  1 = one or more tests failed

Run in CI via GitHub Actions (.github/workflows/api-smoke-test.yml) daily.
"""

import argparse
import asyncio
import json
import sys
import time
import urllib.request
import urllib.error


# ── Colour helpers ──────────────────────────────────────────────────────────

def green(s):  return f"\033[32m{s}\033[0m"
def red(s):    return f"\033[31m{s}\033[0m"
def yellow(s): return f"\033[33m{s}\033[0m"
def bold(s):   return f"\033[1m{s}\033[0m"


# ── HTTP helper ──────────────────────────────────────────────────────────────

def post(url, body, apikey, timeout=15):
    """POST JSON body, return (status_code, response_bytes)."""
    data = body.encode() if isinstance(body, str) else body
    req = urllib.request.Request(
        url, data=data,
        headers={"Authorization": f"Bearer {apikey}", "Content-Type": "application/json"},
    )
    try:
        resp = urllib.request.urlopen(req, timeout=timeout)
        return resp.status, resp.read()
    except urllib.error.HTTPError as e:
        return e.code, e.read()


# ── Test runner ──────────────────────────────────────────────────────────────

results = []

def run(name, fn, *args, **kwargs):
    """Run a test function, catch exceptions, record pass/fail."""
    start = time.time()
    try:
        fn(*args, **kwargs)
        elapsed = time.time() - start
        print(f"  {green('PASS')}  {name}  ({elapsed:.1f}s)")
        results.append((name, True, None))
    except AssertionError as e:
        elapsed = time.time() - start
        print(f"  {red('FAIL')}  {name}  ({elapsed:.1f}s)")
        print(f"         {red(str(e))}")
        results.append((name, False, str(e)))
    except Exception as e:
        elapsed = time.time() - start
        print(f"  {red('FAIL')}  {name}  ({elapsed:.1f}s)")
        print(f"         {red(type(e).__name__)}: {e}")
        results.append((name, False, f"{type(e).__name__}: {e}"))


# ════════════════════════════════════════════════════════════════════════════
# REALTIME API TESTS
# ════════════════════════════════════════════════════════════════════════════

def test_realtime_token_endpoint(apikey):
    """POST /v1/realtime/client_secrets → ephemeral token."""
    status, body = post("https://api.openai.com/v1/realtime/client_secrets", "{}", apikey)
    assert status == 200, f"Expected HTTP 200, got {status}: {body[:200]}"

    data = json.loads(body)
    token = data.get("value", "")
    assert token, f"Response missing top-level 'value' field. Keys: {list(data.keys())}"
    assert token.startswith("ek_"), \
        f"Token should start with 'ek_' (ephemeral key), got: {token[:10]}..."

    # Session object should include type=realtime
    session = data.get("session", {})
    assert session.get("type") == "realtime", \
        f"session.type should be 'realtime', got: {session.get('type')}"


def test_realtime_websocket_session_update(apikey):
    """WebSocket: connect → session.created → session.update → session.updated."""
    asyncio.run(_ws_session_update(apikey))


async def _ws_session_update(apikey):
    try:
        import websockets
    except ImportError:
        raise AssertionError("websockets library not installed — run: pip install websockets")

    # Fetch token
    status, body = post("https://api.openai.com/v1/realtime/client_secrets", "{}", apikey)
    assert status == 200, f"Token fetch failed: HTTP {status}"
    token = json.loads(body).get("value", "")
    assert token, "No token in response"

    uri = "wss://api.openai.com/v1/realtime?model=gpt-realtime-mini"
    subprotocols = ["realtime", f"openai-insecure-api-key.{token}"]

    async with websockets.connect(uri, subprotocols=subprotocols) as ws:
        # Expect session.created
        msg = json.loads(await asyncio.wait_for(ws.recv(), timeout=10))
        assert msg.get("type") == "session.created", \
            f"Expected session.created, got: {msg.get('type')}"

        # Send session.update with current GA format
        await ws.send(json.dumps({
            "type": "session.update",
            "session": {
                "type": "realtime",
                "instructions": "You are a helpful assistant.",
                "output_modalities": ["audio"],
                "audio": {
                    "input": {
                        "format": {"type": "audio/pcm", "rate": 24000},
                        "transcription": {"model": "whisper-1"},
                        "turn_detection": None,
                    },
                    "output": {
                        "format": {"type": "audio/pcm", "rate": 24000},
                        "voice": "shimmer",
                    },
                },
            },
        }))

        # Expect session.updated (not error)
        reply = json.loads(await asyncio.wait_for(ws.recv(), timeout=8))
        assert reply.get("type") != "error", \
            f"session.update was rejected: {reply.get('error', {}).get('message', reply)}"
        assert reply.get("type") == "session.updated", \
            f"Expected session.updated, got: {reply.get('type')}"

        # Verify key fields were accepted
        session = reply.get("session", {})
        audio   = session.get("audio", {})
        voice   = audio.get("output", {}).get("voice")
        assert voice == "shimmer", f"voice not set correctly, got: {voice}"

        vad = audio.get("input", {}).get("turn_detection")
        assert vad is None, f"turn_detection should be null (client VAD), got: {vad}"

        instr = session.get("instructions", "")
        assert len(instr) > 0, "instructions not reflected back in session.updated"


def test_realtime_audio_response_events(apikey):
    """WebSocket: send text item → verify response.output_audio.delta fires."""
    asyncio.run(_ws_audio_events(apikey))


async def _ws_audio_events(apikey):
    try:
        import websockets
    except ImportError:
        raise AssertionError("websockets library not installed — run: pip install websockets")

    status, body = post("https://api.openai.com/v1/realtime/client_secrets", "{}", apikey)
    token = json.loads(body).get("value", "")

    uri = "wss://api.openai.com/v1/realtime?model=gpt-realtime-mini"
    async with websockets.connect(uri, subprotocols=["realtime", f"openai-insecure-api-key.{token}"]) as ws:
        await asyncio.wait_for(ws.recv(), timeout=10)  # session.created

        await ws.send(json.dumps({
            "type": "session.update",
            "session": {
                "type": "realtime",
                "instructions": "Reply with the single word: Hello.",
                "output_modalities": ["audio"],
                "audio": {
                    "input": {"format": {"type": "audio/pcm", "rate": 24000}, "turn_detection": None},
                    "output": {"format": {"type": "audio/pcm", "rate": 24000}, "voice": "shimmer"},
                },
            },
        }))
        await asyncio.wait_for(ws.recv(), timeout=8)  # session.updated

        # Send a text message and request response
        await ws.send(json.dumps({
            "type": "conversation.item.create",
            "item": {
                "type": "message", "role": "user",
                "content": [{"type": "input_text", "text": "Say exactly: Hello."}],
            },
        }))
        await ws.send(json.dumps({"type": "response.create"}))

        # Look for the expected audio delta event name
        expected = "response.output_audio.delta"
        seen_types = set()
        for _ in range(30):
            try:
                msg = json.loads(await asyncio.wait_for(ws.recv(), timeout=10))
                t = msg.get("type", "")
                seen_types.add(t)
                if t == expected:
                    return  # Pass
                if t == "response.done":
                    break
                if t == "error":
                    raise AssertionError(f"API error: {msg.get('error', {}).get('message')}")
            except asyncio.TimeoutError:
                break

        raise AssertionError(
            f"Never received '{expected}'. "
            f"Seen: {sorted(seen_types)}. "
            f"(If events were renamed again, update realtime.js event handlers.)"
        )


# ════════════════════════════════════════════════════════════════════════════
# TTS API TESTS
# ════════════════════════════════════════════════════════════════════════════

def test_tts_endpoint(apikey):
    """POST /v1/audio/speech → audio bytes."""
    body = json.dumps({"model": "tts-1", "input": "Hello.", "voice": "shimmer"})
    req = urllib.request.Request(
        "https://api.openai.com/v1/audio/speech",
        data=body.encode(),
        headers={"Authorization": f"Bearer {apikey}", "Content-Type": "application/json"},
    )
    try:
        resp = urllib.request.urlopen(req, timeout=20)
        status = resp.status
        content_type = resp.headers.get("Content-Type", "")
        audio = resp.read()
    except urllib.error.HTTPError as e:
        raise AssertionError(f"HTTP {e.code}: {e.read()[:200]}")

    assert status == 200, f"Expected HTTP 200, got {status}"
    assert "audio" in content_type.lower(), \
        f"Expected audio Content-Type, got: {content_type}"
    assert len(audio) > 1000, \
        f"Audio response suspiciously small ({len(audio)} bytes)"


# ════════════════════════════════════════════════════════════════════════════
# CHAT COMPLETIONS TESTS
# ════════════════════════════════════════════════════════════════════════════

def test_chat_completions(apikey):
    """POST /v1/chat/completions → standard response."""
    body = json.dumps({
        "model": "gpt-4o-mini",
        "messages": [{"role": "user", "content": "Reply with one word: OK"}],
        "max_tokens": 5,
    })
    status, resp_bytes = post("https://api.openai.com/v1/chat/completions", body, apikey, timeout=20)
    assert status == 200, f"Expected HTTP 200, got {status}: {resp_bytes[:200]}"

    data = json.loads(resp_bytes)
    choices = data.get("choices", [])
    assert choices, f"No choices in response. Keys: {list(data.keys())}"
    content = choices[0].get("message", {}).get("content", "")
    assert content, "Empty content in response"


def test_chat_completions_sse(apikey):
    """POST /v1/chat/completions with stream=true → SSE events."""
    body = json.dumps({
        "model": "gpt-4o-mini",
        "messages": [{"role": "user", "content": "Reply with one word: OK"}],
        "max_tokens": 5,
        "stream": True,
    })
    req = urllib.request.Request(
        "https://api.openai.com/v1/chat/completions",
        data=body.encode(),
        headers={"Authorization": f"Bearer {apikey}", "Content-Type": "application/json"},
    )
    try:
        resp = urllib.request.urlopen(req, timeout=20)
    except urllib.error.HTTPError as e:
        raise AssertionError(f"HTTP {e.code}: {e.read()[:200]}")

    assert resp.status == 200, f"Expected HTTP 200, got {resp.status}"

    chunks = []
    for line in resp:
        line = line.decode().strip()
        if line.startswith("data: ") and line != "data: [DONE]":
            chunk = json.loads(line[6:])
            chunks.append(chunk)

    assert chunks, "No SSE data chunks received"
    # Verify delta structure hasn't changed
    first = chunks[0]
    assert "choices" in first, f"No 'choices' in SSE chunk. Keys: {list(first.keys())}"
    delta = first["choices"][0].get("delta", {})
    assert "role" in delta or "content" in delta, \
        f"Unexpected delta structure: {delta}"


# ════════════════════════════════════════════════════════════════════════════
# MAIN
# ════════════════════════════════════════════════════════════════════════════

def main():
    parser = argparse.ArgumentParser(description="SOLA external API smoke tests")
    parser.add_argument("--apikey", required=True, help="OpenAI API key")
    args = parser.parse_args()

    print(bold("\nSOLA API Smoke Tests"))
    print("=" * 50)

    print(f"\n{bold('Realtime API')}")
    run("Token endpoint returns ek_ token",         test_realtime_token_endpoint,         args.apikey)
    run("session.update GA format accepted",         test_realtime_websocket_session_update, args.apikey)
    run("response.output_audio.delta event fires",   test_realtime_audio_response_events,    args.apikey)

    print(f"\n{bold('TTS API')}")
    run("TTS endpoint returns audio",                test_tts_endpoint,                    args.apikey)

    print(f"\n{bold('Chat Completions API')}")
    run("Chat completions response structure",        test_chat_completions,                args.apikey)
    run("Chat completions SSE stream structure",      test_chat_completions_sse,            args.apikey)

    # Summary
    passed = sum(1 for _, ok, _ in results if ok)
    failed = sum(1 for _, ok, _ in results if not ok)
    total  = len(results)

    print("\n" + "=" * 50)
    if failed == 0:
        print(green(f"All {total} tests passed."))
    else:
        print(red(f"{failed}/{total} tests FAILED."))
        print(yellow("\nFailed tests:"))
        for name, ok, err in results:
            if not ok:
                print(f"  - {name}")
                print(f"    {err}")

    sys.exit(0 if failed == 0 else 1)


if __name__ == "__main__":
    main()
