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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:default_course_mode'] = 'Padrão para novos cursos';
$string['settings:default_course_mode_desc'] = 'Controla se o SOLA aparece em um curso quando nenhuma escolha por curso foi feita. Novas instalações usam por padrão "Desativado por padrão" para que os administradores possam ativar curso por curso pela página Analytics ou pela página Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Desativado por padrão (ativar por curso)';
$string['settings:default_course_mode_all'] = 'Ativado em todos os cursos';
$string['settings:auto_open'] = 'Abrir automaticamente na primeira visita';
$string['settings:auto_open_desc'] = 'Quando habilitado, a gaveta do SOLA abre automaticamente na primeira vez que um aluno entra em cada curso. Carregamentos de página subsequentes no mesmo curso não reabrem a gaveta — o estado é rastreado por curso no navegador do aluno via localStorage. Aplica-se em desktop e celular. Pode ser substituído por curso na página Course AI Settings.';
$string['settings:comparison_providers'] = 'Provedores de comparação (seletor de LLM)';
$string['settings:comparison_providers_desc'] = 'Adicione provedores de IA extras ao seletor de LLM integrado ao widget para que administradores possam comparar respostas entre provedores. Use a tabela abaixo para adicionar linhas. A coluna de temperatura é opcional (deixe em branco para usar a temperatura global). Formato armazenado: provider_id|api_key|model1,model2|temperature. O provedor principal configurado acima é sempre incluído automaticamente. Apenas administradores com a capacidade de gerenciamento veem o seletor; estudantes nunca o veem. Provider IDs válidos: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Provedor de IA padrão';
$string['settings:provider_desc'] = 'Selecione o provedor de IA a ser usado para as conclusões de chat. Escolha "Moodle AI (core_ai subsystem)" para rotear as solicitações pela configuração de IA integrada do Moodle em Site admin > AI; os campos de chave de API, modelo e URL base abaixo são ignorados nesse modo. Streaming, uso de ferramentas e prompt caching não estão disponíveis via core_ai — as respostas são entregues como um único bloco. Use um provedor direto para a melhor experiência do estudante.';
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
$string['coursesettings:sola_enabled'] = 'SOLA neste curso';
$string['coursesettings:sola_enabled_toggle'] = 'Mostrar o widget do SOLA neste curso';
$string['coursesettings:sola_enabled_desc'] = 'Controla se o widget de chat do SOLA aparece neste curso. O padrão para todo o site é definido nas configurações do plugin em General > Default for new courses.';
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
$string['chat:clear'] = 'Limpar tela';
$string['chat:clear_confirm'] = 'Limpar as mensagens visíveis? Seu histórico completo de chat permanece salvo e pode ser recarregado ao reabrir o widget.';
$string['chat:copy'] = 'Copiar conversa';
$string['chat:copied'] = 'Conversa copiada para a área de transferência';
$string['chat:copy_failed'] = 'Falha ao copiar a conversa';
$string['chat:thinking'] = 'Pensando...';
$string['chat:error'] = 'Desculpe, algo deu errado. Por favor, tente novamente.';
$string['chat:error_auth'] = 'Erro de autenticação. Entre em contato com seu administrador.';
$string['chat:error_ratelimit'] = 'Muitas requisições. Por favor, aguarde um momento e tente novamente.';
$string['chat:error_unavailable'] = 'O serviço de IA está temporariamente indisponível. Tente novamente mais tarde.';
$string['chat:error_notconfigured'] = 'O tutor de IA ainda não foi configurado. Entre em contato com seu administrador.';
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

$string['chat:greeting'] = 'Olá, {$a}! Sou SOLA. Como posso ajudá-lo hoje?';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Notas';

