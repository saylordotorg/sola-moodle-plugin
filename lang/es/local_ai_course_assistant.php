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
 * Language strings for local_ai_course_assistant — Spanish (es).
 *
 * @package    local_ai_course_assistant
 * @copyright  2025 AI Course Assistant
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

// General.
$string['pluginname'] = 'Asistente de Curso con IA';
$string['privacy:metadata:local_ai_course_assistant_convs'] = 'Almacena las conversaciones del tutor de IA por usuario y curso.';
$string['privacy:metadata:local_ai_course_assistant_convs:userid'] = 'El ID del usuario propietario de la conversación.';
$string['privacy:metadata:local_ai_course_assistant_convs:courseid'] = 'El ID del curso al que pertenece la conversación.';
$string['privacy:metadata:local_ai_course_assistant_convs:title'] = 'El título de la conversación.';
$string['privacy:metadata:local_ai_course_assistant_convs:timecreated'] = 'La hora en que se creó la conversación.';
$string['privacy:metadata:local_ai_course_assistant_convs:timemodified'] = 'La hora en que se modificó por última vez la conversación.';
$string['privacy:metadata:local_ai_course_assistant_msgs'] = 'Almacena los mensajes individuales de las conversaciones del tutor de IA.';
$string['privacy:metadata:local_ai_course_assistant_msgs:userid'] = 'El ID del usuario que envió el mensaje.';
$string['privacy:metadata:local_ai_course_assistant_msgs:courseid'] = 'El ID del curso al que pertenece el mensaje.';
$string['privacy:metadata:local_ai_course_assistant_msgs:role'] = 'El rol del remitente del mensaje (usuario o asistente).';
$string['privacy:metadata:local_ai_course_assistant_msgs:message'] = 'El contenido del mensaje.';
$string['privacy:metadata:local_ai_course_assistant_msgs:tokens_used'] = 'El número de tokens utilizados para el mensaje.';
$string['privacy:metadata:local_ai_course_assistant_msgs:timecreated'] = 'La hora en que se creó el mensaje.';

// Capabilities.
$string['ai_course_assistant:use'] = 'Usar el chat del tutor de IA';
$string['ai_course_assistant:viewanalytics'] = 'Ver las analíticas del chat del tutor de IA';
$string['ai_course_assistant:manage'] = 'Administrar la configuración del chat del tutor de IA (rol de Administrador)';

// Settings.
$string['settings:enabled'] = 'Habilitar el Asistente de Curso con IA';
$string['settings:enabled_desc'] = 'Habilitar o deshabilitar el widget del Asistente de Curso con IA en las páginas de los cursos.';
$string['settings:provider'] = 'Proveedor de IA';
$string['settings:provider_desc'] = 'Seleccionar el proveedor de IA que se usará para las respuestas del chat.';
$string['settings:provider_claude'] = 'Claude (Anthropic)';
$string['settings:provider_openai'] = 'OpenAI';
$string['settings:provider_deepseek'] = 'DeepSeek';
$string['settings:provider_ollama'] = 'Ollama (Local)';
$string['settings:provider_minimax'] = 'MiniMax';
$string['settings:provider_custom'] = 'Personalizado (compatible con OpenAI)';
$string['settings:apikey'] = 'Clave API';
$string['settings:apikey_desc'] = 'Clave API para el proveedor seleccionado. No requerida para Ollama.';
$string['settings:model'] = 'Nombre del modelo';
$string['settings:model_desc'] = 'El modelo a utilizar. El valor predeterminado depende del proveedor (p. ej. claude-sonnet-4-5-20250929, gpt-4o, llama3, MiniMax-Text-01).';
$string['settings:apibaseurl'] = 'URL base de la API';
$string['settings:apibaseurl_desc'] = 'URL base para la API. Se rellena automáticamente según el proveedor, pero puede modificarse. Déjelo en blanco para usar el valor predeterminado del proveedor.';
$string['settings:systemprompt'] = 'Plantilla de instrucción del sistema';
$string['settings:systemprompt_desc'] = 'Instrucción del sistema enviada a la IA. Use los marcadores de posición: {{coursename}}, {{userrole}}, {{coursetopics}}.';
$string['settings:systemprompt_default'] = 'Eres un tutor de IA útil para el curso "{{coursename}}". El rol del estudiante es {{userrole}}.

