import { resolve, dirname } from 'path';
import { fileURLToPath } from 'url';
import { readFileSync } from 'fs';
import terser from '@rollup/plugin-terser';
import postcss from 'rollup-plugin-postcss';

const __dirname = dirname(fileURLToPath(import.meta.url));
const amdSrc = resolve(__dirname, '..', 'amd', 'src');

/**
 * Build a single concatenated bundle that includes a mini AMD loader,
 * all shim modules, and all plugin AMD modules.
 *
 * This avoids trying to convert AMD→ESM (fragile with regex on large files).
 * Instead, we provide a real `define()` function that the AMD modules call,
 * then resolve the dependency graph and execute them.
 */
export default {
    input: resolve(__dirname, 'entry-bundle.js'),
    output: {
        file: resolve(__dirname, 'dist', 'sola.min.js'),
        format: 'iife',
        name: 'SOLA',
        sourcemap: true,
    },
    plugins: [
        // Inline all AMD source files into the bundle entry.
        {
            name: 'bundle-amd',
            load(id) {
                if (id === resolve(__dirname, 'entry-bundle.js')) {
                    return buildBundle();
                }
                return null;
            },
        },

        // Bundle and minify CSS.
        postcss({
            extract: 'sola.min.css',
            minimize: true,
        }),

        // Minify JS.
        terser({
            format: { comments: false },
        }),
    ],
};

function buildBundle() {
    // Read shim files.
    const ajaxShim = readFileSync(resolve(__dirname, 'shims', 'ajax.js'), 'utf8');
    const strShim = readFileSync(resolve(__dirname, 'shims', 'str.js'), 'utf8');

    // Read all AMD source modules. Dependency order: deps first.
    const modules = [
        'markdown', 'audio_player', 'sse_client', 'speech', 'realtime',
        'voice', 'repository', 'quiz', 'i18n_strings', 'ui', 'chat',
    ];

    const amdSources = modules.map(name => {
        const code = readFileSync(resolve(amdSrc, name + '.js'), 'utf8');
        return { name, code };
    });

    // Build the bundle: mini AMD loader + shims + modules + init.
    let bundle = `
// CDN bundle for SOLA - auto-generated, do not edit.
import '../styles.css';

(function() {
    'use strict';

    // ---- Mini AMD loader ----
    var _modules = {};   // name → {deps, factory}
    var _resolved = {};  // name → exports

    function define(deps, factory) {
        // Called by each AMD module. We capture via _currentModule.
        if (typeof deps === 'function') {
            factory = deps;
            deps = [];
        }
        _modules[_currentModule] = {deps: deps, factory: factory};
    }
    define.amd = {};

    var _currentModule = '';

    function _resolve(name) {
        if (_resolved[name] !== undefined) {
            return _resolved[name];
        }
        var mod = _modules[name];
        if (!mod) {
            throw new Error('SOLA CDN: Unknown module "' + name + '"');
        }
        // Resolve dependencies first.
        var resolvedDeps = mod.deps.map(function(dep) {
            // Normalize module names.
            var normalized = dep.replace('local_ai_course_assistant/', '');
            if (dep === 'core/ajax') normalized = 'core/ajax';
            if (dep === 'core/str') normalized = 'core/str';
            return _resolve(normalized);
        });
        var exports = mod.factory.apply(null, resolvedDeps);
        _resolved[name] = exports;
        return exports;
    }

    // ---- Register shim modules ----

    // core/ajax shim
    _resolved['core/ajax'] = (function() {
        ${ajaxShim.replace(/export\s+default\s+.*/, '').replace(/export\s*\{[^}]*\}/, '')}
        return {call: call};
    })();

    // core/str shim
    _resolved['core/str'] = (function() {
        ${strShim.replace(/export\s+default\s+.*/, '').replace(/export\s*\{[^}]*\}/, '')}
        return {get_string: get_string, get_strings: get_strings};
    })();

    // ---- Register AMD modules ----
`;

    for (const { name, code } of amdSources) {
        bundle += `
    _currentModule = '${name}';
    ${code}
`;
    }

    bundle += `
    // ---- Initialize ----
    var Chat = _resolve('chat');
    if (typeof Chat.init === 'function') {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', function() { Chat.init(); });
        } else {
            Chat.init();
        }
    }

})();
`;

    return bundle;
}