// History panel.
$string['chat:history_title'] = 'Notas e histórico de conversa';
$string['task:send_inactivity_reminders'] = 'Enviar e-mails semanais de lembrete de inatividade';
$string['messageprovider:study_notes'] = 'Notas da sessão de estudo';
$string['task:send_inactivity_reminders'] = 'Enviar e-mails de lembrete semanal de inatividade';
$string['task:run_meta_ai_query'] = 'Executar consulta de análise Radar de Aprendizagem agendada';
$string['messageprovider:study_notes'] = 'Notas da sessão de estudo';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Entrega do frontend';
$string['settings:cdn_heading_desc'] = 'Sirva os recursos de frontend do SOLA (JS/CSS) a partir de um CDN externo em vez do sistema de arquivos do Moodle. Isso permite atualizações de frontend sem atualização do plugin. Deixe a URL do CDN vazia para usar os arquivos locais do plugin.';
$string['settings:cdn_url'] = 'URL base do CDN';
$string['settings:cdn_url_desc'] = 'URL base onde sola.min.js e sola.min.css estão hospedados. Exemplo: https://your-org.github.io/sola-cdn. Deixe vazio para usar os arquivos locais do plugin.';
$string['settings:cdn_version'] = 'Versão dos recursos CDN';
$string['settings:cdn_version_desc'] = 'String de versão adicionada às URLs do CDN para cache busting. Atualize após cada deploy do CDN (ex.: 3.2.4 ou um commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Uso geral';
$string['analytics:tab_bycourse'] = 'Por curso';
$string['analytics:tab_comparison'] = 'AI vs não usuários';
$string['analytics:tab_byunit'] = 'Por unidade';
$string['analytics:tab_usagetypes'] = 'Tipos de uso';
$string['analytics:tab_themes'] = 'Temas';
$string['analytics:tab_feedback'] = 'Feedback da AI';
$string['analytics:total_students'] = 'Total de alunos';
$string['analytics:active_users'] = 'Usuários ativos de AI';
$string['analytics:msgs_per_student'] = 'Mensagens por aluno';
$string['analytics:avg_session'] = 'Duração média da sessão';
$string['analytics:return_rate'] = 'Taxa de retorno';
$string['analytics:total_sessions'] = 'Total de sessões';
$string['analytics:thumbs_up'] = 'Gostei';
$string['analytics:thumbs_down'] = 'Não gostei';
$string['analytics:hallucination_flags'] = 'Marcações de imprecisão';
$string['analytics:msgs_to_resolution'] = 'Mensagens até a resolução';
$string['analytics:helpful'] = 'Útil';
$string['analytics:not_helpful'] = 'Não útil';
$string['analytics:flag_hallucination'] = 'Esta resposta contém informações imprecisas';
$string['analytics:submit_rating'] = 'Enviar';
$string['analytics:thanks_feedback'] = 'Obrigado pelo seu feedback';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Explicar esta página';
$string['chat:starter_ask_anything'] = 'Pergunte qualquer coisa';
$string['chat:starter_review_practice'] = 'Revisar e praticar';
$string['chat:history_saved_subtitle'] = 'Respostas salvas permanecem neste dispositivo para este curso.';
$string['chat:history_saved_empty'] = 'Salve uma resposta da IA para vê-la aqui.';
$string['chat:history_views_label'] = 'Visualizações do histórico';
$string['chat:history_view_saved'] = 'Salvas';
$string['chat:history_view_recent'] = 'Histórico';
$string['chat:debug_refresh'] = 'Atualizar';
$string['chat:debug_copy_all'] = 'Copiar tudo';
$string['chat:debug_close'] = 'Fechar';
$string['chat:language_switch'] = 'Trocar idioma';
$string['chat:language_dismiss'] = 'Dispensar sugestão de idioma';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Selecionar provedor de LLM';
$string['chat:llm_model_label'] = 'Modelo';
$string['chat:llm_model_select'] = 'Selecionar modelo de LLM';
$string['chat:footer_usertesting'] = 'Testes de usabilidade';
$string['chat:footer_feedback'] = 'Feedback';
$string['chat:voice_panel_title'] = 'Conversar com {$a} (Experimental)';

