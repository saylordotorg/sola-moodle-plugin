# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

# SOLA — Saylor Online Learning Assistant
## Moodle Plugin: `local_ai_course_assistant`

---

## Project Overview

SOLA (Saylor Online Learning Assistant) is a Moodle local plugin that provides an AI-powered learning coach embedded in course pages. Students interact via a floating chat widget.

- **Plugin component:** `local_ai_course_assistant`
- **Current version:** `2025011800`, release `0.6.0`
- **Source folder:** `~/Dropbox/!Saylor/aicoursetutor/ai_course_assistant/`
- **Zip for upload:** `~/Dropbox/!Saylor/aicoursetutor/ai_course_assistant.zip`

---

## Key Features

- Multi-provider AI backend with SSE streaming
- Personalized greeting and coaching (first name, nicknames, encouragement style)
- Practice quizzes (setup panel + interactive cards + score summary)
- Study plans and scheduled reminders
- Analytics dashboard (usage, provider comparison)
- Per-course configuration
- 26-language i18n with auto-detection
- Voice input (STT) and output (TTS) with quality voice selection
- Draggable widget (header + avatar toggle button)
- 3-state expand (normal / expanded / fullscreen)
- 50-pair conversation cap
- Conversation starters overlay (shown on open / after reset / after quiz exit)

---

## Important Architecture Notes

- `handleReset` keeps message history visible — it just shows the starters overlay on top; history is NOT cleared
- Topic picker (starters): no AI-guided option — defaults to "Current course content"
- Quiz setup: keeps AI-guided option
- Exiting a quiz (exit button or cancel) returns to the conversation starters view
- `data-firstname` is passed from PHP → mustache → JS for personalized greetings

---

## Key Files

| File | Purpose |
|------|---------|
| `classes/hook_callbacks.php` | Injects widget into course pages; builds template data |
| `classes/context_builder.php` | Builds AI system prompt; personalization; multilingual instructions |
| `classes/course_config_manager.php` | Per-course AI configuration |
| `classes/analytics.php` | Usage analytics and provider comparison |
| `classes/external/generate_quiz.php` | Quiz generation (AI-guided + manual topic) |
| `amd/src/chat.js` | Main chat controller; event binding; quiz/STT routing |
| `amd/src/ui.js` | DOM manipulation; widget state; drag; expand; welcome modal |
| `amd/src/quiz.js` | Quiz setup panel + interactive question cards + summary |
| `amd/src/speech.js` | STT/TTS; voice quality scoring; language detection |
| `amd/src/repository.js` | Moodle web service calls |
| `amd/src/sse_client.js` | SSE streaming client |
| `lang/en/local_ai_course_assistant.php` | All English strings |
| `templates/chat_widget.mustache` | Main widget HTML template |
| `styles.css` | All widget CSS |

---

## Build Process

**CRITICAL: Always rebuild AMD build files after any JS change.**
Moodle serves `amd/build/*.min.js`, NOT the source files in `amd/src/`. Changes to source files have no effect until rebuilt.

### Rebuild JS (terser required):
```bash
BASE=~/Dropbox/\!Saylor/aicoursetutor/ai_course_assistant
for f in chat ui quiz speech repository sse_client markdown audio_player; do
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
cp -r ~/Dropbox/\!Saylor/aicoursetutor/ai_course_assistant ~/Sites/moodle/local/ && \
/opt/homebrew/opt/php@8.3/bin/php ~/Sites/moodle/admin/cli/upgrade.php --non-interactive
```

### ALWAYS purge caches after every deploy — no exceptions:
```bash
/opt/homebrew/opt/php@8.3/bin/php ~/Sites/moodle/admin/cli/purge_caches.php
```

---

## i18n

- **26 language files:** en + ar, am, bm, bn, es, fr, ha, hi, id, ig, ms, ne, om, pa, pt_br, ru, so, sw, ta, tl, vi, wo, yo, zh_cn, zu
- Lang codes for STT/TTS: `amd/src/speech.js` → `SUPPORTED_LANGS` (43 total)
- ISO 639-1 → language name mapping: `classes/context_builder.php::get_multilingual_instructions()`
- **JS string substitution:** Moodle's string cache returns raw `{$a}` — always do `.replace('{$a}', value)` in JS rather than relying on `Str.get_string()` third-argument substitution

---

## Upcoming Work

1. Talking avatars (cost discussion pending)
