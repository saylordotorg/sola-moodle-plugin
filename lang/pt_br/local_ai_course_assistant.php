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
 * Language strings for local_ai_course_assistant — Brazilian Portuguese (Português do Brasil).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Assistente de Curso com IA';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Armazena as conversas do chat do tutor de IA por usuário e curso.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'O ID do usuário proprietário da conversa.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'O ID do curso ao qual a conversa pertence.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'O título da conversa.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'O momento em que a conversa foi criada.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'O momento em que a conversa foi modificada pela última vez.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Armazena as mensagens individuais das conversas do chat do tutor de IA.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'O ID do usuário que enviou a mensagem.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'O ID do curso ao qual a mensagem pertence.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'O papel do remetente da mensagem (usuário ou assistente).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'O conteúdo da mensagem.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'O número de tokens utilizados pela mensagem.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'O momento em que a mensagem foi criada.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Usar o chat do tutor de IA';
$string['ai_course_assistant:viewanalytics'] = 'Ver análises do chat do tutor de IA';
$string['ai_course_assistant:manage'] = 'Gerenciar configurações do chat do tutor de IA (função de Administrador)';

// Settings.
$string['settings:enabled'] = 'Ativar Assistente de Curso com IA';
$string['settings:enabled_desc'] = 'Ativar ou desativar o widget do Assistente de Curso com IA nas páginas do curso.';
$string['settings:provider'] = 'Provedor de IA';
$string['settings:provider_desc'] = 'Selecione o provedor de IA para completações de chat.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Local)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Personalizado (compatível com OpenAI)';
$string['settings:apikey'] = 'Chave de API';
$string['settings:apikey_desc'] = 'Chave de API para o provedor selecionado. Não é necessária para o Ollama.';
$string['settings:model'] = 'Nome do Modelo';
$string['settings:model_desc'] = 'O modelo a ser utilizado. O padrão depende do provedor (ex.: claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'URL Base da API';
$string['settings:apibaseurl_desc'] = 'URL base para a API. Preenchida automaticamente por provedor, mas pode ser substituída. Deixe em branco para usar o padrão do provedor.';
$string['settings:systemprompt'] = 'Modelo de Prompt do Sistema';
$string['settings:systemprompt_desc'] = 'Prompt do sistema enviado à IA. Use os marcadores: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Você é um tutor de IA útil para o curso "{{coursename}}". O papel do estudante é {{userrole}}.

Tópicos abordados no curso:
{{coursetopics}}

Ajude o estudante a compreender o material do curso. Seja encorajador, claro e pedagogicamente consistente.';
$string['settings:temperature'] = 'Temperatura';
$string['settings:temperature_desc'] = 'Controla a aleatoriedade. Valores menores são mais focados; valores maiores são mais criativos. Intervalo: 0,0 a 2,0.';
$string['settings:maxhistory'] = 'Histórico Máximo de Conversa';
$string['settings:maxhistory_desc'] = 'Número máximo de pares de mensagens a incluir nas requisições de API. Mensagens mais antigas são removidas.';
$string['settings:avatar'] = 'Avatar do Chat';
$string['settings:avatar_desc'] = 'Selecione o ícone de avatar para o botão do widget de chat.';
$string['settings:avatar_saylor'] = 'Logo da {$a} (Padrão)';
$string['settings:position'] = 'Posição do Widget';
$string['settings:position_desc'] = 'Posição do widget de chat na página.';
$string['settings:position_br'] = 'Inferior direito';
$string['settings:position_bl'] = 'Inferior esquerdo';
$string['settings:position_tr'] = 'Superior direito';
$string['settings:position_tl'] = 'Superior esquerdo';
$string['chat:settings'] = 'Configurações do plugin';
$string['analytics:viewdashboard'] = 'Ver painel de análises';