Temas del curso:
{{coursetopics}}

Ayuda al estudiante a comprender el contenido del curso. Sé alentador, claro y pedagógicamente riguroso.';
$string['settings:temperature'] = 'Temperatura';
$string['settings:temperature_desc'] = 'Controla la aleatoriedad. Los valores más bajos son más enfocados, los valores más altos son más creativos. Rango: 0.0 a 2.0.';
$string['settings:maxhistory'] = 'Historial máximo de conversación';
$string['settings:maxhistory_desc'] = 'Número máximo de pares de mensajes a incluir en las solicitudes a la API. Los mensajes más antiguos se eliminan.';
$string['settings:avatar'] = 'Avatar del chat';
$string['settings:avatar_desc'] = 'Seleccionar el ícono de avatar para el botón del widget de chat.';
$string['settings:avatar_saylor'] = 'Logo de {$a} (predeterminado)';
$string['settings:position'] = 'Posición del widget';
$string['settings:position_desc'] = 'Posición del widget de chat en la página.';
$string['settings:position_br'] = 'Inferior derecha';
$string['settings:position_bl'] = 'Inferior izquierda';
$string['settings:position_tr'] = 'Superior derecha';
$string['settings:position_tl'] = 'Superior izquierda';
$string['chat:settings'] = 'Configuración del plugin';
$string['analytics:viewdashboard'] = 'Ver panel de analíticas';

// Course settings (per-course AI provider override).
$string['coursesettings:title'] = 'Configuración de IA del curso';
$string['coursesettings:enabled'] = 'Habilitar anulaciones del curso';
$string['coursesettings:enabled_desc'] = 'Cuando está habilitado, los ajustes a continuación anulan la configuración global del proveedor de IA solo para este curso. Deje los campos en blanco para heredar el valor global.';
$string['coursesettings:using_global'] = 'Usando configuración global';
$string['coursesettings:saved'] = 'Configuración de IA del curso guardada.';
$string['coursesettings:global_settings_link'] = 'Configuración global de IA';

// Language detection and preference.
$string['lang:switch'] = 'Sí, cambiar';
$string['lang:dismiss'] = 'No, gracias';
$string['lang:change'] = 'Cambiar idioma';
$string['lang:english'] = 'Inglés';

