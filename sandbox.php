<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Learner-facing in-browser Python code sandbox (v3.9.26).
 *
 * Runs Python entirely in the learner's browser via Pyodide
 * (Python-compiled-to-WebAssembly). Code never leaves the device; no
 * server-side execution. Per-course toggle so courses without code
 * work do not see it.
 *
 * @package    local_ai_course_assistant
 * @copyright  2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once(__DIR__ . '/../../config.php');

require_login();

$courseid = required_param('courseid', PARAM_INT);
$course = get_course($courseid);
$context = context_course::instance($courseid);
require_capability('local/ai_course_assistant:use', $context);

if (!\local_ai_course_assistant\feature_flags::resolve('code_sandbox', $courseid)) {
    throw new \moodle_exception('sandbox:disabled', 'local_ai_course_assistant');
}

$pageurl = new moodle_url('/local/ai_course_assistant/sandbox.php', ['courseid' => $courseid]);
$PAGE->set_url($pageurl);
$PAGE->set_context($context);
$PAGE->set_pagelayout('incourse');
$PAGE->set_course($course);
$PAGE->set_title(get_string('sandbox:title', 'local_ai_course_assistant'));
$PAGE->set_heading($course->fullname);

// Note: NOT calling security::send_security_headers() here — the bundled
// Moodle CSP from the theme is permissive enough for Pyodide's WASM
// fetches from jsdelivr. The default CSP we ship in
// classes/security.php restricts script-src to 'self' which would block
// Pyodide. The sandbox page is the one place we accept the looser CSP
// since Pyodide must load WASM + scripts from cdn.jsdelivr.net.

echo $OUTPUT->header();
?>
<div style="max-width:980px;margin:0 auto">
    <h2><?php echo get_string('sandbox:title', 'local_ai_course_assistant'); ?></h2>
    <p class="text-muted"><?php echo get_string('sandbox:intro', 'local_ai_course_assistant'); ?></p>

    <div id="aica-sandbox-status"
         style="padding:10px 14px;background:#f3f4f6;border:1px solid #e5e7eb;border-radius:8px;margin:14px 0;font-size:13px;color:#4b5563">
        <?php echo get_string('sandbox:loading', 'local_ai_course_assistant'); ?>
    </div>

    <label for="aica-sandbox-code" style="display:block;font-weight:600;margin-bottom:6px">
        <?php echo get_string('sandbox:code_label', 'local_ai_course_assistant'); ?>
    </label>
    <textarea id="aica-sandbox-code" rows="14"
              spellcheck="false"
              style="width:100%;font-family:Menlo,Monaco,Consolas,monospace;font-size:13px;line-height:1.55;padding:10px;border:1px solid #d1d5db;border-radius:8px;tab-size:4"
              placeholder="# Write Python here. Click Run.&#10;print('hello')"># Try this — square the numbers 1 to 10
for n in range(1, 11):
    print(n, n*n)
</textarea>

    <div style="display:flex;gap:10px;margin-top:10px;align-items:center">
        <button type="button" id="aica-sandbox-run" class="btn btn-primary" disabled>
            <?php echo get_string('sandbox:run', 'local_ai_course_assistant'); ?>
        </button>
        <button type="button" id="aica-sandbox-clear" class="btn btn-outline-secondary">
            <?php echo get_string('sandbox:clear', 'local_ai_course_assistant'); ?>
        </button>
        <span id="aica-sandbox-running" style="display:none;color:#6b7280;font-size:13px">
            <?php echo get_string('sandbox:running', 'local_ai_course_assistant'); ?>
        </span>
    </div>

    <h3 style="margin-top:24px;font-size:14px;text-transform:uppercase;letter-spacing:0.04em;color:#6b7280">
        <?php echo get_string('sandbox:output_heading', 'local_ai_course_assistant'); ?>
    </h3>
    <pre id="aica-sandbox-stdout"
         style="background:#0f172a;color:#e2e8f0;padding:14px;border-radius:8px;font-family:Menlo,Monaco,Consolas,monospace;font-size:13px;line-height:1.55;min-height:60px;max-height:360px;overflow:auto;margin:0"></pre>
    <pre id="aica-sandbox-stderr"
         style="background:#7f1d1d;color:#fee2e2;padding:14px;border-radius:8px;font-family:Menlo,Monaco,Consolas,monospace;font-size:13px;line-height:1.55;margin:8px 0 0;display:none;max-height:240px;overflow:auto"></pre>

    <p style="margin-top:18px;font-size:12px;color:#6b7280">
        <?php echo get_string('sandbox:privacy_note', 'local_ai_course_assistant'); ?>
    </p>
</div>

