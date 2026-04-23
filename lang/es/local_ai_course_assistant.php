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
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
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
$string['settings:default_course_mode'] = 'Predeterminado para nuevos cursos';
$string['settings:default_course_mode_desc'] = 'Controla si SOLA aparece en un curso cuando no se ha hecho una elección específica para ese curso. Las instalaciones nuevas tienen por defecto "Deshabilitado por defecto" para que los administradores puedan activar curso por curso desde la página de Analytics o la página de Course AI Settings.';
$string['settings:default_course_mode_per_course'] = 'Deshabilitado por defecto (activar por curso)';
$string['settings:default_course_mode_all'] = 'Habilitado en todos los cursos';
$string['settings:auto_open'] = 'Abrir automáticamente en la primera visita';
$string['settings:auto_open_desc'] = 'Cuando está habilitado, el panel de SOLA se abre automáticamente la primera vez que un estudiante entra en cada curso. Las cargas de página posteriores en el mismo curso no vuelven a abrir el panel — el estado se rastrea por curso en el navegador del estudiante mediante localStorage. Se aplica en computadora y móvil. Puede anularse por curso desde la página Course AI Settings.';
$string['settings:comparison_providers'] = 'Proveedores de comparación (selector de LLM)';
$string['settings:comparison_providers_desc'] = 'Agregue proveedores de IA adicionales al selector de LLM integrado en el widget para que los administradores puedan comparar respuestas entre proveedores. Utilice la tabla siguiente para agregar filas. La columna de temperatura es opcional (déjela en blanco para usar la temperatura global). Formato almacenado: provider_id|api_key|model1,model2|temperature. El proveedor principal configurado arriba siempre se incluye automáticamente. Solo los administradores con el permiso de gestión ven el selector; los estudiantes nunca lo ven. IDs de proveedor válidos: openai, claude, deepseek, gemini, ollama, minimax, mistral, openrouter, xai, coreai, custom.';
$string['settings:provider'] = 'Proveedor de IA predeterminado';
$string['settings:provider_desc'] = 'Seleccione el proveedor de IA que se utilizará para las conversaciones de chat. Elija "Moodle AI (core_ai subsystem)" para enrutar las solicitudes a través de la configuración de IA integrada de Moodle en Site admin > AI; los campos de clave de API, modelo y URL base a continuación se ignoran en ese modo. Streaming, uso de herramientas y prompt caching no están disponibles vía core_ai — las respuestas se entregan como un solo bloque. Use un proveedor directo para la mejor experiencia del estudiante.';
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
$string['coursesettings:sola_enabled'] = 'SOLA en este curso';
$string['coursesettings:sola_enabled_toggle'] = 'Mostrar el widget de SOLA en este curso';
$string['coursesettings:sola_enabled_desc'] = 'Controla si el widget de chat de SOLA aparece en este curso. El valor predeterminado para todo el sitio se establece en la configuración del plugin en General > Default for new courses.';
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
$string['chat:clear'] = 'Limpiar pantalla';
$string['chat:clear_confirm'] = '¿Limpiar los mensajes visibles? Tu historial completo de chat permanece guardado y puede recargarse volviendo a abrir el widget.';
$string['chat:copy'] = 'Copiar conversación';
$string['chat:copied'] = 'Conversación copiada al portapapeles';
$string['chat:copy_failed'] = 'Error al copiar la conversación';
$string['chat:thinking'] = 'Pensando...';
$string['chat:error'] = 'Lo sentimos, algo salió mal. Por favor, inténtalo de nuevo.';
$string['chat:error_auth'] = 'Error de autenticación. Por favor, contacta a tu administrador.';
$string['chat:error_ratelimit'] = 'Demasiadas solicitudes. Por favor, espera un momento e inténtalo de nuevo.';
$string['chat:error_unavailable'] = 'El servicio de IA no está disponible temporalmente. Por favor, inténtalo más tarde.';
$string['chat:error_notconfigured'] = 'El tutor de IA aún no ha sido configurado. Por favor, contacta a tu administrador.';
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
$string['chat:greeting'] = '¡Hola, {$a}! Soy SOLA. ¿Cómo puedo ayudarte hoy?';
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