// Chat widget.
$string['chat:title'] = 'Tutor de IA';
$string['chat:placeholder'] = 'Haz una pregunta...';
$string['chat:send'] = 'Enviar';
$string['chat:close'] = 'Cerrar chat';
$string['chat:open'] = 'Abrir chat del tutor de IA';
$string['chat:clear'] = 'Borrar historial';
$string['chat:clear_confirm'] = '¿Estás seguro de que deseas borrar el historial de chat de este curso?';
$string['chat:copy'] = 'Copiar conversación';
$string['chat:copied'] = 'Conversación copiada al portapapeles';
$string['chat:copy_failed'] = 'Error al copiar la conversación';
$string['chat:greeting'] = '¡Hola! Soy tu tutor de IA para este curso. ¿En qué puedo ayudarte hoy?';
$string['chat:thinking'] = 'Pensando...';
$string['chat:error'] = 'Lo sentimos, algo salió mal. Por favor, inténtalo de nuevo.';
$string['chat:error_auth'] = 'Error de autenticación. Por favor, contacta a tu administrador.';
$string['chat:error_ratelimit'] = 'Demasiadas solicitudes. Por favor, espera un momento e inténtalo de nuevo.';
$string['chat:error_unavailable'] = 'El servicio de IA no está disponible temporalmente. Por favor, inténtalo más tarde.';
$string['chat:error_notconfigured'] = 'El tutor de IA aún no ha sido configurado. Por favor, contacta a tu administrador.';
$string['chat:expand'] = 'Expandir chat';
$string['chat:collapse'] = 'Contraer chat';
$string['chat:mic'] = 'Habla tu pregunta';
$string['chat:mic_error'] = 'Error de micrófono. Por favor, revisa los permisos de tu navegador.';
$string['chat:mic_unsupported'] = 'La entrada de voz no es compatible con este navegador.';
$string['chat:newline_hint'] = 'Shift+Enter para nueva línea';
$string['chat:you'] = 'Tú';
$string['chat:assistant'] = 'Tutor de IA';
$string['chat:history_loaded'] = 'Conversación anterior cargada.';
$string['chat:history_cleared'] = 'Historial de chat borrado.';
$string['chat:offtopic_warning'] = 'Parece que tu pregunta no está relacionada con este curso. ¡Por favor intenta mantenerte en el tema para que pueda ayudarte mejor!';
$string['chat:offtopic_ended'] = 'Tu acceso al tutor de IA ha sido suspendido temporalmente por {$a} minutos porque la conversación se desvió del tema demasiadas veces. Por favor, usa este tiempo para revisar los materiales del curso y podrás intentarlo de nuevo más tarde.';
$string['chat:offtopic_locked'] = 'Tu acceso al tutor de IA está temporalmente suspendido. Puedes intentarlo de nuevo en {$a} minutos. Por favor, enfócate en preguntas relacionadas con el curso cuando regreses.';
$string['chat:escalated_to_support'] = 'No pude responder completamente tu pregunta, por lo que he creado un ticket de soporte para ti. Un miembro del equipo de soporte hará un seguimiento. Tu referencia de ticket es: {$a}';
$string['chat:studyplan_intro'] = '¡Puedo ayudarte a crear un plan de estudio para este curso! Solo dime cuántas horas por semana puedes dedicar a estudiar y te ayudaré a construir un plan estructurado.';

// FAQ & Support settings.
$string['settings:faq_heading'] = 'Preguntas frecuentes y soporte';
$string['settings:faq_heading_desc'] = 'Configurar las preguntas frecuentes centralizadas y la integración de tickets de soporte de Zendesk.';
$string['settings:faq_content'] = 'Contenido de preguntas frecuentes';
$string['settings:faq_content_desc'] = 'Ingresa las entradas de preguntas frecuentes (una por línea con el formato: P: pregunta | R: respuesta). Estas se proporcionarán a la IA para responder preguntas de soporte comunes.';
$string['settings:zendesk_enabled'] = 'Habilitar escalación a Zendesk';
$string['settings:zendesk_enabled_desc'] = 'Cuando la IA no pueda resolver una pregunta de soporte, crear automáticamente un ticket de Zendesk con un resumen de la conversación.';
$string['settings:zendesk_subdomain'] = 'Subdominio de Zendesk';
$string['settings:zendesk_subdomain_desc'] = 'Tu subdominio de Zendesk (p. ej. "miempresa" para miempresa.zendesk.com).';
$string['settings:zendesk_email'] = 'Correo electrónico de la API de Zendesk';
$string['settings:zendesk_email_desc'] = 'Dirección de correo electrónico del usuario de Zendesk para la autenticación de la API (con el sufijo /token).';
$string['settings:zendesk_token'] = 'Token de la API de Zendesk';
$string['settings:zendesk_token_desc'] = 'Token de la API para la autenticación de Zendesk.';

