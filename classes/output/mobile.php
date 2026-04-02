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

namespace local_ai_course_assistant\output;

/**
 * Mobile output class for local_ai_course_assistant.
 *
 * Provides a simplified chat interface for the Moodle mobile app.
 * Uses non-streaming web service calls (no SSE) since the mobile
 * app's WebView does not support EventSource reliably.
 *
 * NOTE: The template HTML is rendered by the mobile app's Angular engine,
 * NOT by Moodle's mustache. We return raw HTML strings with Angular
 * directives — never use $OUTPUT->render_from_template() here.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mobile {

    /**
     * Returns the mobile view for the SOLA chat within a course.
     *
     * @param array $args Arguments with 'courseid'.
     * @return array Template, JS, and data for the mobile app.
     */
    public static function mobile_course_view($args) {
        global $USER;

        $courseid = (int) ($args['courseid'] ?? 0);
        if (!$courseid) {
            return ['templates' => [], 'javascript' => '', 'otherdata' => []];
        }

        // Check capability.
        $context = \context_course::instance($courseid);
        require_capability('local/ai_course_assistant:use', $context);

        // Check if plugin is enabled globally and for this course.
        $enabled = (bool) get_config('local_ai_course_assistant', 'enabled');
        $courseenabled = get_config('local_ai_course_assistant', 'sola_enabled_course_' . $courseid);
        if (!$enabled || $courseenabled === '0') {
            return [
                'templates' => [
                    [
                        'id' => 'main',
                        'html' => '<div style="padding:32px;text-align:center;">'
                            . '<p>{{ "plugin.local_ai_course_assistant.mobile_disabled" | translate }}</p>'
                            . '</div>',
                    ],
                ],
                'javascript' => '',
                'otherdata' => [],
            ];
        }

        $displayname = get_config('local_ai_course_assistant', 'display_name') ?: 'SOLA';
        $firstname = $USER->firstname;
        $course = get_course($courseid);

        return [
            'templates' => [
                [
                    'id' => 'main',
                    'html' => self::get_mobile_template($firstname, $displayname),
                ],
            ],
            'javascript' => self::get_mobile_js(),
            'otherdata' => [
                'courseid' => (string) $courseid,
                'firstname' => $firstname,
                'displayname' => $displayname,
            ],
        ];
    }

    /**
     * Returns the Angular/Ionic HTML template for the mobile chat.
     *
     * @param string $firstname Student's first name (baked into template).
     * @param string $displayname Plugin display name (baked into template).
     * @return string Raw HTML with Angular directives.
     */
    private static function get_mobile_template(string $firstname, string $displayname): string {
        $firstname = htmlspecialchars($firstname, ENT_QUOTES, 'UTF-8');
        $displayname = htmlspecialchars($displayname, ENT_QUOTES, 'UTF-8');

        return <<<HTML
<div class="aica-mobile-chat">

    <!-- Welcome screen (no messages yet) -->
    <div *ngIf="!messages || messages.length === 0" style="text-align:center;padding:32px 16px;">
        <ion-icon name="school-outline" style="font-size:48px;color:var(--core-color);"></ion-icon>
        <h2 style="font-size:20px;margin:12px 0 8px;">Hi, {$firstname}!</h2>
        <p style="color:#666;font-size:14px;margin:0 0 16px;">I'm {$displayname}, your learning assistant. How can I help?</p>
        <div style="display:flex;flex-wrap:wrap;justify-content:center;gap:8px;">
            <ion-chip (click)="sendChip('What are the key concepts in this course?')" color="primary" outline="true">
                <ion-icon name="bulb-outline"></ion-icon>
                <ion-label>Key Concepts</ion-label>
            </ion-chip>
            <ion-chip (click)="sendChip('Help me create a study plan')" color="primary" outline="true">
                <ion-icon name="calendar-outline"></ion-icon>
                <ion-label>Study Plan</ion-label>
            </ion-chip>
            <ion-chip (click)="sendChip('Quiz me on this course')" color="primary" outline="true">
                <ion-icon name="flash-outline"></ion-icon>
                <ion-label>Quiz Me</ion-label>
            </ion-chip>
        </div>
    </div>

    <!-- Message list -->
    <div *ngIf="messages && messages.length > 0" style="padding:8px 0;">
        <div *ngFor="let msg of messages" style="display:flex;margin-bottom:8px;"
             [style.justify-content]="msg.role === 'user' ? 'flex-end' : 'flex-start'">
            <div style="max-width:80%;padding:10px 14px;border-radius:16px;font-size:15px;line-height:1.4;"
                 [style.background]="msg.role === 'user' ? 'var(--core-color, #023e8a)' : 'var(--gray-100, #f0f0f0)'"
                 [style.color]="msg.role === 'user' ? '#fff' : 'var(--text-color, #333)'"
                 [style.border-bottom-right-radius]="msg.role === 'user' ? '4px' : '16px'"
                 [style.border-bottom-left-radius]="msg.role === 'assistant' ? '4px' : '16px'">
                <core-format-text [text]="msg.message" [filter]="false"></core-format-text>
                <span *ngIf="msg.time" style="display:block;font-size:11px;opacity:0.6;margin-top:4px;">{{ msg.time }}</span>
            </div>
        </div>

        <!-- Typing indicator -->
        <div *ngIf="sending" style="display:flex;justify-content:flex-start;margin-bottom:8px;">
            <div style="padding:12px 18px;border-radius:16px;background:var(--gray-100,#f0f0f0);border-bottom-left-radius:4px;">
                <ion-spinner name="dots" style="width:24px;height:16px;"></ion-spinner>
            </div>
        </div>
    </div>

    <!-- Input area -->
    <div style="display:flex;align-items:flex-end;gap:4px;padding:8px 0;border-top:1px solid var(--gray-200,#e0e0e0);">
        <ion-textarea
            [(ngModel)]="userInput"
            placeholder="Ask a question..."
            rows="1"
            autoGrow="true"
            [disabled]="sending"
            style="flex:1;--padding-start:12px;--padding-end:12px;--padding-top:8px;--padding-bottom:8px;--background:var(--gray-100,#f0f0f0);border-radius:20px;max-height:120px;">
        </ion-textarea>
        <ion-button (click)="sendMessage()" [disabled]="sending || !userInput?.trim()" fill="clear" size="small">
            <ion-icon name="send" slot="icon-only"></ion-icon>
        </ion-button>
    </div>

    <!-- Clear history -->
    <div *ngIf="messages && messages.length > 0" style="text-align:center;padding:4px 0;">
        <ion-button (click)="clearHistory()" fill="clear" size="small" color="medium">
            <ion-icon name="trash-outline" slot="start"></ion-icon>
            Clear history
        </ion-button>
    </div>
</div>
HTML;
    }

    /**
     * Returns the JavaScript for the mobile chat interface.
     *
     * @return string
     */
    private static function get_mobile_js(): string {
        return <<<'JSEOF'
var that = this;
var courseid = parseInt(that.CONTENT_OTHERDATA.courseid, 10);

// Load conversation history on init.
that.loadHistory = function() {
    that.CoreSitesProvider.getCurrentSite().read(
        'local_ai_course_assistant_get_history',
        { courseid: courseid }
    ).then(function(result) {
        if (result && result.messages) {
            that.messages = result.messages.map(function(m) {
                return {
                    role: m.role,
                    message: m.message,
                    time: m.timecreated ? new Date(m.timecreated * 1000).toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'}) : ''
                };
            });
        }
    }).catch(function() {
        that.messages = [];
    });
};

// Send a message.
that.sendMessage = function() {
    var text = (that.userInput || '').trim();
    if (!text || that.sending) return;

    that.sending = true;
    that.messages = that.messages || [];
    that.messages.push({
        role: 'user',
        message: text,
        time: new Date().toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'})
    });

    var messageText = text;
    that.userInput = '';

    that.CoreSitesProvider.getCurrentSite().write(
        'local_ai_course_assistant_send_message',
        { courseid: courseid, message: messageText }
    ).then(function(result) {
        if (result && result.response) {
            var clean = result.response.replace(/\n*\[SOLA_NEXT\][\s\S]*?\[\/SOLA_NEXT\]/, '').trim();
            that.messages.push({
                role: 'assistant',
                message: clean,
                time: new Date().toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'})
            });
        }
        that.sending = false;
    }).catch(function() {
        that.messages.push({
            role: 'assistant',
            message: 'Sorry, something went wrong. Please try again.',
            time: new Date().toLocaleTimeString([], {hour: '2-digit', minute: '2-digit'})
        });
        that.sending = false;
    });
};

// Quick action chips.
that.sendChip = function(text) {
    that.userInput = text;
    that.sendMessage();
};

// Clear conversation.
that.clearHistory = function() {
    that.CoreSitesProvider.getCurrentSite().write(
        'local_ai_course_assistant_clear_history',
        { courseid: courseid }
    ).then(function() {
        that.messages = [];
    }).catch(function() {});
};

// Initialize.
that.messages = [];
that.userInput = '';
that.sending = false;
that.loadHistory();
JSEOF;
    }
}
