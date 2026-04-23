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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:auto_open'] = '初回訪問時に自動で開く';
$string['settings:auto_open_desc'] = '有効にすると、学生が各コースに初めてアクセスしたときにSOLAドロワーが自動的に開きます。同じコース内のその後のページ読み込みではドロワーは再度開きません — 状態は学生のブラウザのlocalStorageでコースごとに追跡されます。デスクトップとモバイルに適用されます。Course AI Settingsページからコースごとに上書きできます。';
$string['settings:comparison_providers'] = '比較プロバイダー (LLM ピッカー)';
$string['settings:comparison_providers_desc'] = 'ウィジェット内の LLM ピッカーに追加の AI プロバイダーを追加して、管理者がプロバイダー間で応答を比較できるようにします。下の表を使用して行を追加してください。温度列はオプションです（空白のままにするとグローバル温度が使用されます）。保存形式: provider_id|api_key|model1,model2|temperature。上で設定したプライマリプロバイダーは常に自動的に含まれます。管理権限を持つ管理者のみがピッカーを表示できます。学生には表示されません。有効な provider IDs: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'デフォルトAIプロバイダー';
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
$string['chat:clear'] = '画面をクリア';
$string['chat:clear_confirm'] = '表示中のメッセージをクリアしますか？チャット履歴全体は保存されたままで、ウィジェットを再度開くと再読み込みできます。';
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
$string['task:run_meta_ai_query'] = 'スケジュールされた ラーニング レーダー 分析クエリを実行';
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