// Off-topic detection settings.
$string['settings:offtopic_heading'] = 'Detección de temas fuera de lugar';
$string['settings:offtopic_heading_desc'] = 'Configurar cómo el chat maneja las conversaciones fuera del tema.';
$string['settings:offtopic_enabled'] = 'Habilitar detección de temas fuera de lugar';
$string['settings:offtopic_enabled_desc'] = 'Instruir a la IA para que detecte y redirija las conversaciones fuera del tema.';
$string['settings:offtopic_max'] = 'Máximo de mensajes fuera del tema';
$string['settings:offtopic_max_desc'] = 'Número de mensajes consecutivos fuera del tema antes de tomar medidas.';
$string['settings:offtopic_action'] = 'Acción ante temas fuera de lugar';
$string['settings:offtopic_action_desc'] = 'Qué hacer cuando se alcanza el límite de mensajes fuera del tema.';
$string['settings:offtopic_action_warn'] = 'Advertir y redirigir';
$string['settings:offtopic_action_end'] = 'Bloquear acceso temporalmente';
$string['settings:offtopic_lockout_duration'] = 'Duración del bloqueo (minutos)';
$string['settings:offtopic_lockout_duration_desc'] = 'Cuánto tiempo (en minutos) pierde un estudiante el acceso al tutor de IA al superar el límite de mensajes fuera del tema. Predeterminado: 30 minutos.';

// Study planning & reminders settings.
$string['settings:studyplan_heading'] = 'Planificación de estudio y recordatorios';
$string['settings:studyplan_heading_desc'] = 'Configurar las funciones de planificación de estudio y las notificaciones de recordatorio.';
$string['settings:studyplan_enabled'] = 'Habilitar planificación de estudio';
$string['settings:studyplan_enabled_desc'] = 'Permitir que el tutor de IA ayude a los estudiantes a crear planes de estudio personalizados según su tiempo disponible.';
$string['settings:reminders_email_enabled'] = 'Habilitar recordatorios por correo electrónico';
$string['settings:reminders_email_enabled_desc'] = 'Permitir que los estudiantes se suscriban a recordatorios de estudio por correo electrónico.';
$string['settings:reminders_whatsapp_enabled'] = 'Habilitar recordatorios por WhatsApp';
$string['settings:reminders_whatsapp_enabled_desc'] = 'Permitir que los estudiantes se suscriban a recordatorios de estudio por WhatsApp (requiere configuración de la API de WhatsApp).';
$string['settings:whatsapp_api_url'] = 'URL de la API de WhatsApp';
$string['settings:whatsapp_api_url_desc'] = 'El endpoint de la API para enviar mensajes de WhatsApp (p. ej. Twilio, MessageBird). Debe aceptar POST con cuerpo JSON que contenga los campos "to", "from" y "body".';
$string['settings:whatsapp_api_token'] = 'Token de la API de WhatsApp';
$string['settings:whatsapp_api_token_desc'] = 'Token de autenticación para la API de WhatsApp.';
$string['settings:whatsapp_from_number'] = 'Número de remitente de WhatsApp';
$string['settings:whatsapp_from_number_desc'] = 'El número de teléfono desde el que enviar mensajes de WhatsApp (con código de país, p. ej. +14155238886).';
$string['settings:whatsapp_blocked_countries'] = 'Países bloqueados para WhatsApp';
$string['settings:whatsapp_blocked_countries_desc'] = 'Códigos de país ISO 3166-1 alpha-2 separados por comas donde los recordatorios de WhatsApp no están permitidos debido a regulaciones locales (p. ej. "CN,IR,KP").';

// Reminder messages.
$string['reminder:email_subject'] = 'Recordatorio de estudio: {$a}';
$string['reminder:email_body'] = 'Hola {$a->firstname},

Este es tu recordatorio de estudio para "{$a->coursename}".

{$a->message}

Tu plan de estudio sugiere {$a->hours_per_week} horas por semana para este curso.

¡Sigue con el buen trabajo!

---
Para dejar de recibir estos recordatorios, haz clic aquí: {$a->unsubscribe_url}';
$string['reminder:whatsapp_body'] = 'Recordatorio de estudio para {$a->coursename}: {$a->message} (Cancelar suscripción: {$a->unsubscribe_url})';
$string['reminder:study_tip_prefix'] = 'Enfoque de estudio de hoy: ';

// Unsubscribe page.
$string['unsubscribe:title'] = 'Cancelar suscripción a recordatorios de estudio';
$string['unsubscribe:success'] = 'Te has dado de baja exitosamente de los recordatorios de estudio para este curso.';
$string['unsubscribe:already'] = 'Ya te habías dado de baja de estos recordatorios.';
$string['unsubscribe:invalid'] = 'Enlace de cancelación de suscripción inválido o expirado.';
$string['unsubscribe:resubscribe'] = '¿Cambiaste de opinión? Puedes volver a activar los recordatorios a través del chat del tutor de IA.';

