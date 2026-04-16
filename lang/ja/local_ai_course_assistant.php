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

// AI-generated translation. Professional review recommended.

/**
 * Language strings for local_ai_course_assistant — Japanese.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'AIコースアシスタント';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'AIチューターの会話をユーザーおよびコースごとに保存します。';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = '会話を所有するユーザーのID。';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = '会話が属するコースのID。';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = '会話のタイトル。';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = '会話が作成された日時。';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = '会話が最後に変更された日時。';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'AIチューターの会話における個々のメッセージを保存します。';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'メッセージを送信したユーザーのID。';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'メッセージが属するコースのID。';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'メッセージ送信者の役割（ユーザーまたはアシスタント）。';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'メッセージの内容。';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'メッセージに使用されたトークン数。';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'メッセージが作成された日時。';
$string['ai_course_assistant:use'] = 'AIチューターチャットを使用する';
$string['ai_course_assistant:viewanalytics'] = 'AIチューターチャットの分析を表示する';
$string['ai_course_assistant:manage'] = 'AIチューターチャットの設定を管理する（管理者ロール）';
$string['settings:enabled'] = 'AIコースアシスタントを有効にする';
$string['settings:enabled_desc'] = 'コースページでAIコースアシスタントウィジェットを有効または無効にします。';
$string['settings:default_course_mode'] = '新しいコースのデフォルト';
$string['settings:default_course_mode_desc'] = 'コース単位の選択がない場合に、コースでSOLAが表示されるかどうかを制御します。新規インストールでは、管理者がAnalyticsページまたはCourse AI Settingsページからコースごとにオプトインできるように、デフォルトで「デフォルトで無効」に設定されます。';
$string['settings:default_course_mode_per_course'] = 'デフォルトで無効（コースごとに有効化）';
$string['settings:default_course_mode_all'] = 'すべてのコースで有効';
$string['settings:provider'] = 'AIプロバイダー';
$string['settings:provider_desc'] = 'チャット補完に使用するAIプロバイダーを選択します。「Moodle AI (core_ai subsystem)」を選択すると、Moodleに組み込まれたAI設定（Site admin > AI）経由でリクエストがルーティングされます。そのモードでは、下のAPIキー、モデル、およびベースURLフィールドは無視されます。Streaming、ツール使用、およびprompt cachingはcore_ai経由では利用できません — レスポンスは単一チャンクとして配信されます。最高の学生体験のためには、直接プロバイダーを使用してください。';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama（ローカル）';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'カスタム（OpenAI互換）';
$string['settings:apikey'] = 'APIキー';
$string['settings:apikey_desc'] = '選択したプロバイダーのAPIキー。Ollamaの場合は不要です。';
$string['settings:model'] = 'モデル名';
$string['settings:model_desc'] = '使用するモデル。デフォルトはプロバイダーによって異なります（例：claude-sonnet-4-5-20250929、gpt-4o、llama3、MiniMax-Text-01）。';
$string['settings:apibaseurl'] = 'APIベースURL';
$string['settings:apibaseurl_desc'] = 'APIベースURL。プロバイダーに基づいて自動入力されますが、上書き可能です。プロバイダーのデフォルトを使用するには空白のままにしてください。';
$string['settings:systemprompt'] = 'システムプロンプトテンプレート';
$string['settings:systemprompt_desc'] = 'AIに送信されるシステムプロンプト。プレースホルダー {{coursename}}、{{userrole}}、{{coursetopics}} を使用してください。';
$string['settings:systemprompt_default'] = 'あなたは「{{coursename}}」コースの役立つAIチューターです。学生の役割は{{userrole}}です。

コースで取り上げるトピック：
{{coursetopics}}

学生がコースの内容を理解できるよう支援してください。励みになり、明確で、教育的に厳密であってください。';
$string['settings:temperature'] = '温度';
$string['settings:temperature_desc'] = 'ランダム性を制御します。低い値はより集中し、高い値はより創造的です。範囲：0.0〜2.0。';
$string['settings:maxhistory'] = '会話履歴の最大数';
$string['settings:maxhistory_desc'] = 'APIリクエストに含めるメッセージペアの最大数。古いメッセージは削除されます。';
$string['settings:avatar'] = 'チャットアバター';
$string['settings:avatar_desc'] = 'チャットウィジェットボタンのアバターアイコンを選択してください。';
$string['settings:avatar_saylor'] = '{$a}ロゴ（デフォルト）';
$string['settings:position'] = 'ウィジェットの位置';
$string['settings:position_desc'] = 'ページ上のチャットウィジェットの位置。';
$string['settings:position_br'] = '右下';
$string['settings:position_bl'] = '左下';
$string['settings:position_tr'] = '右上';
$string['settings:position_tl'] = '左上';
$string['chat:settings'] = 'プラグイン設定';
$string['analytics:viewdashboard'] = '分析ダッシュボードを表示';
$string['coursesettings:title'] = 'コースAI設定';
$string['coursesettings:enabled'] = 'コースの上書きを有効にする';
$string['coursesettings:enabled_desc'] = '有効にすると、以下の設定がこのコースのみのグローバルAIプロバイダー設定を上書きします。グローバル値を継承するにはフィールドを空白のままにしてください。';
$string['coursesettings:sola_enabled'] = 'このコースでのSOLA';
$string['coursesettings:sola_enabled_toggle'] = 'このコースでSOLAウィジェットを表示';
$string['coursesettings:sola_enabled_desc'] = 'このコースでSOLAチャットウィジェットが表示されるかどうかを制御します。サイト全体のデフォルトは、プラグイン設定のGeneral > Default for new coursesで設定されます。';
$string['coursesettings:using_global'] = 'グローバル設定を使用中';
$string['coursesettings:saved'] = 'コースAI設定が保存されました。';
$string['coursesettings:global_settings_link'] = 'グローバルAI設定';
$string['lang:switch'] = 'はい、切り替えます';
$string['lang:dismiss'] = 'いいえ、結構です';
$string['lang:change'] = '言語を変更';
$string['lang:english'] = '英語';
$string['chat:title'] = 'AIチューター';
$string['chat:placeholder'] = '質問を入力してください...';
$string['chat:send'] = '送信';
$string['chat:close'] = 'チャットを閉じる';
$string['chat:open'] = 'AIチューターチャットを開く';
$string['chat:clear'] = '履歴を消去';
$string['chat:clear_confirm'] = 'このコースのチャット履歴を消去してもよろしいですか？';
$string['chat:copy'] = '会話をコピー';
$string['chat:copied'] = '会話がクリップボードにコピーされました';
$string['chat:copy_failed'] = '会話のコピーに失敗しました';
$string['chat:thinking'] = '考え中...';
$string['chat:error'] = '申し訳ありません。エラーが発生しました。もう一度お試しください。';
$string['chat:error_auth'] = '認証エラーです。管理者にお問い合わせください。';
$string['chat:error_ratelimit'] = 'リクエストが多すぎます。しばらく待ってからもう一度お試しください。';
$string['chat:error_unavailable'] = 'AIサービスは一時的に利用できません。後でもう一度お試しください。';
$string['chat:error_notconfigured'] = 'AIチューターはまだ設定されていません。管理者にお問い合わせください。';
$string['chat:mic'] = '音声で質問する';
$string['chat:mic_error'] = 'マイクエラー。ブラウザの権限を確認してください。';
$string['chat:mic_unsupported'] = 'このブラウザでは音声入力がサポートされていません。';
$string['chat:newline_hint'] = 'Shift+Enterで改行';
$string['chat:you'] = 'あなた';
$string['chat:assistant'] = 'AIチューター';
$string['chat:history_loaded'] = '以前の会話が読み込まれました。';
$string['chat:history_cleared'] = 'チャット履歴が消去されました。';
$string['chat:offtopic_warning'] = '質問がこのコースに関連していないようです。最善のサポートができるよう、トピックに沿って質問してください！';
$string['chat:offtopic_ended'] = '会話がトピックから外れすぎたため、AIチューターへのアクセスが{$a}分間一時停止されました。この時間を利用してコース教材を確認してください。後でもう一度お試しいただけます。';
$string['chat:offtopic_locked'] = 'AIチューターへのアクセスが一時的に停止されています。{$a}分後にもう一度お試しいただけます。再開時はコースに関連する質問に集中してください。';
$string['chat:escalated_to_support'] = 'ご質問に完全にお答えできなかったため、サポートチケットを作成しました。サポートチームのメンバーがご連絡いたします。チケット番号は {$a} です。';
$string['chat:studyplan_intro'] = 'このコースの学習計画を作成するお手伝いができます！週に何時間勉強できるか教えてください。体系的な計画を作成するお手伝いをします。';
$string['settings:faq_heading'] = 'FAQとサポート';
$string['settings:faq_heading_desc'] = '一元化されたFAQとZendeskサポートチケット連携を設定します。';
$string['settings:faq_content'] = 'FAQコンテンツ';
$string['settings:faq_content_desc'] = 'FAQ項目を入力してください（1行につき1項目、形式：Q: 質問 | A: 回答）。一般的なサポートの質問に回答するためにAIに提供されます。';
$string['settings:zendesk_enabled'] = 'Zendeskエスカレーションを有効にする';
$string['settings:zendesk_enabled_desc'] = 'AIがサポートの質問を解決できない場合、会話の要約を含むZendeskチケットを自動作成します。';
$string['settings:zendesk_subdomain'] = 'Zendeskサブドメイン';
$string['settings:zendesk_subdomain_desc'] = 'Zendeskサブドメイン（例：mycompany.zendesk.comの場合「mycompany」）。';
$string['settings:zendesk_email'] = 'Zendesk APIメールアドレス';
$string['settings:zendesk_email_desc'] = 'API認証用のZendeskユーザーメールアドレス（/tokenサフィックス付き）。';
$string['settings:zendesk_token'] = 'Zendesk APIトークン';
$string['settings:zendesk_token_desc'] = 'Zendesk認証用のAPIトークン。';
$string['settings:offtopic_heading'] = 'トピック外検出';
$string['settings:offtopic_heading_desc'] = 'チャットがトピック外の会話をどのように処理するかを設定します。';
$string['settings:offtopic_enabled'] = 'トピック外検出を有効にする';
$string['settings:offtopic_enabled_desc'] = 'AIにトピック外の会話を検出してリダイレクトさせます。';
$string['settings:offtopic_max'] = 'トピック外メッセージの最大数';
$string['settings:offtopic_max_desc'] = 'アクションを実行する前のトピック外メッセージの連続数。';
$string['settings:offtopic_action'] = 'トピック外アクション';
$string['settings:offtopic_action_desc'] = 'トピック外の制限に達した場合の対処方法。';
$string['settings:offtopic_action_warn'] = '警告してリダイレクト';
$string['settings:offtopic_action_end'] = '一時的にアクセスをロック';
$string['settings:offtopic_lockout_duration'] = 'ロックアウト期間（分）';
$string['settings:offtopic_lockout_duration_desc'] = 'トピック外の制限を超えた後、学生がAIチューターへのアクセスを失う時間（分）。デフォルト：30分。';
$string['settings:studyplan_heading'] = '学習計画とリマインダー';
$string['settings:studyplan_heading_desc'] = '学習計画機能とリマインダー通知を設定します。';
$string['settings:studyplan_enabled'] = '学習計画を有効にする';
$string['settings:studyplan_enabled_desc'] = 'AIチューターが利用可能な時間に基づいて学生がパーソナライズされた学習計画を作成するのを支援できるようにします。';
$string['settings:reminders_email_enabled'] = 'メールリマインダーを有効にする';
$string['settings:reminders_email_enabled_desc'] = '学生がメールによる学習リマインダーを受け取れるようにします。';
$string['settings:reminders_whatsapp_enabled'] = 'WhatsAppリマインダーを有効にする';
$string['settings:reminders_whatsapp_enabled_desc'] = '学生がWhatsAppで学習リマインダーを受け取れるようにします（WhatsApp APIの設定が必要）。';
$string['settings:whatsapp_api_url'] = 'WhatsApp API URL';
$string['settings:whatsapp_api_url_desc'] = 'WhatsAppメッセージを送信するためのAPIエンドポイント（例：Twilio、MessageBird）。「to」「from」「body」フィールドを含むJSONボディのPOSTを受け付ける必要があります。';
$string['settings:whatsapp_api_token'] = 'WhatsApp APIトークン';
$string['settings:whatsapp_api_token_desc'] = 'WhatsApp APIの認証トークン。';
$string['settings:whatsapp_from_number'] = 'WhatsApp発信番号';
$string['settings:whatsapp_from_number_desc'] = 'WhatsAppメッセージの送信元電話番号（国番号付き、例：+14155238886）。';
$string['settings:whatsapp_blocked_countries'] = 'WhatsAppブロック国';
$string['settings:whatsapp_blocked_countries_desc'] = '現地の規制によりWhatsAppリマインダーが許可されていない国のISO 3166-1 alpha-2国コードをカンマ区切りで入力（例：「CN,IR,KP」）。';
$string['reminder:email_subject'] = '学習リマインダー：{$a}';
$string['reminder:email_body'] = '{$a->firstname}さん、こんにちは。

「{$a->coursename}」の学習リマインダーです。

{$a->message}

学習計画では、このコースに週{$a->hours_per_week}時間が推奨されています。

この調子で頑張ってください！

---
これらのリマインダーを停止するにはこちらをクリック：{$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = '{$a->coursename}の学習リマインダー：{$a->message}（配信停止：{$a->unsubscribe_url}）';
$string['reminder:study_tip_prefix'] = '今日の学習目標：';
$string['unsubscribe:title'] = '学習リマインダーの配信停止';
$string['unsubscribe:success'] = 'このコースの学習リマインダーの配信を停止しました。';
$string['unsubscribe:already'] = 'これらのリマインダーの配信はすでに停止されています。';
$string['unsubscribe:invalid'] = '無効または期限切れの配信停止リンクです。';
$string['unsubscribe:resubscribe'] = '気が変わりましたか？AIチューターチャットでリマインダーを再度有効にできます。';
$string['task:send_reminders'] = 'AIチューター学習リマインダーを送信する';
$string['privacy:metadata:local_ai_course_assistant_plans'] = '学生の学習計画を保存します。';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = '学習計画を所有するユーザーのID。';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = '学習計画が属するコース。';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = '学生が計画している週あたりの学習時間。';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'JSON形式の学習計画の詳細。';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = '学習リマインダーの設定とサブスクリプションを保存します。';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'リマインダーを購読しているユーザーのID。';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'リマインダーチャネル（メールまたはWhatsApp）。';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'リマインダーのメールアドレスまたは電話番号。';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = '規制遵守のためのユーザーの国コード。';
$string['analytics:title'] = 'AIチューター分析';
$string['analytics:overview'] = '概要';
$string['analytics:total_conversations'] = '会話の合計';
$string['analytics:total_messages'] = 'メッセージの合計';
$string['analytics:active_students'] = 'アクティブな学生';
$string['analytics:avg_messages_per_student'] = '学生あたりの平均メッセージ数';
$string['analytics:offtopic_rate'] = 'トピック外率';
$string['analytics:escalation_count'] = 'サポートにエスカレーション';
$string['analytics:studyplan_adoption'] = '学習計画を持つ学生';
$string['analytics:usage_trends'] = '利用動向';
$string['analytics:daily_messages'] = '日次メッセージ量';
$string['analytics:hotspots'] = 'コースのホットスポット';
$string['analytics:hotspots_desc'] = '学生の質問で最も頻繁に参照されるコースセクション。数値が高い場合、学生がより多くのサポートを必要とする分野を示している可能性があります。';
$string['analytics:section'] = 'セクション';
$string['analytics:mention_count'] = '言及数';
$string['analytics:common_prompts'] = '一般的な質問パターン';
$string['analytics:common_prompts_desc'] = '学生からの繰り返し見られる質問パターン。コースコンテンツの体系的なギャップを特定するために確認してください。';
$string['analytics:prompt_pattern'] = 'パターン';
$string['analytics:frequency'] = '頻度';
$string['analytics:recent_activity'] = '最近のアクティビティ';
$string['analytics:no_data'] = '分析データはまだありません。学生がAIチューターの使用を開始すると、データが表示されます。';
$string['analytics:timerange'] = '期間';
$string['analytics:last_7_days'] = '過去7日間';
$string['analytics:last_30_days'] = '過去30日間';
$string['analytics:all_time'] = '全期間';
$string['analytics:export'] = 'データをエクスポート';
$string['analytics:provider_comparison'] = 'AIプロバイダー比較';
$string['analytics:provider_comparison_desc'] = 'このコースで使用されているAIプロバイダーのパフォーマンスを比較します。';
$string['analytics:provider'] = 'プロバイダー';
$string['analytics:response_count'] = '応答数';
$string['analytics:avg_response_length'] = '平均応答長';
$string['analytics:total_tokens'] = '合計トークン';
$string['analytics:avg_tokens'] = '応答あたりの平均トークン';
$string['usersettings:title'] = 'AIコースアシスタント：あなたのデータ';
$string['usersettings:intro'] = 'AIチューターのチャットデータとプライバシー設定を管理します';
$string['usersettings:privacy_info'] = 'AIチューターとの会話は、コース全体を通じて継続的なサポートを提供するために保存されます。これらのデータを完全に管理でき、いつでも削除できます。';
$string['usersettings:usage_stats'] = 'あなたの利用統計';
$string['usersettings:total_messages'] = 'メッセージ合計';
$string['usersettings:total_conversations'] = '会話';
$string['usersettings:messages'] = 'メッセージ';
$string['usersettings:last_activity'] = '最終アクティビティ';
$string['usersettings:delete_course_data'] = 'コースデータを削除';
$string['usersettings:no_data'] = 'まだAIチューターを使用していません。チャットを開始すると、利用データがここに表示されます。';
$string['usersettings:delete_all_title'] = 'すべてのデータを削除';
$string['usersettings:delete_all_warning'] = 'この操作により、すべてのコースのAIチューターとの会話がすべて永久に削除されます。この操作は元に戻せません。';
$string['usersettings:delete_all_button'] = 'すべてのデータを削除';
$string['usersettings:confirm_delete_course'] = 'コース「{$a}」のAIチューターデータをすべて永久に削除してもよろしいですか？この操作は元に戻せません。';
$string['usersettings:confirm_delete_all'] = 'すべてのコースのAIチューターデータをすべて永久に削除してもよろしいですか？この操作は元に戻せません。';
$string['usersettings:data_deleted'] = 'データが削除されました。';

// === SOLA v1.0.12 — updated/new strings ===

// Updated strings (override earlier values):
$string['chat:greeting'] = 'こんにちは、{$a}さん！SOLAです。今日はどのようにお手伝いしましょうか？';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'SOLAを開く';
$string['chat:change_avatar'] = 'アバターを変更';

// Quiz UI.
$string['chat:quiz'] = '練習クイズを受ける';
$string['chat:quiz_setup_title'] = '練習クイズ';
$string['chat:quiz_questions'] = '問題数';
$string['chat:quiz_topic'] = 'トピック';
$string['chat:quiz_topic_guided'] = 'AIガイド（あなたの進捗に基づく）';
$string['chat:quiz_topic_default'] = '現在のコース内容';
$string['chat:quiz_topic_custom'] = 'カスタムトピック…';
$string['chat:quiz_custom_placeholder'] = 'トピックまたは質問を入力...';
$string['chat:quiz_start'] = 'クイズを開始';
$string['chat:quiz_cancel'] = 'キャンセル';
$string['chat:quiz_loading'] = 'クイズを生成中…';
$string['chat:quiz_error'] = 'クイズを生成できませんでした。もう一度お試しください。';
$string['chat:quiz_correct'] = '正解！';
$string['chat:quiz_wrong'] = '不正解。';
$string['chat:quiz_next'] = '次の問題';
$string['chat:quiz_finish'] = '結果を見る';
$string['chat:quiz_score'] = 'クイズ完了！{$a->total}問中{$a->score}問正解でした。';
$string['chat:quiz_summary'] = '「{$a->topic}」に関する{$a->total}問の練習クイズを終了し、{$a->score}/{$a->total}の成績でした。';
$string['chat:quiz_topic_objectives'] = '学習目標';
$string['chat:quiz_topic_modules'] = 'コーストピック';
$string['chat:quiz_subtopic_select'] = '特定の項目を選択…';
$string['chat:quiz_topic_sections'] = 'コースセクション';
$string['chat:quiz_score_great'] = '素晴らしい成績です！この教材をよく理解しています。';
$string['chat:quiz_score_good'] = 'よくできました！理解を深めるために復習を続けてください。';
$string['chat:quiz_score_practice'] = '練習を続けましょう。関連するコース内容を確認してから、もう一度クイズに挑戦してみてください。';
$string['chat:quiz_review_heading'] = '復習';
$string['chat:quiz_retake'] = 'クイズを再受験';
$string['chat:quiz_exit'] = 'クイズを終了';
$string['chat:quiz_your_answer'] = 'あなたの回答';
$string['chat:quiz_correct_answer'] = '正解';

// Conversation starters.
$string['chat:starters_label'] = '会話のきっかけ';
$string['chat:starter_quiz'] = 'これについてテスト';
$string['chat:starter_explain'] = 'これを説明して';
$string['chat:starter_key_concepts'] = '重要な概念';
$string['chat:starter_study_plan'] = '学習計画';
$string['chat:starter_help_me'] = 'AIヘルプ';
$string['chat:starter_ai_project_coach'] = 'AIプロジェクトコーチ';
$string['chat:starter_ell_practice'] = '会話練習';
$string['chat:starter_ell_pronunciation'] = 'ELL発音';
$string['chat:starter_ai_coach'] = 'AIコーチ';
$string['chat:starter_speak'] = 'スターターを話す';

// Reset / home.
$string['chat:reset'] = 'やり直す';

// Topic picker.
$string['chat:topic_picker_title'] = '何に集中したいですか？';
$string['chat:topic_picker_title_help'] = '何についてお手伝いが必要ですか？';
$string['chat:topic_picker_title_explain'] = '何を説明してほしいですか？';
$string['chat:topic_picker_title_study'] = 'どの分野に集中したいですか？';
$string['chat:topic_start'] = '続ける';

// Expand states.
$string['chat:fullscreen'] = '全画面';
$string['chat:exitfullscreen'] = '全画面を終了';

// Settings panel.
$string['chat:language'] = '言語を変更';
$string['chat:settings_panel'] = '設定';
$string['chat:settings_language'] = '言語';
$string['chat:settings_avatar'] = 'アバター';
$string['chat:settings_voice'] = '音声';
$string['chat:settings_voice_admin'] = '音声設定はサイト管理パネルで管理されています。';

// Voice mode.
$string['chat:voice_mode'] = '音声モード';
$string['chat:voice_end'] = '音声セッションを終了';
$string['chat:voice_connecting'] = '接続中...';
$string['chat:voice_listening'] = '聞いています...';
$string['chat:voice_speaking'] = 'SOLAが話しています...';
$string['chat:voice_idle'] = '準備完了';
$string['chat:voice_error'] = '音声接続に失敗しました。設定を確認してください。';
$string['chat:quiz_locked'] = '学術的誠実性を維持するため、クイズ中はSOLAを一時停止しています。頑張ってください！';

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'メモ';

// History panel.
$string['chat:history_title'] = 'メモと会話履歴';
$string['task:send_inactivity_reminders'] = '週次の非アクティビティリマインダーメールを送信する';
$string['messageprovider:study_notes'] = '学習セッションノート';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / フロントエンド配信';
$string['settings:cdn_heading_desc'] = 'Moodleファイルシステムの代わりに外部CDNからSOLAフロントエンドアセット（JS/CSS）を配信します。これにより、プラグインのアップグレードなしでフロントエンドの更新が可能になります。ローカルプラグインファイルを使用するにはCDN URLを空のままにしてください。';
$string['settings:cdn_url'] = 'CDNベースURL';
$string['settings:cdn_url_desc'] = 'sola.min.jsとsola.min.cssがホストされているベースURL。例：https://your-org.github.io/sola-cdn。ローカルプラグインファイルを使用するには空のままにしてください。';
$string['settings:cdn_version'] = 'CDNアセットバージョン';
$string['settings:cdn_version_desc'] = 'cache bustingのためにCDN URLに付加されるバージョン文字列。CDNデプロイごとに更新してください（例：3.2.4またはcommit hash）。';

// Analytics dashboard.
$string['analytics:tab_overall'] = '全体の利用状況';
$string['analytics:tab_bycourse'] = 'コース別';
$string['analytics:tab_comparison'] = 'AI利用者 vs 非利用者';
$string['analytics:tab_byunit'] = 'ユニット別';
$string['analytics:tab_usagetypes'] = '利用タイプ';
$string['analytics:tab_themes'] = 'テーマ';
$string['analytics:tab_feedback'] = 'AIフィードバック';
$string['analytics:total_students'] = '学生総数';
$string['analytics:active_users'] = 'アクティブAIユーザー';
$string['analytics:msgs_per_student'] = '学生あたりのメッセージ数';
$string['analytics:avg_session'] = '平均セッション時間';
$string['analytics:return_rate'] = 'リピート率';
$string['analytics:total_sessions'] = 'セッション総数';
$string['analytics:thumbs_up'] = '高評価';
$string['analytics:thumbs_down'] = '低評価';
$string['analytics:hallucination_flags'] = '不正確な情報の報告';
$string['analytics:msgs_to_resolution'] = '解決までのメッセージ数';
$string['analytics:helpful'] = '役に立った';
$string['analytics:not_helpful'] = '役に立たなかった';
$string['analytics:flag_hallucination'] = 'この回答には不正確な情報が含まれています';
$string['analytics:submit_rating'] = '送信';
$string['analytics:thanks_feedback'] = 'フィードバックありがとうございます';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_groq'] = 'Groq';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'このページを説明';
$string['chat:starter_ask_anything'] = '何でも質問';
$string['chat:starter_review_practice'] = '復習と練習';
$string['chat:history_saved_subtitle'] = '保存された応答は、このコースの間この端末に残ります。';
$string['chat:history_saved_empty'] = 'ここに表示するにはAIの応答を保存してください。';
$string['chat:history_views_label'] = '履歴表示';
$string['chat:history_view_saved'] = '保存済み';
$string['chat:history_view_recent'] = '履歴';
$string['chat:debug_refresh'] = '更新';
$string['chat:debug_copy_all'] = 'すべてコピー';
$string['chat:debug_close'] = '閉じる';
$string['chat:language_switch'] = '言語を切り替え';
$string['chat:language_dismiss'] = '言語提案を閉じる';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'LLMプロバイダーを選択';
$string['chat:llm_model_label'] = 'モデル';
$string['chat:llm_model_select'] = 'LLMモデルを選択';
$string['chat:footer_usertesting'] = 'ユーザビリティテスト';
$string['chat:footer_feedback'] = 'フィードバック';
$string['chat:voice_panel_title'] = '{$a}と話す(実験的)';