// Additional translated strings.
$string['chat:debug_context'] = 'コンテキストデバッグ';
$string['chat:debug_context_browser'] = 'ブラウザスナップショット';
$string['chat:debug_context_copy'] = 'コピー';
$string['chat:debug_context_prompt'] = 'サーバーレスポンス';
$string['chat:debug_context_request'] = '最後のSSEリクエスト';
$string['chat:debug_context_toggle'] = 'インスペクター切替';
$string['chat:history_empty'] = 'まだ会話はありません。';
$string['chat:history_refresh'] = '更新';
$string['chat:history_subtitle'] = 'このコースでの最近のメッセージ。';
$string['chat:starter_explain_prompt'] = '最も重要な概念を説明してください';
$string['chat:starter_help_lesson'] = 'これを説明して';
$string['chat:starter_help_lesson_prompt'] = 'レッスンを理解する手助けをしてください。主要概念をまとめてください。';
$string['chat:starter_prompt_coach'] = 'AIプロンプトコーチ';
$string['chat:starter_quick_study'] = 'クイック学習';
$string['chat:starter_study_plan_prompt'] = '学習計画を立てたいです。聞いてください：(1) 目標、(2) 時間。既存計画を更新して。';
$string['chat:voice_copy'] = '学習アシスタントと音声会話。';
$string['chat:voice_ready'] = '準備完了';
$string['chat:voice_start'] = '開始';
$string['chat:voice_title'] = 'SOLAと話す';
$string['coursesettings:ell_pronunciation'] = 'Pronunciation Practice Mode';
$string['coursesettings:ell_pronunciation_desc'] = 'Show the "Pronunciation Practice" chip for students in this course. Uses OpenAI Realtime API for phoneme-level pronunciation feedback. Requires Voice Mode to be enabled in global plugin settings.';
$string['coursesettings:ell_pronunciation_enable'] = 'Enable Pronunciation Practice chip for this course';
$string['coursesettings:rag'] = 'Semantic Search (RAG)';
$string['coursesettings:rag_desc'] = 'Enable retrieval-augmented generation for this course. When enabled, SOLA embeds and searches course content to ground its answers. Requires RAG to be enabled globally in plugin settings.';
$string['coursesettings:rag_enable'] = 'Enable RAG for this course';
$string['coursesettings:speaking_practice'] = 'Speaking Practice';
$string['coursesettings:speaking_practice_desc'] = 'Show the "Practice Speaking" chip for students in this course. Uses OpenAI TTS for voice responses. Requires an OpenAI API key in global plugin settings.';
$string['coursesettings:speaking_practice_enable'] = 'Enable Speaking Practice chip for this course';
$string['coursesettings:token_usage'] = 'Token Usage & Cost';
$string['coursesettings:token_usage_desc'] = 'View token usage, cost estimates, and per-student breakdowns for this course.';
$string['error'] = '{$a}';
$string['error_no_tts_key'] = 'No OpenAI API key configured for TTS.';
$string['error_rate_limit_ip'] = 'Too many requests from your IP address. Please wait a moment.';
$string['error_rate_limit_user'] = 'Too many requests. Please wait a moment.';
$string['error_reminders_email_disabled'] = 'Email reminders are not enabled.';
$string['error_reminders_whatsapp_country_blocked'] = 'WhatsApp reminders are not available in your country.';
$string['error_reminders_whatsapp_disabled'] = 'WhatsApp reminders are not enabled.';
$string['insights:desc'] = 'Analyze feedback, survey, and usability testing data to surface issues, feature requests, and recommendations.';
$string['insights:error'] = 'Could not generate insights.';
$string['insights:generate'] = 'Generate AI Insights';
$string['insights:generating'] = 'Analyzing data… this may take a moment.';
$string['insights:no_data'] = 'No feedback, survey, or usability testing data available to analyze yet. Insights will be available once users submit feedback or complete surveys.';
$string['insights:title'] = 'AI Insights';
$string['integrity:desc'] = 'Automated daily health checks that verify PHP syntax, JS builds, lang files, database tables, and more. Email alerts are sent only when issues are found.';
$string['integrity:email'] = 'Report Email Address(es)';
$string['integrity:email_desc'] = 'Email address(es) for failure reports. Separate multiple addresses with commas. Leave blank to notify the primary site admin.';
$string['integrity:enabled'] = 'Enable Daily Integrity Checks';
$string['integrity:enabled_desc'] = 'Run automated plugin health checks daily at 3 AM server time.';
$string['integrity:run_now'] = 'Run Checks Now';
$string['integrity:title'] = 'Integrity Checks';
$string['integrity:view_results'] = 'View Integrity Results';
$string['messageprovider:integrity_report'] = 'SOLA integrity check failure report';
$string['mobile_chip_concepts'] = '主要概念';
$string['mobile_chip_quiz'] = 'クイズ';
$string['mobile_chip_studyplan'] = '学習計画';
$string['mobile_clear'] = '履歴を消去';
$string['mobile_disabled'] = 'SOLAはこのコースでは利用できません。';
$string['mobile_placeholder'] = '質問してください...';
$string['mobile_welcome'] = 'こんにちは、{$a}さん！';
$string['mobile_welcome_sub'] = 'SOLAです。学習アシスタントです。今日はどのようにお手伝いしましょうか？';
$string['privacy:metadata:local_ai_course_assistant_audit'] = 'Stores audit log entries for compliance tracking.';
$string['privacy:metadata:local_ai_course_assistant_audit:action'] = 'The action that was performed.';
$string['privacy:metadata:local_ai_course_assistant_audit:courseid'] = 'The course context of the action.';
$string['privacy:metadata:local_ai_course_assistant_audit:details'] = 'Additional details about the action.';
$string['privacy:metadata:local_ai_course_assistant_audit:ipaddress'] = 'The IP address of the user.';
$string['privacy:metadata:local_ai_course_assistant_audit:timecreated'] = 'The time the action was logged.';
$string['privacy:metadata:local_ai_course_assistant_audit:useragent'] = 'The browser user agent string.';
$string['privacy:metadata:local_ai_course_assistant_audit:userid'] = 'The ID of the user whose action was logged.';
$string['privacy:metadata:local_ai_course_assistant_feedback'] = 'Stores user feedback and ratings.';
$string['privacy:metadata:local_ai_course_assistant_feedback:browser'] = 'The browser used when submitting feedback.';
$string['privacy:metadata:local_ai_course_assistant_feedback:comment'] = 'The feedback comment text.';
$string['privacy:metadata:local_ai_course_assistant_feedback:courseid'] = 'The course the feedback relates to.';
$string['privacy:metadata:local_ai_course_assistant_feedback:device'] = 'The device type used when submitting feedback.';
$string['privacy:metadata:local_ai_course_assistant_feedback:os'] = 'The operating system used when submitting feedback.';
$string['privacy:metadata:local_ai_course_assistant_feedback:page_url'] = 'The page URL where feedback was submitted.';
$string['privacy:metadata:local_ai_course_assistant_feedback:rating'] = 'The numeric rating given.';
$string['privacy:metadata:local_ai_course_assistant_feedback:screen_size'] = 'The screen size when submitting feedback.';
$string['privacy:metadata:local_ai_course_assistant_feedback:timecreated'] = 'The time the feedback was submitted.';
$string['privacy:metadata:local_ai_course_assistant_feedback:user_agent'] = 'The browser user agent string.';
$string['privacy:metadata:local_ai_course_assistant_feedback:userid'] = 'The ID of the user who submitted feedback.';
$string['privacy:metadata:local_ai_course_assistant_msgs:completion_tokens'] = 'The number of completion tokens generated.';
$string['privacy:metadata:local_ai_course_assistant_msgs:model_name'] = 'The AI model used for the response.';
$string['privacy:metadata:local_ai_course_assistant_msgs:prompt_tokens'] = 'The number of prompt tokens used.';
$string['privacy:metadata:local_ai_course_assistant_msgs:provider'] = 'The AI provider used for the response.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores'] = 'Stores practice session scores and AI feedback.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:ai_feedback'] = 'AI-generated feedback on the practice session.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:courseid'] = 'The course the practice session belongs to.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:overall_score'] = 'The overall score achieved.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:scores'] = 'Per-criterion scores in JSON format.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:session_type'] = 'The type of practice session (conversation or pronunciation).';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:timecreated'] = 'The time the score was recorded.';
$string['privacy:metadata:local_ai_course_assistant_practice_scores:userid'] = 'The ID of the user who completed the practice.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp'] = 'Stores survey responses from students.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp:answer'] = 'The answer text or selection.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp:courseid'] = 'The course the survey relates to.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp:question_index'] = 'The index of the question answered.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp:timecreated'] = 'The time the response was submitted.';
$string['privacy:metadata:local_ai_course_assistant_survey_resp:userid'] = 'The ID of the user who responded.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp'] = 'Stores usability testing responses.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:answer'] = 'The free-text response for the task.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:courseid'] = 'The course the usability test relates to.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:rating'] = 'The numeric rating given for the task.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:task_index'] = 'The index of the task completed.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:timecreated'] = 'The time the response was submitted.';
$string['privacy:metadata:local_ai_course_assistant_ut_resp:userid'] = 'The ID of the user who completed the test.';
$string['ragadmin:back_to_settings'] = 'Back to plugin settings';
$string['ragadmin:col_actions'] = 'Actions';
$string['ragadmin:col_chunks'] = 'Chunks';
$string['ragadmin:col_course'] = 'Course';
$string['ragadmin:col_embedded'] = 'Embedded';
$string['ragadmin:col_lastindexed'] = 'Last indexed';
$string['ragadmin:deleteindex'] = 'Clear index';
$string['ragadmin:deleteindex_confirm'] = 'Delete all indexed chunks for this course? The AI tutor will fall back to full content stuffing until the course is re-indexed.';
$string['ragadmin:deleteindex_done'] = 'Course index cleared.';
$string['ragadmin:index_status'] = 'Per-course index status';
$string['ragadmin:never'] = 'Never';
$string['ragadmin:no_courses'] = 'No indexed courses and no active courses found.';
$string['ragadmin:rag_disabled_notice'] = 'RAG is currently disabled. Enable it in the plugin settings to activate semantic search. You can still pre-index courses below so the index is ready when you enable RAG.';
$string['ragadmin:reindex'] = 'Reindex';
$string['ragadmin:reindexall'] = 'Reindex all active courses';
$string['ragadmin:reindexall_confirm'] = 'This will call the embedding API for all new/changed content across all active courses. Continue?';
$string['ragadmin:reindexall_desc'] = 'Runs incremental indexing on all courses with active enrolments. Only new or changed content is re-embedded.';
$string['ragadmin:reindexall_done'] = 'Reindexing complete: {$a->courses} course(s) processed — {$a->indexed} chunks indexed, {$a->skipped} skipped, {$a->errors} error(s).';
$string['ragadmin:reindexcourse_done'] = 'Course reindexed: {$a->indexed} chunks indexed, {$a->skipped} skipped, {$a->errors} error(s).';
$string['ragadmin:stat_active_courses'] = 'Active courses';
$string['ragadmin:stat_courses_indexed'] = 'Courses indexed';
$string['ragadmin:stat_embedded_chunks'] = 'Embedded chunks';
$string['ragadmin:stat_total_chunks'] = 'Total chunks';
$string['ragadmin:title'] = 'RAG Index Status & Reindex';
$string['ragadmin:view_status'] = 'View RAG index status / reindex';
$string['redash_api_key'] = 'Redash API Key';
$string['redash_api_key_desc'] = 'API key for external analytics platforms like Redash. Provides read-only access to usage data, feedback, and cost analytics. Leave blank to disable the export endpoint.';
$string['redash_heading'] = 'Analytics Export';
$string['redash_heading_desc'] = 'Configure API key access for external analytics platforms like Redash. The export endpoint provides read-only JSON access to usage data, feedback, and cost analytics.';
$string['remoteconfigurl'] = 'Remote config URL';
$string['remoteconfigurl_desc'] = 'URL to a JSON file containing remotely-managed SOLA configuration (system prompt, instruction blocks, model default). Must be HTTPS. Leave blank to use the default GitHub URL. Local admin settings always take priority over remote config values.';
$string['rubric:done'] = '完了';
$string['rubric:encourage_high'] = '素晴らしい！その調子で！';
$string['rubric:encourage_low'] = '良いスタートです！定期的な練習が上達につながります。';
$string['rubric:encourage_mid'] = '良い取り組みです！練習を続けましょう。';
$string['rubric:overall'] = '総合';
$string['rubric:practice_again'] = 'もう一度練習';
$string['rubric:score_title_conversation'] = '会話練習スコア';
$string['rubric:score_title_pronunciation'] = '発音練習スコア';
$string['rubric:scoring'] = '評価中...';
$string['settings:avatar_color'] = 'Avatar Border Color';
$string['settings:avatar_color_desc'] = 'Border color of the floating avatar button. Use a hex value, e.g. #023e8a.';
$string['settings:avatar_fill'] = 'Avatar Background Color';
$string['settings:avatar_fill_desc'] = 'Fill color inside the floating avatar button (shown behind transparent avatar areas). Use a hex value, e.g. #ffffff.';
$string['settings:display_mode'] = 'Display Mode';
$string['settings:display_mode_desc'] = 'How SOLA appears on the page. "Widget" shows a floating avatar button with a popup chat panel. "Side drawer" shows a full-height panel that slides in from the right edge of the screen.';
$string['settings:display_mode_drawer'] = 'Side drawer (right edge)';
$string['settings:display_mode_widget'] = 'Widget (floating button)';
$string['settings:embed_apibaseurl'] = 'Embedding API Base URL';
$string['settings:embed_apibaseurl_desc'] = 'Base URL for the embedding API. Leave blank for OpenAI default. For Ollama: http://localhost:11434/api';
$string['settings:embed_apikey'] = 'Embedding API Key';
$string['settings:embed_apikey_desc'] = 'API key for the embedding provider. Can be different from the chat API key. Not required for Ollama.';
$string['settings:embed_dimensions'] = 'Embedding Dimensions';
$string['settings:embed_dimensions_desc'] = 'Number of dimensions in the embedding vector. Must match your model output. OpenAI text-embedding-3-small: 1536. nomic-embed-text: 768.';
$string['settings:embed_model'] = 'Embedding Model';
$string['settings:embed_model_desc'] = 'Model to use for generating embeddings. OpenAI default: text-embedding-3-small. Ollama example: nomic-embed-text.';
$string['settings:embed_provider'] = 'Embedding Provider';
$string['settings:embed_provider_desc'] = 'The API provider used to generate text embeddings for RAG indexing and retrieval.';
$string['settings:embed_provider_ollama'] = 'Ollama (local, e.g. nomic-embed-text)';
$string['settings:embed_provider_openai'] = 'OpenAI (text-embedding-3-small)';
$string['settings:hide_on_quiz_for_staff'] = 'Hide SOLA on quiz pages for staff';
$string['settings:hide_on_quiz_for_staff_desc'] = 'Completely hide the SOLA widget on all quiz pages for teachers and administrators.';
$string['settings:hide_on_quiz_for_students'] = 'Hide SOLA on quiz pages for students';
$string['settings:hide_on_quiz_for_students_desc'] = 'Completely hide the SOLA widget on all quiz pages (view, attempt, review) for students.';
$string['settings:institution_name'] = 'Institution Name';
$string['settings:institution_name_desc'] = 'The name of the institution displayed in the system prompt, avatar labels, and demo content. Change this when rebranding.';
$string['settings:model_desc_dynamic'] = 'Leave blank to use the provider\'s default model automatically. Each provider has a built-in default that stays current (e.g. gpt-4o for OpenAI, claude-sonnet-4 for Claude, mistral-large-latest for Mistral). Only enter a model name if you want to override the default. If a model is misspelled or deprecated, SOLA will automatically fall back to the provider\'s default.';
$string['settings:provider_gemini'] = 'Google Gemini';
$string['settings:quiz_hide_heading'] = 'Quiz Page Visibility';
$string['settings:quiz_hide_heading_desc'] = 'Control whether the SOLA widget appears on Moodle quiz pages. This is stricter than the built-in summative quiz lock, which only disables chat during graded quizzes. These settings completely hide the widget on all quiz pages.';
$string['settings:rag_chunksize'] = 'Chunk Size (words)';
$string['settings:rag_chunksize_desc'] = 'Target number of words per content chunk when indexing course material. Smaller chunks are more precise; larger chunks provide more context.';
$string['settings:rag_enabled'] = 'Enable RAG (Semantic Search)';
$string['settings:rag_enabled_desc'] = 'When enabled, the AI tutor uses semantic search to retrieve relevant course content for each query instead of stuffing all content into the system prompt.';
$string['settings:rag_heading'] = 'RAG / Semantic Search';
$string['settings:rag_heading_desc'] = 'Retrieval-Augmented Generation: index course content as embeddings and retrieve only the most relevant chunks at query time. Reduces token usage and supports all content types. Requires an embedding API.';
$string['settings:rag_topk'] = 'Top-K Chunks';
$string['settings:rag_topk_desc'] = 'Number of most relevant chunks to retrieve per user query and inject into the system prompt.';
$string['settings:realtime_apikey'] = 'OpenAI API Key (Voice & TTS)';
$string['settings:realtime_apikey_desc'] = 'Used for Voice Mode and the TTS speak button on messages. Leave blank to fall back to the main API key when provider is set to OpenAI.';
$string['settings:realtime_enabled'] = 'Enable Voice Mode';
$string['settings:realtime_enabled_desc'] = 'Allows students to have real-time voice conversations with SOLA. Requires an OpenAI API key.';
$string['settings:realtime_heading'] = 'Voice Mode (OpenAI Realtime)';
$string['settings:realtime_voice'] = 'SOLA Voice';
$string['settings:realtime_voice_desc'] = 'Voice used for both Voice Mode and the TTS speak button (OpenAI voices: Shimmer, Alloy, Echo, Fable, Onyx, Nova).';
$string['settings:wellbeing_enabled'] = 'Enable Wellbeing Support';
$string['settings:wellbeing_enabled_desc'] = 'When enabled, SOLA will detect signs of emotional distress and provide empathetic responses with links to global crisis resources. Disable this if your institution provides its own crisis response and does not want SOLA to surface external resources.';
$string['settings:wellbeing_heading'] = 'Wellbeing & Safety';
$string['settings:wellbeing_heading_desc'] = 'When enabled, SOLA detects expressions of distress or crisis and responds with empathy and globally-applicable support resources (findahelpline.com, Crisis Text Line, Befrienders Worldwide). SOLA is NOT a counselor — it acknowledges feelings, directs students to human support, and never attempts diagnosis or therapy.';
$string['starters:add_new'] = 'Add new starter';
$string['starters:admin_desc'] = 'Configure the conversation starter chips shown to students when they open the SOLA chat. Drag to reorder, toggle to enable/disable, or add custom starters with your own AI prompts.';
$string['starters:admin_title'] = 'Conversation Starter Settings';
$string['starters:back_settings'] = 'Back to settings';
$string['starters:course_desc'] = 'Enable or disable individual starters for this course.';
$string['starters:course_section'] = 'Conversation starters';
$string['starters:reset_confirm'] = 'Reset all starters to built-in defaults? Custom starters will be deleted.';
$string['starters:reset_defaults'] = 'Reset to defaults';
$string['starters:reset_done'] = 'Starters reset to defaults.';
$string['starters:save'] = 'Save changes';
$string['starters:saved'] = 'Starter configuration saved.';
$string['task:index_course_content'] = 'Index course content for RAG semantic search';
$string['task:run_integrity_checks'] = 'Run daily SOLA plugin integrity checks';
$string['update:available'] = 'Update Available';
$string['update:back_to_settings'] = 'Back to Settings';
$string['update:changelog'] = 'Release Notes';
$string['update:check'] = 'Check for Updates';
$string['update:confirm'] = 'Install this update? A backup of the current version will be created automatically.';
$string['update:current_version'] = 'Installed Version';
$string['update:desc'] = 'Check for and install SOLA plugin updates directly from GitHub releases.';
$string['update:download_failed'] = 'Failed to download the update. Please try again or install manually.';
$string['update:github_error'] = 'Could not reach GitHub. Check your connection or add a GitHub token in settings.';
$string['update:github_token'] = 'GitHub Token (optional)';
$string['update:github_token_desc'] = 'Personal access token for accessing private GitHub repositories. Leave blank for public repos.';
$string['update:install'] = 'Install Update';
$string['update:latest_version'] = 'Latest Available';
$string['update:title'] = 'Plugin Updates';
$string['update:up_to_date'] = 'Up to Date';

