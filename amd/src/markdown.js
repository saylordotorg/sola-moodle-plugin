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
 * Lightweight markdown to HTML converter.
 *
 * Supports: bold, italic, inline code, code blocks, headers, lists, links.
 * Sanitizes output to a safe HTML subset.
 *
 * @module     local_ai_course_assistant/markdown
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define([], function() {

    /**
     * Escape HTML special characters.
     *
     * @param {string} text
     * @returns {string}
     */
    const escapeHtml = function(text) {
        const map = {'&': '&amp;', '<': '&lt;', '>': '&gt;', '"': '&quot;', "'": '&#039;'};
        return text.replace(/[&<>"']/g, function(c) {
            return map[c];
        });
    };

    /**
     * Process inline markdown (bold, italic, links).
     *
     * @param {string} text
     * @returns {string}
     */
    const processInline = function(text) {
        let result = escapeHtml(text);

        // Bold: **text** or __text__
        result = result.replace(/\*\*(.+?)\*\*/g, '<strong>$1</strong>');
        result = result.replace(/__(.+?)__/g, '<strong>$1</strong>');

        // Italic: *text* or _text_
        result = result.replace(/\*(.+?)\*/g, '<em>$1</em>');
        result = result.replace(/_(.+?)_/g, '<em>$1</em>');

        // Links: [text](url) — URL scheme is checked against a denylist so that
        // poisoned AI output or RAG content cannot emit javascript:, data:,
        // vbscript:, or file: URIs that would execute when a learner clicks.
        result = result.replace(
            /\[([^\]]+)\]\(([^)]+)\)/g,
            function(match, linkText, url) {
                var trimmed = String(url).trim();
                if (/^(javascript|data|vbscript|file):/i.test(trimmed)) {
                    trimmed = 'about:blank';
                }
                return '<a href="' + trimmed + '" target="_blank" rel="noopener noreferrer">' + linkText + '</a>';
            }
        );

        return result;
    };

    /**
     * Defense in depth sanitizer: strip dangerous constructs from any HTML
     * string before it is assigned to innerHTML. Callers that render AI output
     * pass the markdown.render() result through this. The allowlist of tags
     * that markdown.render() emits is narrow; this function is a safety net for
     * anything that slipped through and for callers that bypass render().
     *
     * @param {string} html
     * @returns {string}
     */
    const sanitize = function(html) {
        if (!html) {
            return '';
        }
        var out = String(html);
        // Remove <script> blocks entirely.
        out = out.replace(/<script[\s\S]*?<\/script>/gi, '');
        // Remove <iframe>, <object>, <embed>, <form>, <style>, <link>, <meta>.
        out = out.replace(/<\/?(iframe|object|embed|form|style|link|meta)[^>]*>/gi, '');
        // Strip event-handler attributes (onclick, onerror, onload, etc.).
        out = out.replace(/\s+on[a-z]+\s*=\s*("[^"]*"|'[^']*'|[^\s>]+)/gi, '');
        // Strip javascript:, vbscript:, data:text/html URIs inside href and src.
        out = out.replace(/(\s(?:href|src)\s*=\s*["']?)\s*(?:javascript|vbscript|data\s*:\s*text\/html)\s*:[^"'\s>]*/gi, '$1about:blank');
        return out;
    };

    /**
     * Convert markdown text to HTML.
     *
     * @param {string} text Raw markdown text
     * @returns {string} HTML string
     */
    const render = function(text) {
        if (!text) {
            return '';
        }

        // Normalize line endings.
        let md = text.replace(/\r\n/g, '\n');

        // Extract code blocks first to protect them from further processing.
        const codeBlocks = [];
        md = md.replace(/```(\w*)\n([\s\S]*?)```/g, function(match, lang, code) {
            const idx = codeBlocks.length;
            codeBlocks.push('<pre><code' + (lang ? ' class="language-' + escapeHtml(lang) + '"' : '') +
                '>' + escapeHtml(code.replace(/\n$/, '')) + '</code></pre>');
            return '\x00CODEBLOCK' + idx + '\x00';
        });

        // Extract inline code.
        const inlineCodes = [];
        md = md.replace(/`([^`]+)`/g, function(match, code) {
            const idx = inlineCodes.length;
            inlineCodes.push('<code>' + escapeHtml(code) + '</code>');
            return '\x00INLINECODE' + idx + '\x00';
        });

        // Process line by line.
        const lines = md.split('\n');
        const output = [];
        let inList = false;
        let listType = '';

        for (let i = 0; i < lines.length; i++) {
            let line = lines[i];

            // Check for code block placeholder.
            const codeBlockMatch = line.match(/^\x00CODEBLOCK(\d+)\x00$/);
            if (codeBlockMatch) {
                if (inList) {
                    output.push(listType === 'ul' ? '</ul>' : '</ol>');
                    inList = false;
                }
                output.push(codeBlocks[parseInt(codeBlockMatch[1])]);
                continue;
            }

            // Headers.
            const headerMatch = line.match(/^(#{1,3})\s+(.+)$/);
            if (headerMatch) {
                if (inList) {
                    output.push(listType === 'ul' ? '</ul>' : '</ol>');
                    inList = false;
                }
                const level = headerMatch[1].length;
                output.push('<h' + level + '>' + processInline(headerMatch[2]) + '</h' + level + '>');
                continue;
            }

            // Unordered list items.
            const ulMatch = line.match(/^[\s]*[-*+]\s+(.+)$/);
            if (ulMatch) {
                if (!inList || listType !== 'ul') {
                    if (inList) {
                        output.push(listType === 'ul' ? '</ul>' : '</ol>');
                    }
                    output.push('<ul>');
                    inList = true;
                    listType = 'ul';
                }
                output.push('<li>' + processInline(ulMatch[1]) + '</li>');
                continue;
            }

            // Ordered list items.
            const olMatch = line.match(/^[\s]*\d+\.\s+(.+)$/);
            if (olMatch) {
                if (!inList || listType !== 'ol') {
                    if (inList) {
                        output.push(listType === 'ul' ? '</ul>' : '</ol>');
                    }
                    output.push('<ol>');
                    inList = true;
                    listType = 'ol';
                }
                output.push('<li>' + processInline(olMatch[1]) + '</li>');
                continue;
            }

            // Empty line — peek ahead so blank lines between list items don't break the list.
            // AI models frequently emit blank lines between numbered items, which would otherwise
            // cause each item to start a new <ol> and reset the counter to 1.
            if (line.trim() === '') {
                if (inList) {
                    let j = i + 1;
                    while (j < lines.length && lines[j].trim() === '') { j++; }
                    const peek = j < lines.length ? lines[j] : '';
                    const nextIsOl = !!peek.match(/^[\s]*\d+\.\s+/);
                    const nextIsUl = !!peek.match(/^[\s]*[-*+]\s+/);
                    if ((listType === 'ol' && nextIsOl) || (listType === 'ul' && nextIsUl)) {
                        continue; // Blank line inside a list — stay in list
                    }
                    output.push(listType === 'ul' ? '</ul>' : '</ol>');
                    inList = false;
                }
                continue;
            }

            // Close list if we hit a non-list, non-empty line.
            if (inList) {
                output.push(listType === 'ul' ? '</ul>' : '</ol>');
                inList = false;
            }

            // Regular paragraph.
            output.push('<p>' + processInline(line) + '</p>');
        }

        // Close any open list.
        if (inList) {
            output.push(listType === 'ul' ? '</ul>' : '</ol>');
        }

        let html = output.join('\n');

        // Restore inline code.
        html = html.replace(/\x00INLINECODE(\d+)\x00/g, function(match, idx) {
            return inlineCodes[parseInt(idx)];
        });

        // Restore code blocks.
        html = html.replace(/\x00CODEBLOCK(\d+)\x00/g, function(match, idx) {
            return codeBlocks[parseInt(idx)];
        });

        return html;
    };

    return {
        render: render,
        sanitize: sanitize
    };
});