// Bottom nav.
$string['chat:mode_nav'] = 'Mode navigation';
$string['chat:mode_chat'] = 'Chat';
$string['chat:mode_voice'] = 'Voice';
$string['chat:mode_history'] = 'Notas';

// History panel.
$string['chat:history_title'] = 'Notas e historial de conversación';
$string['task:send_inactivity_reminders'] = 'Enviar correos electrónicos semanales de recordatorio por inactividad';
$string['task:run_meta_ai_query'] = 'Ejecutar consulta programada de analíticas Radar de Aprendizaje';
$string['messageprovider:study_notes'] = 'Notas de sesión de estudio';

// CDN settings.
$string['settings:cdn_heading'] = 'CDN / Entrega del frontend';
$string['settings:cdn_heading_desc'] = 'Servir los recursos frontend de SOLA (JS/CSS) desde un CDN externo en lugar del sistema de archivos de Moodle. Esto permite actualizaciones del frontend sin actualizar el plugin. Deje la URL del CDN vacía para usar los archivos locales del plugin.';
$string['settings:cdn_url'] = 'URL base del CDN';
$string['settings:cdn_url_desc'] = 'URL base donde se alojan sola.min.js y sola.min.css. Ejemplo: https://your-org.github.io/sola-cdn. Déjelo vacío para usar los archivos locales del plugin.';
$string['settings:cdn_version'] = 'Versión de recursos CDN';
$string['settings:cdn_version_desc'] = 'Cadena de versión añadida a las URLs del CDN para cache busting. Actualícela después de cada despliegue CDN (ej. 3.2.4 o un commit hash).';

// Analytics dashboard.
$string['analytics:tab_overall'] = 'Uso general';
$string['analytics:tab_bycourse'] = 'Por curso';
$string['analytics:tab_comparison'] = 'AI vs no usuarios';
$string['analytics:tab_byunit'] = 'Por unidad';
$string['analytics:tab_usagetypes'] = 'Tipos de uso';
$string['analytics:tab_themes'] = 'Temas';
$string['analytics:tab_feedback'] = 'Comentarios de AI';
$string['analytics:total_students'] = 'Total de estudiantes';
$string['analytics:active_users'] = 'Usuarios activos de AI';
$string['analytics:msgs_per_student'] = 'Mensajes por estudiante';
$string['analytics:avg_session'] = 'Duración promedio de sesión';
$string['analytics:return_rate'] = 'Tasa de retorno';
$string['analytics:total_sessions'] = 'Total de sesiones';
$string['analytics:thumbs_up'] = 'Me gusta';
$string['analytics:thumbs_down'] = 'No me gusta';
$string['analytics:hallucination_flags'] = 'Marcas de inexactitud';
$string['analytics:msgs_to_resolution'] = 'Mensajes hasta resolución';
$string['analytics:helpful'] = 'Útil';
$string['analytics:not_helpful'] = 'No útil';
$string['analytics:flag_hallucination'] = 'Esta respuesta contiene información inexacta';
$string['analytics:submit_rating'] = 'Enviar';
$string['analytics:thanks_feedback'] = 'Gracias por tus comentarios';

// LLM provider names.
$string['settings:provider_mistral'] = 'Mistral AI';
$string['settings:provider_openrouter'] = 'OpenRouter';
$string['settings:provider_xai'] = 'xAI (Grok)';