// Testing Environment admin page and TOC quick links (v3.9.4+).
$string['demo:title'] = 'テスト環境';
$string['demo:heading'] = 'テスト環境';
$string['demo:intro'] = 'このページは、<strong>学生から非表示</strong>（visible=0）のテストコースを作成し、架空の学生、AI会話、評価、フィードバックを投入します。実際に登録されている学生に影響を与えずに、Analytics Dashboardをプレビューしたり、プラグインの変更を検証するのに役立ちます。';
$string['demo:step1'] = 'Step 1: テストコース';
$string['demo:step2'] = 'Step 2: 架空の学生とAIチャットを投入';
$string['demo:course_exists'] = 'テストコースが存在します: <strong>{$a->fullname}</strong> (短縮名 <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = '非表示';
$string['demo:badge_visible'] = '学生に表示';
$string['demo:no_course'] = 'テストコースが見つかりません。下をクリックして作成してください。';
$string['demo:create_btn'] = '非表示のテストコースを作成';
$string['demo:open_course'] = 'コースを開く &rarr;';
$string['demo:seed_intro'] = 'demo_student_001, demo_student_002, ... を作成し、テストコースに登録して、合成された会話、メッセージ、評価、フィードバックを挿入します。さらにデータを追加するには再度実行するか、「最初にクリア」にチェックを入れて最初からやり直してください。';
$string['demo:users_label'] = 'ユーザー';
$string['demo:weeks_label'] = '週';
$string['demo:clear_label'] = '既存の demo_* ユーザーを先にクリア';
$string['demo:seed_btn'] = '学生とチャットを投入';
$string['demo:view_analytics'] = 'このコースの Analytics を表示 &rarr;';
$string['demo:footer'] = 'ここで作成されたデータは、標準の Moodle ユーザー / 受講登録テーブルと、プラグイン独自の会話テーブルに存在します。すべての架空ユーザーのユーザー名は <code>demo_student_</code> で始まるため、フィルタリングや削除が簡単です。削除するには、「既存の demo_* ユーザーを先にクリア」をチェックした状態で seed ステップを再度実行してください。';
$string['demo:course_fullname'] = 'SOLA テストコース（非表示）';
$string['demo:notify_created'] = 'テストコースの準備完了: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'コースの作成に失敗しました: {$a}';
$string['demo:notify_seeded'] = '投入しました: {$a->users} ユーザー, {$a->conversations} 会話, {$a->messages} メッセージ, {$a->ratings} 評価, {$a->feedback} フィードバック。';
$string['demo:notify_seed_fail'] = 'データの投入に失敗しました: {$a}';
$string['toc:analytics'] = 'Analytics ダッシュボード &rarr;';
$string['toc:tokenanalytics'] = 'トークンコスト & Analytics &rarr;';
$string['toc:testing'] = 'テスト環境 &rarr;';
$string['toc:back_to_course'] = '&larr; {$a} に戻る';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'pdftotext バイナリが見つかりません。PDF 抽出を無効にしました。';
$string['rag:pdftotext_available'] = 'pdftotext を {$a} で検出しました。';
$string['rag:docx_unavailable'] = 'PHP ZipArchive 拡張が利用できません。DOCX 抽出を無効にしました。';
$string['rag:h5p_unavailable'] = 'H5P コンテンツを読み込めませんでした。スキップします。';
$string['rag:scorm_too_large'] = 'SCORM パッケージが設定されたサイズ制限 ({$a} MB) を超えています。スキップします。';
$string['rag:scorm_unzip_failed'] = 'SCORM パッケージを解凍できませんでした。スキップします。';
$string['rag:transcript_fetch_failed'] = '{$a} から文字起こしを取得できませんでした。';
$string['rag:transcript_cf_challenge'] = '文字起こし URL が Cloudflare チャレンジでブロックされました: {$a}。';
$string['rag:embed_detected'] = '埋め込みメディアを検出しました: {$a}';
$string['rag:embed_transcript_attached'] = '{$a} の文字起こしを添付しました';