// Scheduled task.
$string['task:send_reminders'] = 'Enviar recordatorios de estudio del tutor de IA';

// Privacy - additional tables.
$string['privacy:metadata:local_ai_course_assistant_plans'] = 'Almacena los planes de estudio de los estudiantes.';
$string['privacy:metadata:local_ai_course_assistant_plans:userid'] = 'El ID del usuario propietario del plan de estudio.';
$string['privacy:metadata:local_ai_course_assistant_plans:courseid'] = 'El curso al que pertenece el plan de estudio.';
$string['privacy:metadata:local_ai_course_assistant_plans:hours_per_week'] = 'Horas por semana que el estudiante planea dedicar al estudio.';
$string['privacy:metadata:local_ai_course_assistant_plans:plan_data'] = 'Los detalles del plan de estudio en formato JSON.';
$string['privacy:metadata:local_ai_course_assistant_reminders'] = 'Almacena las preferencias y suscripciones de recordatorios de estudio.';
$string['privacy:metadata:local_ai_course_assistant_reminders:userid'] = 'El ID del usuario suscrito a los recordatorios.';
$string['privacy:metadata:local_ai_course_assistant_reminders:channel'] = 'El canal de recordatorio (correo electrónico o WhatsApp).';
$string['privacy:metadata:local_ai_course_assistant_reminders:destination'] = 'La dirección de correo electrónico o el número de teléfono para los recordatorios.';
$string['privacy:metadata:local_ai_course_assistant_reminders:country_code'] = 'El código de país del usuario para el cumplimiento normativo.';

// Analytics dashboard.
$string['analytics:title'] = 'Analíticas del tutor de IA';
$string['analytics:overview'] = 'Resumen';
$string['analytics:total_conversations'] = 'Conversaciones totales';
$string['analytics:total_messages'] = 'Mensajes totales';
$string['analytics:active_students'] = 'Estudiantes activos';
$string['analytics:avg_messages_per_student'] = 'Promedio de mensajes por estudiante';
$string['analytics:offtopic_rate'] = 'Tasa de mensajes fuera del tema';
$string['analytics:escalation_count'] = 'Escalado a soporte';
$string['analytics:studyplan_adoption'] = 'Estudiantes con planes de estudio';
$string['analytics:usage_trends'] = 'Tendencias de uso';
$string['analytics:daily_messages'] = 'Volumen de mensajes diarios';
$string['analytics:hotspots'] = 'Puntos clave del curso';
$string['analytics:hotspots_desc'] = 'Secciones del curso más frecuentemente referenciadas en las preguntas de los estudiantes. Un mayor número puede indicar áreas donde los estudiantes necesitan más apoyo.';
$string['analytics:section'] = 'Sección';
$string['analytics:mention_count'] = 'Menciones';
$string['analytics:common_prompts'] = 'Patrones de consulta frecuentes';
$string['analytics:common_prompts_desc'] = 'Patrones de preguntas recurrentes de los estudiantes. Revísalos para identificar brechas sistemáticas en el contenido del curso.';
$string['analytics:prompt_pattern'] = 'Patrón';
$string['analytics:frequency'] = 'Frecuencia';
$string['analytics:recent_activity'] = 'Actividad reciente';
$string['analytics:no_data'] = 'Aún no hay datos de analíticas disponibles. Los datos aparecerán una vez que los estudiantes comiencen a usar el tutor de IA.';
$string['analytics:timerange'] = 'Rango de tiempo';
$string['analytics:last_7_days'] = 'Últimos 7 días';
$string['analytics:last_30_days'] = 'Últimos 30 días';
$string['analytics:all_time'] = 'Todo el tiempo';
$string['analytics:export'] = 'Exportar datos';
$string['analytics:provider_comparison'] = 'Comparación de proveedores de IA';
$string['analytics:provider_comparison_desc'] = 'Comparar el rendimiento de los proveedores de IA utilizados en este curso.';
$string['analytics:provider'] = 'Proveedor';
$string['analytics:response_count'] = 'Respuestas';
$string['analytics:avg_response_length'] = 'Longitud promedio de respuesta';
$string['analytics:total_tokens'] = 'Tokens totales';
$string['analytics:avg_tokens'] = 'Promedio de tokens / respuesta';