<!--
Pyodide loader. Loads ~10MB of WASM the first time. Subsequent loads hit
the browser cache. Subresource-integrity intentionally omitted because
the Pyodide bundle includes hash-stamped sub-files; SRI on the loader
script alone provides limited protection. Operators worried about
supply-chain risk can self-host Pyodide and override the URL via the
data-pyodide-base attribute below.
-->
<script>
window.languagePluginUrl = 'https://cdn.jsdelivr.net/pyodide/v0.27.0/full/';
</script>
<script src="https://cdn.jsdelivr.net/pyodide/v0.27.0/full/pyodide.js"></script>

<script>
(function() {
    var status = document.getElementById('aica-sandbox-status');
    var runBtn = document.getElementById('aica-sandbox-run');
    var clearBtn = document.getElementById('aica-sandbox-clear');
    var runningSpan = document.getElementById('aica-sandbox-running');
    var stdout = document.getElementById('aica-sandbox-stdout');
    var stderr = document.getElementById('aica-sandbox-stderr');
    var codeArea = document.getElementById('aica-sandbox-code');
    var pyodide = null;
    var loading = false;

    async function init() {
        if (loading || pyodide) { return; }
        loading = true;
        try {
            pyodide = await window.loadPyodide({
                indexURL: 'https://cdn.jsdelivr.net/pyodide/v0.27.0/full/'
            });
            // Capture stdout + stderr by redirecting Python sys streams
            // to JS console batchers we read after each run().
            pyodide.runPython(
                'import sys, io\n' +
                '_aica_out = io.StringIO()\n' +
                '_aica_err = io.StringIO()\n' +
                'sys.stdout = _aica_out\n' +
                'sys.stderr = _aica_err\n'
            );
            status.textContent = '<?php echo get_string('sandbox:ready', 'local_ai_course_assistant'); ?>';
            status.style.background = '#ecfdf5';
            status.style.borderColor = '#a7f3d0';
            status.style.color = '#065f46';
            runBtn.disabled = false;
        } catch (e) {
            status.textContent = '<?php echo get_string('sandbox:load_error', 'local_ai_course_assistant'); ?>';
            status.style.background = '#fef2f2';
            status.style.borderColor = '#fecaca';
            status.style.color = '#991b1b';
        }
        loading = false;
    }

    function resetBuffers() {
        pyodide.runPython(
            '_aica_out.seek(0); _aica_out.truncate(0)\n' +
            '_aica_err.seek(0); _aica_err.truncate(0)\n'
        );
    }
    function readBuffer(name) {
        return pyodide.runPython(name + '.getvalue()');
    }

    runBtn.addEventListener('click', async function() {
        if (!pyodide) { return; }
        runBtn.disabled = true;
        runningSpan.style.display = 'inline';
        stdout.textContent = '';
        stderr.textContent = '';
        stderr.style.display = 'none';
        var code = codeArea.value;
        try {
            resetBuffers();
            await pyodide.runPythonAsync(code);
            stdout.textContent = readBuffer('_aica_out');
            var errOut = readBuffer('_aica_err');
            if (errOut) {
                stderr.textContent = errOut;
                stderr.style.display = 'block';
            }
        } catch (err) {
            // Pyodide raises a JS error wrapping the Python traceback.
            stdout.textContent = readBuffer('_aica_out');
            stderr.textContent = (err && err.message) ? err.message : String(err);
            stderr.style.display = 'block';
        } finally {
            runBtn.disabled = false;
            runningSpan.style.display = 'none';
        }
    });

    clearBtn.addEventListener('click', function() {
        stdout.textContent = '';
        stderr.textContent = '';
        stderr.style.display = 'none';
    });

    // Tab key inserts a tab character instead of leaving the textarea.
    codeArea.addEventListener('keydown', function(e) {
        if (e.key === 'Tab') {
            e.preventDefault();
            var s = codeArea.selectionStart, eend = codeArea.selectionEnd;
            codeArea.value = codeArea.value.substring(0, s) + '    ' + codeArea.value.substring(eend);
            codeArea.selectionStart = codeArea.selectionEnd = s + 4;
        }
    });

    if (typeof window.loadPyodide === 'function') {
        init();
    } else {
        // Pyodide loader still streaming; poll briefly.
        var attempts = 0;
        var t = setInterval(function() {
            if (typeof window.loadPyodide === 'function') {
                clearInterval(t);
                init();
            } else if (++attempts > 60) {
                clearInterval(t);
                status.textContent = '<?php echo get_string('sandbox:load_error', 'local_ai_course_assistant'); ?>';
            }
        }, 250);
    }
})();
</script>
<?php
echo $OUTPUT->footer();
