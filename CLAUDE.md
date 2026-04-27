# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

# SOLA — Saylor Online Learning Assistant
## Moodle Plugin: `local_ai_course_assistant`

---

## Project Overview

SOLA (Saylor Online Learning Assistant) is a Moodle local plugin that provides an AI-powered learning coach embedded in course pages. Students interact via a side tab on the right edge of the page (default: halfway down), which opens a chat drawer. A floating avatar button at the bottom corner is an alternative placement available via the Display Mode admin setting.

- **Plugin component:** `local_ai_course_assistant`
- **Current version:** `2026041601`, release `3.5.1`
- **Source folder:** `~/Library/CloudStorage/Dropbox/!Saylor/aicoursetutor/ai_course_assistant/`
- **Zip for upload:** `~/Library/CloudStorage/Dropbox/!Saylor/aicoursetutor/ai_course_assistant.zip`
- **GitHub:** `https://github.com/saylordotorg/moodle-local_ai_course_assistant` (public)

---

## Key Features

- Multi-provider AI backend with SSE streaming
- Personalized greeting and coaching (first name, nicknames, encouragement style)
- Practice quizzes (setup panel + interactive question cards + score summary)
- Study plans and scheduled reminders
- Analytics dashboard (usage, provider comparison)
- Per-course configuration (`classes/course_config_manager.php`)
- 46-language i18n with auto-detection; 46-lang STT/TTS support
- Voice input (STT) and output (OpenAI TTS with browser Speech API fallback)
- OpenAI Realtime voice mode (WebSocket, live transcript, ELL coaching)
- Procedurally-generated SVG avatar (3 genders, 5 skin tones, 6 hair colours, 3 styles/gender)
- Draggable widget (header + avatar toggle button)
- Resizable drawer (drag N/W/NW handles); size saved to localStorage
- 2-state expand (normal / expanded)
- 50-pair conversation cap
- Dynamic SOLA_NEXT suggestion chips after each AI response
- RAG semantic search (embedding-based retrieval, disabled by default)
- Conversation starters overlay (shown on open / after reset / after quiz exit)

---

## Important Architecture Notes

- `handleReset` keeps message history visible — it just shows the starters overlay on top; history is NOT cleared
- Topic picker (starters): no AI-guided option; quiz setup keeps AI-guided option
- Exiting a quiz (exit button or cancel) returns to the conversation starters view
- `data-firstname` is passed from PHP → mustache → JS for personalized greetings
- `bindEvents` has null guards on all optional buttons (clearBtn, expandBtn, micBtn, etc.) — if a button is removed from the mustache, it won't crash init
- Admin settings link removed from header (was duplicate gear); admins use Moodle admin UI for course settings
- SOLA_NEXT: system prompt emits `[SOLA_NEXT]chip1||chip2||chip3||chip4[/SOLA_NEXT]`; `chat.js` strips tag and calls `UI.showSuggestions()`; tags are never shown to students
- Starter translations live in `STARTER_LABELS` in `amd/src/speech.js` (46 languages)
- SVG avatar: `buildFaceSVG()` + `renderAvatar()` in `ui.js`; prefs in localStorage `aica_avatar`; legacy img hidden when SVG active

---

## Key Files

| File | Purpose |
|------|---------|
| `classes/hook_callbacks.php` | Injects widget into course pages; builds template data |
| `classes/context_builder.php` | Builds AI system prompt; personalization; multilingual instructions; SOLA_NEXT instruction |
| `classes/course_config_manager.php` | Per-course AI configuration |
| `classes/analytics.php` | Usage analytics and provider comparison |
| `classes/external/generate_quiz.php` | Quiz generation (AI-guided + manual topic) |
| `classes/external/get_realtime_token.php` | Fetches OpenAI Realtime ephemeral token |
| `classes/external/save_avatar_preference.php` | Saves avatar selection to user preferences |
| `rag_admin.php` | RAG index admin page (stat cards, per-course reindex/clear) |
| `sse.php` | SSE streaming endpoint; requires `lib/filelib.php` for curl |
| `tts.php` | OpenAI TTS endpoint |
| `amd/src/chat.js` | Main chat controller; event binding; quiz/STT/voice routing; SOLA_NEXT parsing |
| `amd/src/ui.js` | DOM manipulation; widget state; drag; expand; SVG avatar; settings panel; suggestions |
| `amd/src/quiz.js` | Quiz setup panel + interactive question cards + summary |
| `amd/src/speech.js` | STT/TTS; voice quality scoring; language detection; STARTER_LABELS (46-lang) |
| `amd/src/realtime.js` | OpenAI Realtime WebSocket; mic capture; PCM16 playback; ELL mode |
| `amd/src/repository.js` | Moodle web service calls (history, avatar, clear, realtime token, etc.) |
| `amd/src/sse_client.js` | SSE streaming client |
| `lang/en/local_ai_course_assistant.php` | All English strings |
| `templates/chat_widget.mustache` | Main widget HTML template |
| `styles.css` | All widget CSS |

---

## Header Buttons (current layout)

From left to right in `.local-ai-course-assistant__header-actions`:
1. Voice button (`.btn-voice`) — headphone icon; conditional on `{{#realtimeenabled}}`
2. Analytics link (`.btn-analytics`) — stats icon; conditional on `{{#canviewanalytics}}`
3. Settings panel (`.btn-settings-panel`) — gear icon; opens in-drawer language/avatar/voice panel
4. Clear history (`.btn-clear`) — trash icon; confirms then clears conversation
5. Reset/Home (`.btn-reset`) — home icon; shows starters overlay without clearing history
6. Expand (`.btn-expand`) — arrows icon; toggles expanded state
7. Close (`.btn-close`) — X icon; closes drawer