$string['settings:provider_coreai'] = 'Moodle AI (core_ai subsystem)';
// Strings added by update_langs.py.
$string['chat:starter_help_page'] = 'Explicar esta página';
$string['chat:starter_ask_anything'] = 'Pregunta lo que quieras';
$string['chat:starter_review_practice'] = 'Repasar y practicar';
$string['chat:history_saved_subtitle'] = 'Las respuestas guardadas permanecen en este dispositivo para este curso.';
$string['chat:history_saved_empty'] = 'Guarda una respuesta de IA para verla aquí.';
$string['chat:history_views_label'] = 'Vistas del historial';
$string['chat:history_view_saved'] = 'Guardadas';
$string['chat:history_view_recent'] = 'Historial';
$string['chat:debug_refresh'] = 'Actualizar';
$string['chat:debug_copy_all'] = 'Copiar todo';
$string['chat:debug_close'] = 'Cerrar';
$string['chat:language_switch'] = 'Cambiar idioma';
$string['chat:language_dismiss'] = 'Descartar sugerencia de idioma';
$string['chat:llm_label'] = 'LLM';
$string['chat:llm_provider_select'] = 'Seleccionar proveedor de LLM';
$string['chat:llm_model_label'] = 'Modelo';
$string['chat:llm_model_select'] = 'Seleccionar modelo de LLM';
$string['chat:footer_usertesting'] = 'Pruebas de usabilidad';
$string['chat:footer_feedback'] = 'Comentarios';
$string['chat:voice_panel_title'] = 'Habla con {$a} (Experimental)';