// Additional translated strings.
$string['chat:debug_context'] = 'Depuração de contexto';
$string['chat:debug_context_browser'] = 'Snapshot do navegador';
$string['chat:debug_context_copy'] = 'Copiar';
$string['chat:debug_context_prompt'] = 'Resposta do servidor';
$string['chat:debug_context_request'] = 'Última solicitação SSE';
$string['chat:debug_context_toggle'] = 'Alternar inspetor';
$string['chat:history_empty'] = 'Nenhuma conversa.';
$string['chat:history_refresh'] = 'Atualizar';
$string['chat:history_subtitle'] = 'Suas mensagens recentes.';
$string['chat:starter_explain_prompt'] = 'Explique o conceito mais importante?';
$string['chat:starter_help_lesson'] = 'Explique isso';
$string['chat:starter_help_lesson_prompt'] = 'Me ajude a entender a lição. Resuma os conceitos-chave.';
$string['chat:starter_prompt_coach'] = 'Coach de IA';
$string['chat:starter_quick_study'] = 'Estudo rápido';
$string['chat:starter_study_plan_prompt'] = 'Quero planejar estudo. Pergunte: (1) objetivo, (2) tempo. Atualize o plano.';
$string['chat:voice_copy'] = 'Conversa por voz com seu assistente.';
$string['chat:voice_ready'] = 'Pronto';
$string['chat:voice_start'] = 'Iniciar';
$string['chat:voice_title'] = 'Fale com SOLA';
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
$string['mobile_chip_concepts'] = 'Conceitos-chave';
$string['mobile_chip_quiz'] = 'Quiz';
$string['mobile_chip_studyplan'] = 'Plano de estudo';
$string['mobile_clear'] = 'Limpar histórico';
$string['mobile_disabled'] = 'SOLA não está disponível para este curso.';
$string['mobile_placeholder'] = 'Faça uma pergunta...';
$string['mobile_welcome'] = 'Olá, {$a}!';
$string['mobile_welcome_sub'] = 'Sou SOLA, seu assistente de aprendizagem. Como posso ajudar?';
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
$string['rubric:done'] = 'Concluído';
$string['rubric:encourage_high'] = 'Excelente! Continue assim!';
$string['rubric:encourage_low'] = 'Bom começo! A prática regular ajudará.';
$string['rubric:encourage_mid'] = 'Bom esforço! Continue praticando.';
$string['rubric:overall'] = 'Geral';
$string['rubric:practice_again'] = 'Praticar novamente';
$string['rubric:score_title_conversation'] = 'Pontuação de conversação';
$string['rubric:score_title_pronunciation'] = 'Pontuação de pronúncia';
$string['rubric:scoring'] = 'Avaliando...';
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
$string['demo:title'] = 'Ambiente de teste';
$string['demo:heading'] = 'Ambiente de teste';
$string['demo:intro'] = 'Esta página cria um curso de teste que está <strong>oculto dos estudantes</strong> (visible=0) e o preenche com estudantes falsos, conversas de IA, avaliações e comentários. Útil para visualizar o Analytics Dashboard ou validar alterações do plugin sem afetar nenhum estudante realmente matriculado.';
$string['demo:step1'] = 'Passo 1: curso de teste';
$string['demo:step2'] = 'Passo 2: adicionar estudantes falsos e conversas de IA';
$string['demo:course_exists'] = 'Curso de teste existe: <strong>{$a->fullname}</strong> (nome curto <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'oculto';
$string['demo:badge_visible'] = 'visível para estudantes';
$string['demo:no_course'] = 'Nenhum curso de teste encontrado. Clique abaixo para criar um.';
$string['demo:create_btn'] = 'Criar curso de teste oculto';
$string['demo:open_course'] = 'Abrir curso &rarr;';
$string['demo:seed_intro'] = 'Cria demo_student_001, demo_student_002, ..., matricula-os no curso de teste e insere conversas, mensagens, avaliações e comentários sintéticos. Execute novamente para adicionar mais dados, ou marque «limpar primeiro» para começar do zero.';
$string['demo:users_label'] = 'Usuários';
$string['demo:weeks_label'] = 'Semanas';
$string['demo:clear_label'] = 'Limpar primeiro os usuários demo_* existentes';
$string['demo:seed_btn'] = 'Adicionar estudantes e conversas';
$string['demo:view_analytics'] = 'Ver análises deste curso &rarr;';
$string['demo:footer'] = 'Os dados criados aqui residem nas tabelas padrão de usuários / matrículas do Moodle e nas tabelas de conversa próprias do plugin. Todos os usuários falsos têm nomes de usuário começando com <code>demo_student_</code> para facilitar a filtragem ou remoção. Para removê-los, execute novamente o passo de inserção com «Limpar primeiro os usuários demo_* existentes» marcado.';
$string['demo:course_fullname'] = 'Curso de teste SOLA (oculto)';
$string['demo:notify_created'] = 'Curso de teste pronto: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'Falha ao criar curso: {$a}';
$string['demo:notify_seeded'] = 'Inseridos: {$a->users} usuários, {$a->conversations} conversas, {$a->messages} mensagens, {$a->ratings} avaliações, {$a->feedback} entradas de feedback.';
$string['demo:notify_seed_fail'] = 'Falha ao inserir dados: {$a}';
$string['toc:analytics'] = 'Painel de Análise &rarr;';
$string['toc:tokenanalytics'] = 'Custo de tokens e análises &rarr;';
$string['toc:testing'] = 'Ambiente de teste &rarr;';
$string['toc:back_to_course'] = '&larr; Voltar para {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'Binário pdftotext não encontrado; extração de PDF desativada.';
$string['rag:pdftotext_available'] = 'pdftotext detectado em {$a}.';
$string['rag:docx_unavailable'] = 'Extensão PHP ZipArchive não disponível; extração de DOCX desativada.';
$string['rag:h5p_unavailable'] = 'Não foi possível ler o conteúdo H5P; ignorando.';
$string['rag:scorm_too_large'] = 'Pacote SCORM excede o limite de tamanho configurado ({$a} MB); ignorando.';
$string['rag:scorm_unzip_failed'] = 'Não foi possível descompactar o pacote SCORM; ignorando.';
$string['rag:transcript_fetch_failed'] = 'Não foi possível obter a transcrição de {$a}.';
$string['rag:transcript_cf_challenge'] = 'URL de transcrição bloqueada pelo desafio do Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'Mídia incorporada detectada: {$a}';
$string['rag:embed_transcript_attached'] = 'Transcrição anexada para {$a}';

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