> **Note:** The admin course settings link (`btn-settings`) was removed to eliminate a duplicate gear icon. Admins access course settings via the Moodle admin interface.

---

## Build Process

**CRITICAL: Always rebuild AMD build files after any JS change.**
Moodle serves `amd/build/*.min.js`, NOT the source files in `amd/src/`. Changes to source files have no effect until rebuilt.

### Rebuild JS (terser required):
```bash
BASE="/Users/tom.caswell/Library/CloudStorage/Dropbox/!Saylor/aicoursetutor/ai_course_assistant"
for f in chat ui quiz speech repository sse_client markdown audio_player realtime; do
  terser "$BASE/amd/src/${f}.js" --compress --mangle \
    --source-map "url=${f}.min.js.map" \
    -o "$BASE/amd/build/${f}.min.js"
done
```
Only rebuild the files you actually changed to save time.

### Build zip (must use Python subprocess — `!` in path causes zsh history expansion):
```python
python3 -c "import subprocess,os; subprocess.run(['bash', 'ai_course_assistant/create_fixed_zip.sh'], cwd=os.path.expanduser('~/Library/CloudStorage/Dropbox/!Saylor/aicoursetutor'), capture_output=True)"
```

---

## Release Process

Every tagged release must ship with a release-notes-and-walkthrough draft in `.drafts/`. The draft has three parts: a terse changelog headline + bullets, a "Key SOLA Features" snapshot, and a 20-minute conversational admin walkthrough script. These drafts become the source of truth for the GH release body, onboarding docs, and admin demo scripts.

### Seed the draft (first step of every release)
```bash
python3 scripts/new_release_notes.py --version 3.9.6
# -> writes .drafts/v3.9.6-release-notes-and-walkthrough.md with TODOs
```
Then carry forward Part 2 (Key Features) and Part 3 (Admin Walkthrough) from the most recent `.drafts/v*-release-notes-and-walkthrough.md`, updating only the sections that drifted. Fill in Part 1 with the headline + bullets for this release.

### Release checklist (run in order)
1. `python3 scripts/new_release_notes.py --version <N>` and fill the TODOs.
2. Bump `version.php` (`$plugin->version` and `$plugin->release`).
3. Update `.wiki/Changelog.md`.
4. Run i18n sync, PHP lint, jailbreak test (25/25), validator suite: `php admin/cli/run_validators.php` (must be 0 failures).
5. Commit plugin + wiki, tag `v<N>`, push, `gh release create` using the `.drafts/` file as the body source.
6. `python3 deploy_dev.py --target all` and verify BUS101 smoke on all 4 dev sites.

The validator suite is corpus-driven (`tests/security/`) and runs in milliseconds against static fixtures — no LLM round-trip, no cost. Skipping it is fine for CSS-only or i18n-only fixes; required otherwise.

---

## Local Development

- **Moodle 4.5** at `~/Sites/moodle/`, moodledata at `~/Sites/moodledata/`
- **MySQL:** `brew services start mysql` — db=`moodle`, user=`moodle`, pass=`moodle`
- **PHP 8.3:** `/opt/homebrew/opt/php@8.3/bin/php`
- **Start server:** `/opt/homebrew/opt/php@8.3/bin/php -S 0.0.0.0:8080 -t ~/Sites/moodle`
  - Use `0.0.0.0` not `localhost` — makes it accessible on Tailscale network
- **URL:** http://localhost:8080 — admin: `admin` / `Admin1234!`
- **Test course:** id=2 (TEST101 "Test Course 101") with sections "Introduction", "Core Concepts"
- **Plugin location:** `~/Sites/moodle/local/ai_course_assistant/` (direct copy, no symlink)

### Deploy to local Moodle:
```bash
rsync -a --exclude=.git \
  "/Users/tom.caswell/Library/CloudStorage/Dropbox/!Saylor/aicoursetutor/ai_course_assistant/" \
  ~/Sites/moodle/local/ai_course_assistant/
```

### ALWAYS purge caches after every deploy — no exceptions:
```bash
/opt/homebrew/opt/php@8.3/bin/php ~/Sites/moodle/admin/cli/purge_caches.php
```

---

## i18n

- **46 language files:** en + ar, am, bg, bm, bn, cs, da, de, el, es, fi, fr, ha, he, hi, hu, id, ig, it, ja, ko, ms, nb, ne, nl, om, pa, pl, pt_br, ro, ru, sk, so, sv, sw, ta, th, tl, tr, uk, vi, wo, yo, zh_cn, zu
- Lang codes for STT/TTS: `amd/src/speech.js` → `SUPPORTED_LANGS` (46 total, including `en`)
- Starter button translations: `STARTER_LABELS` in `amd/src/speech.js` (46 languages × 5 starters)
- ISO 639-1 → language name mapping: `classes/context_builder.php::get_multilingual_instructions()`
- **JS string substitution:** Moodle's string cache returns raw `{$a}` — always do `.replace('{$a}', value)` in JS rather than relying on `Str.get_string()` third-argument substitution

---

## RAG (Retrieval-Augmented Generation)

- Disabled by default; enable in plugin settings
- Admin page: `rag_admin.php` — stat cards (courses indexed, chunks, embedded, active), per-course reindex/clear buttons
- **Critical:** `sse.php` must `require_once($CFG->dirroot . '/lib/filelib.php')` before calling embedding providers (curl class dependency)
- Catch block uses `\Throwable` (not `\Exception`) so PHP Errors fall back gracefully

---

## Upcoming Work

1. Talking avatars in the plugin (pricing/architecture discussion pending)