// v3.9.10–v3.9.14 new strings (English verbatim; translate later).
$string['usersettings:download'] = 'Download my SOLA data';
$string['usersettings:download_help'] = 'Download a complete JSON copy of every SOLA record tied to your account: conversations, messages, ratings, study plans, reminders, practice scores, survey responses, profile, and audit entries.';
$string['usersettings:privacy_notice_link'] = 'Read the SOLA privacy notice';
$string['privacy:title'] = 'SOLA Privacy Notice';
$string['admin:user_data:title'] = 'SOLA — Learner data export and purge';
$string['admin:user_data:intro'] = 'Operational path for a GDPR Article 15 (access) or Article 17 (erasure) request. Look up a learner by Moodle user id, review the rows SOLA holds for them, and export or purge.';
$string['admin:user_data:search_label'] = 'Moodle user id';
$string['admin:user_data:lookup'] = 'Look up';
$string['admin:user_data:not_found'] = 'No user found with that id.';
$string['admin:user_data:download'] = 'Download all SOLA data as JSON';
$string['admin:user_data:purge'] = 'Purge all SOLA data for this user';
$string['admin:user_data:confirm_purge'] = 'Permanently delete every SOLA record for {$a}? This cascades through conversations, messages, ratings, study plans, reminders, profiles, practice scores, surveys, audit entries, and feedback. The action cannot be undone.';
$string['admin:user_data:purged'] = 'All SOLA data for the selected user has been purged.';
$string['chat:consent_heading'] = 'Before you chat with SOLA';
$string['chat:consent_body'] = 'SOLA is an AI powered learning assistant. Your messages and SOLA\'s replies are stored in Saylor\'s Moodle database and the most recent ten turns are sent to an approved AI model provider to answer your questions. Your first name is shared for personalization; no other identifying information is sent to the AI provider. You can download, delete, or stop using SOLA at any time.';
$string['chat:consent_accept'] = 'I understand, start SOLA';
$string['chat:consent_privacy_link'] = 'Read the full privacy notice';
$string['task:audit_cleanup'] = 'SOLA audit table cleanup';
$string['task:conversation_retention'] = 'SOLA conversation retention sweeper';
$string['settings:audit_retention_days'] = 'Audit log retention (days)';
$string['settings:audit_retention_days_desc'] = 'Daily scheduled task purges audit rows older than this. 0 disables. Default 365.';
$string['settings:conversation_retention_days'] = 'Conversation retention (days)';
$string['settings:conversation_retention_days_desc'] = 'Daily scheduled task purges conversation rows whose last modified timestamp is older than this. 0 disables. Default 730.';
$string['settings:xai_proxy_url'] = 'xAI Realtime proxy URL';
$string['settings:xai_proxy_url_desc'] = 'Public wss URL of the SOLA xAI Realtime proxy service (for example wss://voice.example.com/xai-rt/rt). When this is set together with the JWT secret, xAI voice routes through the proxy and the master xAI API key never reaches the browser. Leave empty to fall back to the direct connection (not recommended for production).';
$string['settings:xai_proxy_jwt_secret'] = 'xAI Realtime proxy JWT secret';
$string['settings:xai_proxy_jwt_secret_desc'] = 'HS256 shared secret used to sign short-lived session tokens for the xAI Realtime proxy. Must match the MOODLE_JWT_SECRET secret on the Cloudflare Worker. Rotate periodically.';
$string['admin:vendor_dpa:title'] = 'SOLA — Vendor DPA status';
$string['admin:vendor_dpa:intro'] = 'Training opt-out, DPA, and retention posture for every AI provider driver shipped in SOLA. Use this to decide which drivers to enable on your site. Tier 2 and higher routing requires a signed DPA and a contractual training opt-out.';
$string['admin:vendor_dpa:maintenance_note'] = 'This table is maintained in classes/vendor_registry.php. Update it when a vendor ToS change lands.';