// User settings.
$string['usersettings:title'] = 'Asistente de Curso con IA - Tus datos';
$string['usersettings:intro'] = 'Administra los datos y la configuración de privacidad de tu chat con el tutor de IA';
$string['usersettings:privacy_info'] = 'Tus conversaciones con el tutor de IA se almacenan para brindarte apoyo continuo durante el curso. Tienes control total sobre estos datos y puedes eliminarlos en cualquier momento.';
$string['usersettings:usage_stats'] = 'Tus estadísticas de uso';
$string['usersettings:total_messages'] = 'Mensajes totales';
$string['usersettings:total_conversations'] = 'Conversaciones';
$string['usersettings:messages'] = 'Mensajes';
$string['usersettings:last_activity'] = 'Última actividad';
$string['usersettings:delete_course_data'] = 'Eliminar datos del curso';
$string['usersettings:no_data'] = 'Aún no has usado el tutor de IA. Tus datos de uso aparecerán aquí una vez que empieces a chatear.';
$string['usersettings:delete_all_title'] = 'Eliminar todos tus datos';
$string['usersettings:delete_all_warning'] = 'Esto eliminará permanentemente todas tus conversaciones con el tutor de IA en todos los cursos. Esta acción no se puede deshacer.';
$string['usersettings:delete_all_button'] = 'Eliminar todos mis datos';
$string['usersettings:confirm_delete_course'] = '¿Estás seguro de que deseas eliminar permanentemente todos tus datos del tutor de IA para el curso "{$a}"? Esta acción no se puede deshacer.';
$string['usersettings:confirm_delete_all'] = '¿Estás seguro de que deseas eliminar permanentemente TODOS tus datos del tutor de IA en todos los cursos? Esta acción no se puede deshacer.';
$string['usersettings:data_deleted'] = 'Tus datos han sido eliminados.';

// === SOLA v1.0.12 — new features translation ===
$string['chat:greeting'] = '¡Hola, {$a}! Soy SOLA, tu asistente de aprendizaje en línea de Saylor.';
$string['chat:title'] = 'SOLA';
$string['chat:assistant'] = 'SOLA';
$string['chat:open'] = 'Abrir SOLA';
$string['chat:change_avatar'] = 'Cambiar avatar';