// Additional translated strings.
$string['chat:debug_context'] = 'Depuración de contexto';
$string['chat:debug_context_browser'] = 'Instantánea del navegador';
$string['chat:debug_context_copy'] = 'Copiar';
$string['chat:debug_context_prompt'] = 'Respuesta del servidor';
$string['chat:debug_context_request'] = 'Última solicitud SSE';
$string['chat:debug_context_toggle'] = 'Alternar inspector';
$string['chat:history_empty'] = 'Aún no hay conversaciones.';
$string['chat:history_refresh'] = 'Actualizar';
$string['chat:history_subtitle'] = 'Tus mensajes recientes.';
$string['chat:starter_explain_prompt'] = '¿Puedes explicar el concepto más importante?';
$string['chat:starter_help_lesson'] = 'Explica esto';
$string['chat:starter_help_lesson_prompt'] = 'Ayúdame a entender la lección. Resume los conceptos clave.';
$string['chat:starter_prompt_coach'] = 'Coach de IA';
$string['chat:starter_quick_study'] = 'Estudio rápido';
$string['chat:starter_study_plan_prompt'] = 'Quiero planificar estudio. Pregunta: (1) objetivo hoy, (2) tiempo disponible. Actualiza el plan.';
$string['chat:voice_copy'] = 'Conversación de voz con tu asistente.';
$string['chat:voice_ready'] = 'Listo';
$string['chat:voice_start'] = 'Iniciar';
$string['chat:voice_title'] = 'Habla con SOLA';
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
$string['mobile_chip_concepts'] = 'Conceptos clave';
$string['mobile_chip_quiz'] = 'Quiz';
$string['mobile_chip_studyplan'] = 'Plan de estudio';
$string['mobile_clear'] = 'Borrar historial';
$string['mobile_disabled'] = 'SOLA no está disponible para este curso.';
$string['mobile_placeholder'] = 'Haz una pregunta...';
$string['mobile_welcome'] = '¡Hola, {$a}!';
$string['mobile_welcome_sub'] = 'Soy SOLA, tu asistente de aprendizaje. ¿Cómo puedo ayudarte?';
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
$string['rubric:done'] = 'Hecho';
$string['rubric:encourage_high'] = '¡Excelente! ¡Sigue así!';
$string['rubric:encourage_low'] = '¡Buen comienzo! La práctica regular te ayudará.';
$string['rubric:encourage_mid'] = '¡Buen esfuerzo! Sigue practicando.';
$string['rubric:overall'] = 'General';
$string['rubric:practice_again'] = 'Practicar de nuevo';
$string['rubric:score_title_conversation'] = 'Puntuación de conversación';
$string['rubric:score_title_pronunciation'] = 'Puntuación de pronunciación';
$string['rubric:scoring'] = 'Evaluando tu sesión...';
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
$string['demo:title'] = 'Entorno de pruebas';
$string['demo:heading'] = 'Entorno de pruebas';
$string['demo:intro'] = 'Esta página crea un curso de pruebas que está <strong>oculto para los estudiantes</strong> (visible=0) y lo rellena con estudiantes ficticios, conversaciones de IA, valoraciones y comentarios. Útil para previsualizar el Analytics Dashboard o validar cambios del plugin sin afectar a ningún estudiante realmente matriculado.';
$string['demo:step1'] = 'Paso 1: curso de pruebas';
$string['demo:step2'] = 'Paso 2: añadir estudiantes ficticios y chats de IA';
$string['demo:course_exists'] = 'Existe el curso de pruebas: <strong>{$a->fullname}</strong> (nombre corto <code>{$a->shortname}</code>, id {$a->id})';
$string['demo:badge_hidden'] = 'oculto';
$string['demo:badge_visible'] = 'visible para los estudiantes';
$string['demo:no_course'] = 'No se encontró curso de pruebas. Haga clic abajo para crear uno.';
$string['demo:create_btn'] = 'Crear curso de pruebas oculto';
$string['demo:open_course'] = 'Abrir curso &rarr;';
$string['demo:seed_intro'] = 'Crea demo_student_001, demo_student_002, ... los inscribe en el curso de pruebas e inserta conversaciones, mensajes, valoraciones y comentarios sintéticos. Ejecute de nuevo para añadir más datos, o marque «limpiar primero» para empezar de cero.';
$string['demo:users_label'] = 'Usuarios';
$string['demo:weeks_label'] = 'Semanas';
$string['demo:clear_label'] = 'Borrar primero los usuarios demo_* existentes';
$string['demo:seed_btn'] = 'Añadir estudiantes y chats';
$string['demo:view_analytics'] = 'Ver analíticas de este curso &rarr;';
$string['demo:footer'] = 'Los datos creados aquí viven en las tablas estándar de usuarios / matriculaciones de Moodle y en las tablas de conversaciones propias del plugin. Todos los usuarios ficticios tienen nombres de usuario que empiezan por <code>demo_student_</code> para que sean fáciles de filtrar o eliminar. Para eliminarlos, ejecute de nuevo el paso de carga con «Borrar primero los usuarios demo_* existentes» marcado.';
$string['demo:course_fullname'] = 'Curso de pruebas SOLA (oculto)';
$string['demo:notify_created'] = 'Curso de pruebas listo: {$a->fullname} (id {$a->id}).';
$string['demo:notify_create_fail'] = 'No se pudo crear el curso: {$a}';
$string['demo:notify_seeded'] = 'Añadidos: {$a->users} usuarios, {$a->conversations} conversaciones, {$a->messages} mensajes, {$a->ratings} valoraciones, {$a->feedback} entradas de comentarios.';
$string['demo:notify_seed_fail'] = 'No se pudieron añadir los datos: {$a}';
$string['toc:analytics'] = 'Panel de Analítica &rarr;';
$string['toc:tokenanalytics'] = 'Coste de tokens y analíticas &rarr;';
$string['toc:testing'] = 'Entorno de pruebas &rarr;';
$string['toc:back_to_course'] = '&larr; Volver a {$a}';

// RAG extractor status strings (v3.9.6+).
$string['rag:pdftotext_missing'] = 'No se ha encontrado el binario pdftotext; extracción de PDF desactivada.';
$string['rag:pdftotext_available'] = 'Se ha detectado pdftotext en {$a}.';
$string['rag:docx_unavailable'] = 'La extensión PHP ZipArchive no está disponible; extracción de DOCX desactivada.';
$string['rag:h5p_unavailable'] = 'No se pudo leer el contenido H5P; omitiendo.';
$string['rag:scorm_too_large'] = 'El paquete SCORM excede el límite de tamaño configurado ({$a} MB); omitiendo.';
$string['rag:scorm_unzip_failed'] = 'No se pudo descomprimir el paquete SCORM; omitiendo.';
$string['rag:transcript_fetch_failed'] = 'No se pudo obtener la transcripción de {$a}.';
$string['rag:transcript_cf_challenge'] = 'URL de transcripción bloqueada por el desafío de Cloudflare: {$a}.';
$string['rag:embed_detected'] = 'Medios incrustados detectados: {$a}';
$string['rag:embed_transcript_attached'] = 'Transcripción adjuntada para {$a}';

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