// Course settings.
$string['coursesettings:title'] = 'Configurações de IA do Curso';
$string['coursesettings:enabled'] = 'Ativar substituições do curso';
$string['coursesettings:enabled_desc'] = 'Quando ativado, as configurações abaixo substituem a configuração global do provedor de IA somente para este curso. Deixe os campos em branco para herdar o valor global.';
$string['coursesettings:using_global'] = 'Usando configuração global';
$string['coursesettings:saved'] = 'Configurações de IA do curso salvas.';
$string['coursesettings:global_settings_link'] = 'Configurações globais de IA';

// Language detection and preference.
$string['lang:switch'] = 'Sim, trocar';
$string['lang:dismiss'] = 'Não, obrigado';
$string['lang:change'] = 'Alterar idioma';
$string['lang:english'] = 'Inglês';

// Chat widget.
$string['chat:title'] = 'Tutor de IA';
$string['chat:placeholder'] = 'Faça uma pergunta...';
$string['chat:send'] = 'Enviar';
$string['chat:close'] = 'Fechar chat';
$string['chat:open'] = 'Abrir chat do tutor de IA';
$string['chat:clear'] = 'Limpar histórico';
$string['chat:clear_confirm'] = 'Tem certeza de que deseja limpar o histórico do chat deste curso?';
$string['chat:copy'] = 'Copiar conversa';
$string['chat:copied'] = 'Conversa copiada para a área de transferência';
$string['chat:copy_failed'] = 'Falha ao copiar a conversa';
$string['chat:thinking'] = 'Pensando...';
$string['chat:error'] = 'Desculpe, algo deu errado. Por favor, tente novamente.';
$string['chat:error_auth'] = 'Erro de autenticação. Entre em contato com seu administrador.';
$string['chat:error_ratelimit'] = 'Muitas requisições. Por favor, aguarde um momento e tente novamente.';
$string['chat:error_unavailable'] = 'O serviço de IA está temporariamente indisponível. Tente novamente mais tarde.';
$string['chat:error_notconfigured'] = 'O tutor de IA ainda não foi configurado. Entre em contato com seu administrador.';
$string['chat:expand'] = 'Expandir chat';
$string['chat:collapse'] = 'Recolher chat';
$string['chat:mic'] = 'Falar sua pergunta';
$string['chat:mic_error'] = 'Erro no microfone. Verifique as permissões do seu navegador.';
$string['chat:mic_unsupported'] = 'A entrada de voz não é suportada neste navegador.';
$string['chat:newline_hint'] = 'Shift+Enter para nova linha';
$string['chat:you'] = 'Você';
$string['chat:assistant'] = 'Tutor de IA';
$string['chat:history_loaded'] = 'Conversa anterior carregada.';
$string['chat:history_cleared'] = 'Histórico do chat limpo.';
$string['chat:offtopic_warning'] = 'Parece que sua pergunta não está relacionada a este curso. Por favor, tente manter o foco no assunto para que eu possa ajudá-lo melhor!';
$string['chat:offtopic_ended'] = 'Seu acesso ao tutor de IA foi temporariamente suspenso por {$a} minutos porque a conversa saiu do assunto muitas vezes. Use esse tempo para revisar o material do curso e tente novamente mais tarde.';
$string['chat:offtopic_locked'] = 'Seu acesso ao tutor de IA está temporariamente suspenso. Você pode tentar novamente em {$a} minutos. Por favor, foque em perguntas relacionadas ao curso quando voltar.';
$string['chat:escalated_to_support'] = 'Não consegui responder sua pergunta completamente, então criei um ticket de suporte para você. Um membro da equipe de suporte dará retorno. Seu número de ticket é: {$a}';
$string['chat:studyplan_intro'] = 'Posso ajudá-lo a criar um plano de estudos para este curso! Basta me dizer quantas horas por semana você pode dedicar aos estudos e eu ajudarei a montar um plano estruturado.';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'Perguntas Frequentes e Suporte';
$string['settings:faq_heading_desc'] = 'Configure as perguntas frequentes centralizadas e a integração com tickets de suporte do Zendesk.';
$string['settings:faq_content'] = 'Conteúdo das Perguntas Frequentes';
$string['settings:faq_content_desc'] = 'Insira as entradas de perguntas frequentes (uma por linha no formato: P: pergunta | R: resposta). Elas serão fornecidas à IA para responder perguntas comuns de suporte.';
$string['settings:zendesk_enabled'] = 'Ativar Escalação para o Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Quando a IA não conseguir resolver uma questão de suporte, criar automaticamente um ticket no Zendesk com um resumo da conversa.';
$string['settings:zendesk_subdomain'] = 'Subdomínio do Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Seu subdomínio do Zendesk (ex.: "minhaempresa" para minhaempresa.zendesk.com).';
$string['settings:zendesk_email'] = 'E-mail da API do Zendesk';
$string['settings:zendesk_email_desc'] = 'Endereço de e-mail do usuário do Zendesk para autenticação da API (com o sufixo /token).';
$string['settings:zendesk_token'] = 'Token da API do Zendesk';
$string['settings:zendesk_token_desc'] = 'Token de API para autenticação no Zendesk.';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Detecção de Assunto Fora do Tema';
$string['settings:offtopic_heading_desc'] = 'Configure como o chat lida com conversas fora do tema.';
$string['settings:offtopic_enabled'] = 'Ativar Detecção de Assunto Fora do Tema';
$string['settings:offtopic_enabled_desc'] = 'Instrua a IA a detectar e redirecionar conversas fora do tema.';
$string['settings:offtopic_max'] = 'Máximo de Mensagens Fora do Tema';
$string['settings:offtopic_max_desc'] = 'Número de mensagens consecutivas fora do tema antes de tomar uma ação.';
$string['settings:offtopic_action'] = 'Ação para Assunto Fora do Tema';
$string['settings:offtopic_action_desc'] = 'O que fazer quando o limite de mensagens fora do tema for atingido.';
$string['settings:offtopic_action_warn'] = 'Avisar e redirecionar';
$string['settings:offtopic_action_end'] = 'Bloquear acesso temporariamente';
$string['settings:offtopic_lockout_duration'] = 'Duração do Bloqueio (minutos)';
$string['settings:offtopic_lockout_duration_desc'] = 'Por quanto tempo (em minutos) o estudante perde acesso ao tutor de IA após exceder o limite de mensagens fora do tema. Padrão: 30 minutos.';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Planejamento de Estudos e Lembretes';
$string['settings:studyplan_heading_desc'] = 'Configure os recursos de planejamento de estudos e notificações de lembrete.';
$string['settings:studyplan_enabled'] = 'Ativar Planejamento de Estudos';
$string['settings:studyplan_enabled_desc'] = 'Permitir que o tutor de IA ajude os estudantes a criar planos de estudo personalizados com base no tempo disponível.';
$string['settings:reminders_email_enabled'] = 'Ativar Lembretes por E-mail';
$string['settings:reminders_email_enabled_desc'] = 'Permitir que os estudantes optem por receber lembretes de estudo por e-mail.';
$string['settings:reminders_whatsapp_enabled'] = 'Ativar Lembretes por WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Permitir que os estudantes optem por receber lembretes de estudo por WhatsApp (requer configuração da API do WhatsApp).';
$string['settings:whatsapp_api_url'] = 'URL da API do WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'O endpoint da API para envio de mensagens pelo WhatsApp (ex.: Twilio, MessageBird). Deve aceitar POST com corpo JSON contendo os campos "to", "from" e "body".';
$string['settings:whatsapp_api_token'] = 'Token da API do WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Token de autenticação para a API do WhatsApp.';
$string['settings:whatsapp_from_number'] = 'Número Remetente do WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'O número de telefone para enviar mensagens pelo WhatsApp (com código do país, ex.: +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Países Bloqueados para WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Códigos de país ISO 3166-1 alpha-2 separados por vírgula onde os lembretes por WhatsApp não são permitidos por regulamentações locais (ex.: "CN,IR,KP").';

// Reminder messages.
$string['reminder:email_subject'] = 'Lembrete de Estudo: {$a}';
$string['reminder:email_body'] = 'Olá, {$a->firstname},

Este é o seu lembrete de estudo para "{$a->coursename}".

{$a->message}

Seu plano de estudos sugere {$a->hours_per_week} horas por semana para este curso.

Continue assim, ótimo trabalho!

---
Para parar de receber esses lembretes, clique aqui: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Lembrete de Estudo para {$a->coursename}: {$a->message} (Cancelar inscrição: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Foco de estudo de hoje: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'Cancelar Inscrição dos Lembretes de Estudo';
$string['unsubscribe:success'] = 'Você foi cancelado com sucesso dos lembretes de estudo deste curso.';
$string['unsubscribe:already'] = 'Você já foi descadastrado desses lembretes.';
$string['unsubscribe:invalid'] = 'Link de descadastramento inválido ou expirado.';
$string['unsubscribe:resubscribe'] = 'Mudou de ideia? Você pode reativar os lembretes pelo chat do tutor de IA.';

// Scheduled task.
$string['task:send_reminders'] = 'Enviar lembretes de estudo do tutor de IA';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Armazena os planos de estudo dos estudantes.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'O ID do usuário proprietário do plano de estudo.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'O curso ao qual o plano de estudo pertence.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Horas por semana que o estudante planeja estudar.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Os detalhes do plano de estudo em formato JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Armazena as preferências e inscrições de lembretes de estudo.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'O ID do usuário inscrito nos lembretes.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'O canal de lembrete (e-mail ou whatsapp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'O endereço de e-mail ou número de telefone para os lembretes.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'O código de país do usuário para conformidade regulatória.';

// Analytics dashboard.
$string['analytics:title'] = 'Análises do Tutor de IA';
$string['analytics:overview'] = 'Visão Geral';
$string['analytics:total_conversations'] = 'Total de conversas';
$string['analytics:total_messages'] = 'Total de mensagens';
$string['analytics:active_students'] = 'Estudantes ativos';
$string['analytics:avg_messages_per_student'] = 'Média de mensagens por estudante';
$string['analytics:offtopic_rate'] = 'Taxa de mensagens fora do tema';
$string['analytics:escalation_count'] = 'Escalados para suporte';
$string['analytics:studyplan_adoption'] = 'Estudantes com planos de estudo';
$string['analytics:usage_trends'] = 'Tendências de Uso';
$string['analytics:daily_messages'] = 'Volume diário de mensagens';
$string['analytics:hotspots'] = 'Pontos de Maior Atenção no Curso';
$string['analytics:hotspots_desc'] = 'Seções do curso mais frequentemente referenciadas nas perguntas dos estudantes. Contagens mais altas podem indicar áreas onde os estudantes precisam de mais suporte.';
$string['analytics:section'] = 'Seção';
$string['analytics:mention_count'] = 'Menções';
$string['analytics:common_prompts'] = 'Padrões de Perguntas Frequentes';
$string['analytics:common_prompts_desc'] = 'Padrões de perguntas recorrentes dos estudantes. Revise-os para identificar lacunas sistêmicas no conteúdo do curso.';
$string['analytics:prompt_pattern'] = 'Padrão';
$string['analytics:frequency'] = 'Frequência';
$string['analytics:recent_activity'] = 'Atividade Recente';
$string['analytics:no_data'] = 'Nenhum dado de análise disponível ainda. Os dados aparecerão assim que os estudantes começarem a usar o tutor de IA.';
$string['analytics:timerange'] = 'Período';
$string['analytics:last_7_days'] = 'Últimos 7 dias';
$string['analytics:last_30_days'] = 'Últimos 30 dias';
$string['analytics:all_time'] = 'Todo o período';
$string['analytics:export'] = 'Exportar dados';
$string['analytics:provider_comparison'] = 'Comparação de Provedores de IA';
$string['analytics:provider_comparison_desc'] = 'Compare o desempenho dos provedores de IA utilizados neste curso.';
$string['analytics:provider'] = 'Provedor';
$string['analytics:response_count'] = 'Respostas';
$string['analytics:avg_response_length'] = 'Comprimento médio das respostas';
$string['analytics:total_tokens'] = 'Total de tokens';
$string['analytics:avg_tokens'] = 'Média de tokens / resposta';

// User settings.
$string['usersettings:title'] = 'Assistente de Curso com IA - Seus Dados';
$string['usersettings:intro'] = 'Gerencie os dados do chat do tutor de IA e suas configurações de privacidade';
$string['usersettings:privacy_info'] = 'Suas conversas com o tutor de IA são armazenadas para oferecer suporte contínuo ao longo do seu curso. Você tem controle total sobre esses dados e pode excluí-los a qualquer momento.';
$string['usersettings:usage_stats'] = 'Suas Estatísticas de Uso';
$string['usersettings:total_messages'] = 'Total de mensagens';
$string['usersettings:total_conversations'] = 'Conversas';
$string['usersettings:messages'] = 'Mensagens';
$string['usersettings:last_activity'] = 'Última atividade';
$string['usersettings:delete_course_data'] = 'Excluir dados do curso';
$string['usersettings:no_data'] = 'Você ainda não usou o tutor de IA. Seus dados de uso aparecerão aqui assim que você começar a conversar.';
$string['usersettings:delete_all_title'] = 'Excluir Todos os Seus Dados';
$string['usersettings:delete_all_warning'] = 'Isso excluirá permanentemente todas as suas conversas com o tutor de IA em todos os cursos. Esta ação não pode ser desfeita.';
$string['usersettings:delete_all_button'] = 'Excluir Todos os Meus Dados';
$string['usersettings:confirm_delete_course'] = 'Tem certeza de que deseja excluir permanentemente todos os seus dados do tutor de IA para o curso "{$a}"? Esta ação não pode ser desfeita.';
$string['usersettings:confirm_delete_all'] = 'Tem certeza de que deseja excluir permanentemente TODOS os seus dados do tutor de IA em todos os cursos? Esta ação não pode ser desfeita.';
$string['usersettings:data_deleted'] = 'Seus dados foram excluídos.';

// === SOLA v1.0.12 — updated/new strings ===

$string['chat:greeting'] = 'Olá, {$a}! Sou SOLA, seu Assistente de Aprendizagem Online da {INSTITUTION}.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Abrir SOLA';
$string['chat:change_avatar'] = 'Alterar avatar';

$string['chat:quiz'] = 'Fazer um quiz de prática';
$string['chat:quiz_setup_title'] = 'Quiz de Prática';
$string['chat:quiz_questions'] = 'Número de questões';
$string['chat:quiz_topic'] = 'Tópico';
$string['chat:quiz_topic_guided'] = 'Guiado por IA (com base no seu progresso)';
$string['chat:quiz_topic_default'] = 'Conteúdo atual do curso';
$string['chat:quiz_topic_custom'] = 'Tópico personalizado…';
$string['chat:quiz_custom_placeholder'] = 'Digite um tópico ou questão...';
$string['chat:quiz_start'] = 'Iniciar Quiz';
$string['chat:quiz_cancel'] = 'Cancelar';
$string['chat:quiz_loading'] = 'Gerando quiz…';
$string['chat:quiz_error'] = 'Não foi possível gerar o quiz. Tente novamente.';
$string['chat:quiz_correct'] = 'Correto!';
$string['chat:quiz_wrong'] = 'Incorreto.';
$string['chat:quiz_next'] = 'Próxima questão';
$string['chat:quiz_finish'] = 'Ver resultados';
$string['chat:quiz_score'] = 'Quiz concluído! Você acertou {$a->score} de {$a->total}.';
$string['chat:quiz_summary'] = 'Acabei de concluir um quiz de prática com {$a->total} questões sobre "{$a->topic}" e obtive {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Objetivos de Aprendizagem';
$string['chat:quiz_topic_modules'] = 'Tópico do Curso';
$string['chat:quiz_subtopic_select'] = 'Selecione um item específico…';
$string['chat:quiz_topic_sections'] = 'Seções do Curso';
$string['chat:quiz_score_great'] = 'Excelente trabalho! Você realmente domina este conteúdo.';
$string['chat:quiz_score_good'] = 'Bom esforço! Continue revisando para fortalecer sua compreensão.';
$string['chat:quiz_score_practice'] = 'Continue praticando — revise o material relacionado do curso e refaça o quiz.';
$string['chat:quiz_review_heading'] = 'Revisão';
$string['chat:quiz_retake'] = 'Refazer Quiz';
$string['chat:quiz_exit'] = 'Sair do Quiz';
$string['chat:quiz_your_answer'] = 'Sua resposta';
$string['chat:quiz_correct_answer'] = 'Resposta correta';

$string['chat:starters_label'] = 'Iniciadores de conversa';
$string['chat:starter_quiz'] = 'Teste-me Sobre Isto';
$string['chat:starter_explain'] = 'Explique Isso';
$string['chat:starter_key_concepts'] = 'Conceitos-Chave';
$string['chat:starter_study_plan'] = 'Plano de Estudos';
$string['chat:starter_help_me'] = 'Ajuda com IA';
$string['chat:starter_ai_project_coach'] = 'Coach de Projeto IA';
$string['chat:starter_ell_practice'] = 'Prática de Conversação';
$string['chat:starter_ell_pronunciation'] = 'Pronúncia ELL';
$string['chat:starter_ai_coach'] = 'Coach de IA';
$string['chat:starter_speak'] = 'Falar um iniciador';

$string['chat:reset'] = 'Recomeçar';

$string['chat:topic_picker_title'] = 'No que você gostaria de se concentrar?';
$string['chat:topic_picker_title_help'] = 'Com o que você precisa de ajuda?';
$string['chat:topic_picker_title_explain'] = 'O que você gostaria que eu explicasse?';
$string['chat:topic_picker_title_study'] = 'Em qual área você gostaria de se concentrar?';
$string['chat:topic_start'] = 'Continuar';

$string['chat:fullscreen'] = 'Tela cheia';
$string['chat:exitfullscreen'] = 'Sair da tela cheia';

$string['chat:language'] = 'Alterar idioma';
$string['chat:settings_panel'] = 'Configurações';
$string['chat:settings_language'] = 'Idioma';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Voz';
$string['chat:settings_voice_admin'] = 'As configurações de voz são gerenciadas no painel de administração do site.';

$string['chat:voice_mode'] = 'Modo de voz';
$string['chat:voice_end'] = 'Encerrar sessão de voz';
$string['chat:voice_connecting'] = 'Conectando...';
$string['chat:voice_listening'] = 'Ouvindo...';
$string['chat:voice_speaking'] = 'SOLA está falando...';
$string['chat:voice_idle'] = 'Pronto';
$string['chat:voice_error'] = 'Falha na conexão de voz. Verifique suas configurações.';
$string['chat:quiz_locked'] = 'SOLA está pausado durante os quizzes para apoiar a integridade acadêmica. Boa sorte!';
$string['task:send_inactivity_reminders'] = 'Enviar e-mails semanais de lembrete de inatividade';
$string['messageprovider:study_notes'] = 'Notas da sessão de estudo';
$string['task:send_inactivity_reminders'] = 'Enviar e-mails de lembrete semanal de inatividade';
$string['messageprovider:study_notes'] = 'Notas da sessão de estudo';