// Quiz UI.
$string['chat:quiz'] = 'Hacer un cuestionario de práctica';
$string['chat:quiz_setup_title'] = 'Cuestionario de práctica';
$string['chat:quiz_questions'] = 'Número de preguntas';
$string['chat:quiz_topic'] = 'Tema';
$string['chat:quiz_topic_guided'] = 'Con guía de IA (según tu progreso)';
$string['chat:quiz_topic_default'] = 'Contenido actual del curso';
$string['chat:quiz_topic_custom'] = 'Tema personalizado…';
$string['chat:quiz_custom_placeholder'] = 'Escribe un tema o pregunta...';
$string['chat:quiz_start'] = 'Iniciar cuestionario';
$string['chat:quiz_cancel'] = 'Cancelar';
$string['chat:quiz_loading'] = 'Generando cuestionario…';
$string['chat:quiz_error'] = 'No se pudo generar el cuestionario. Por favor, inténtalo de nuevo.';
$string['chat:quiz_correct'] = '¡Correcto!';
$string['chat:quiz_wrong'] = 'Incorrecto.';
$string['chat:quiz_next'] = 'Siguiente pregunta';
$string['chat:quiz_finish'] = 'Ver resultados';
$string['chat:quiz_score'] = '¡Cuestionario completado! Obtuviste {$a->score} de {$a->total}.';
$string['chat:quiz_summary'] = 'Acabo de completar un cuestionario de práctica de {$a->total} preguntas sobre "{$a->topic}" y obtuve {$a->score}/{$a->total}.';
$string['chat:quiz_topic_objectives'] = 'Objetivos de aprendizaje';
$string['chat:quiz_topic_modules'] = 'Tema del curso';
$string['chat:quiz_subtopic_select'] = 'Selecciona un elemento específico…';
$string['chat:quiz_topic_sections'] = 'Secciones del curso';
$string['chat:quiz_score_great'] = '¡Excelente trabajo! Realmente dominas este material.';
$string['chat:quiz_score_good'] = '¡Buen esfuerzo! Sigue repasando para consolidar tu comprensión.';
$string['chat:quiz_score_practice'] = 'Sigue practicando — intenta repasar el material del curso relacionado y luego vuelve a hacer el cuestionario.';
$string['chat:quiz_review_heading'] = 'Revisión';
$string['chat:quiz_retake'] = 'Repetir cuestionario';
$string['chat:quiz_exit'] = 'Salir del cuestionario';
$string['chat:quiz_your_answer'] = 'Tu respuesta';
$string['chat:quiz_correct_answer'] = 'Respuesta correcta';

// Conversation starters.
$string['chat:starters_label'] = 'Iniciadores de conversación';
$string['chat:starter_quiz'] = 'Examíname sobre esto';
$string['chat:starter_explain'] = 'Explícame esto';
$string['chat:starter_key_concepts'] = 'Conceptos clave';
$string['chat:starter_study_plan'] = 'Plan de estudio';
$string['chat:starter_help_me'] = 'Ayuda con IA';
$string['chat:starter_ai_project_coach'] = 'Coach de proyecto IA';
$string['chat:starter_ell_practice'] = 'Práctica de conversación';
$string['chat:starter_ell_pronunciation'] = 'Pronunciación ELL';
$string['chat:starter_ai_coach'] = 'Entrenador IA';
$string['chat:starter_speak'] = 'Hablar un iniciador';

// Reset / home.
$string['chat:reset'] = 'Empezar de nuevo';

// Topic picker.
$string['chat:topic_picker_title'] = '¿En qué te gustaría enfocarte?';
$string['chat:topic_picker_title_help'] = '¿Con qué necesitas ayuda?';
$string['chat:topic_picker_title_explain'] = '¿Qué te gustaría que explicara?';
$string['chat:topic_picker_title_study'] = '¿En qué área te gustaría enfocarte?';
$string['chat:topic_start'] = 'Continuar';

// Expand states.
$string['chat:fullscreen'] = 'Pantalla completa';
$string['chat:exitfullscreen'] = 'Salir de pantalla completa';

// Settings panel.
$string['chat:language'] = 'Cambiar idioma';
$string['chat:settings_panel'] = 'Configuración';
$string['chat:settings_language'] = 'Idioma';
$string['chat:settings_avatar'] = 'Avatar';
$string['chat:settings_voice'] = 'Voz';
$string['chat:settings_voice_admin'] = 'La configuración de voz se administra en el panel de administración del sitio.';

// Voice mode.
$string['chat:voice_mode'] = 'Modo de voz';
$string['chat:voice_end'] = 'Finalizar sesión de voz';
$string['chat:voice_connecting'] = 'Conectando...';
$string['chat:voice_listening'] = 'Escuchando...';
$string['chat:voice_speaking'] = 'SOLA está hablando...';
$string['chat:voice_idle'] = 'Listo';
$string['chat:voice_error'] = 'Error de conexión de voz. Por favor, revisa tu configuración.';
$string['chat:quiz_locked'] = 'SOLA está en pausa durante los cuestionarios para apoyar la integridad académica. ¡Buena suerte!';
$string['task:send_inactivity_reminders'] = 'Enviar correos electrónicos semanales de recordatorio por inactividad';
$string['messageprovider:study_notes'] = 'Notas de sesión de estudio';
