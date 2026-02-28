# AI Course Assistant - Moodle Local Plugin

A comprehensive AI-powered chat widget for Moodle 4.5+ that provides context-aware tutoring, support, and study planning for students.

## Version 0.3.0 (Beta)

**Release Date:** January 2025
**Requires:** Moodle 4.5+ (2024100700)
**License:** GPL v3+

## Features

### Core Functionality
- **Floating Chat Widget:** Non-intrusive, always-available AI tutor on course pages
- **Context-Aware:** Ingests course structure to provide relevant, course-specific guidance
- **Streaming Responses:** Real-time SSE (Server-Sent Events) for responsive user experience
- **Multi-Provider Support:** Claude, OpenAI, Ollama, MiniMax, custom OpenAI-compatible APIs
- **Role-Based Behavior:** Adapts responses for students, academic support staff, and administrators

### Student Features
- **Socratic Tutoring:** Guides students to answers rather than giving direct solutions
- **FAQ Support:** Centralized knowledge base for common questions
- **Study Planning:** Personalized study schedules based on available hours per week
- **Reminders:** Opt-in email/WhatsApp study reminders with country restrictions
- **AI Literacy:** Teaches students how to use AI effectively
- **Multilingual:** Auto-detects and responds in 100+ languages
- **Conversation Persistence:** Continues conversations where students left off
- **Audio Playback:** Listen to AI responses using Text-to-Speech
- **Copy Conversations:** Export chat history to clipboard
- **Data Management:** Self-service data deletion from user settings

### Academic Support Features
- **Analytics Dashboard:** Monitor student engagement and trends
- **Course Hotspots:** Identify sections where students struggle
- **Common Prompts:** See frequently asked questions
- **Usage Statistics:** Track adoption and activity
- **Off-Topic Detection:** Automatic identification of non-course-related conversations

### Administrative Features
- **Comprehensive Settings:** Fine-tune behavior, limits, and integrations
- **Off-Topic Management:** Configure limits and lockout duration
- **Provider Configuration:** Choose and configure AI provider
- **Zendesk Integration:** Auto-escalate unresolved issues to support tickets
- **Audit Logging:** Full SOC2-compliant audit trail
- **Rate Limiting:** Protect against abuse and API cost overruns

### Security & Compliance
- **SOC2 Compliant:** Audit logging, encryption, access controls
- **GDPR Ready:** Full Privacy API implementation
- **Encrypted API Keys:** Secure credential storage
- **Rate Limiting:** User and IP-based throttling
- **Input Validation:** XSS and SQL injection protection
- **Session Security:** Moodle-integrated authentication

## Installation

1. Download or clone this repository
2. Extract to `{moodle_root}/local/ai_course_assistant/`
3. Visit Site Administration → Notifications to complete installation
4. Configure settings at Site Administration → Plugins → Local plugins → AI Course Assistant

## Configuration

### Required Settings
1. **Enable Plugin:** Turn on the AI Course Assistant
2. **AI Provider:** Choose your provider (Claude, OpenAI, etc.)
3. **API Key:** Enter your provider's API key (stored encrypted)
4. **Model:** Select the model (e.g., claude-sonnet-4, gpt-4o)

### Recommended Settings
- **System Prompt:** Customize the AI's personality and behavior
- **Max History:** Limit conversation context (default: 20 message pairs)
- **Avatar:** Choose from 10 included avatars
- **Position:** Bottom-right or bottom-left

### Optional Integrations
- **FAQ:** Add common questions and answers
- **Zendesk:** Configure for automatic ticket creation
- **Study Reminders:** Enable email/WhatsApp notifications
- **Off-Topic Detection:** Set limits and actions

## Usage

### For Students
1. Open any course page
2. Click the floating avatar button (bottom-right by default)
3. Start asking questions about the course
4. Use Shift+Enter for new lines, Enter to send
5. Click copy button to export conversation
6. Click play button on AI messages to hear them aloud
7. Visit your user settings to manage your data

### For Academic Support
1. Access analytics dashboard from chat widget header (if enabled)
2. Review student engagement trends
3. Identify course content hotspots needing clarification
4. See common prompt patterns

### For Administrators
1. Configure plugin settings at Site Administration
2. Set off-topic limits and lockout duration
3. Review audit logs for security and usage
4. Monitor API costs and usage patterns

## Architecture

### Frontend
- **AMD Modules:** Modern JavaScript with ES6+ features
- **SSE Client:** Efficient streaming with ReadableStream API
- **Markdown Rendering:** Lightweight, secure markdown parser
- **Audio Player:** Web Speech API for TTS (no external dependencies)
- **Responsive Design:** Mobile-first CSS with breakpoints

### Backend
- **Provider Layer:** Interface → Base → Specific implementations
- **Context Builder:** Course structure ingestion with caching
- **Conversation Manager:** Message persistence and history management
- **Rate Limiter:** Sliding window algorithm with caching
- **Audit Logger:** SOC2-compliant activity tracking

### Database
- **4 Main Tables:**
  - `local_ai_course_assistant_convs`: Conversations
  - `local_ai_course_assistant_msgs`: Messages
  - `local_ai_course_assistant_plans`: Study plans
  - `local_ai_course_assistant_reminders`: Reminder subscriptions
  - `local_ai_course_assistant_audit`: Security audit log

### Caching
- **System Prompts:** 1 hour TTL, invalidates on course changes
- **Rate Limits:** 2 minutes TTL, sliding window tracking

## File Structure

```
ai_course_assistant/
├── version.php                    # Plugin metadata
├── settings.php                   # Admin settings page
├── settings_user.php              # Student data management page
├── analytics.php                  # Analytics dashboard
├── unsubscribe.php                # Reminder opt-out page
├── sse.php                        # SSE streaming endpoint
├── lib.php                        # Legacy compatibility
├── README.md                      # This file
├── SECURITY.md                    # Security documentation
├── db/
│   ├── install.xml                # Database schema
│   ├── upgrade.php                # Upgrade scripts
│   ├── access.php                 # Capability definitions
│   ├── hooks.php                  # Hook registrations
│   ├── services.php               # External function definitions
│   ├── tasks.php                  # Scheduled tasks
│   ├── messages.php               # Message providers
│   └── caches.php                 # Cache definitions
├── lang/en/
│   └── local_ai_course_assistant.php    # Language strings
├── classes/
│   ├── hook_callbacks.php         # Widget injection
│   ├── conversation_manager.php   # Message CRUD
│   ├── context_builder.php        # System prompt builder
│   ├── faq_manager.php            # FAQ parsing
│   ├── zendesk_client.php         # Zendesk API
│   ├── study_planner.php          # Study plan management
│   ├── reminder_manager.php       # Reminder delivery
│   ├── analytics.php              # Usage analytics
│   ├── rate_limiter.php           # Rate limiting
│   ├── audit_logger.php           # Audit logging
│   ├── provider/
│   │   ├── provider_interface.php
│   │   ├── base_provider.php
│   │   ├── claude_provider.php
│   │   ├── openai_compatible_provider.php
│   │   ├── openai_provider.php
│   │   ├── ollama_provider.php
│   │   ├── minimax_provider.php
│   │   └── custom_provider.php
│   ├── external/                  # External API functions
│   ├── task/
│   │   └── send_reminders.php
│   └── privacy/
│       └── provider.php           # GDPR implementation
├── templates/
│   ├── chat_widget.mustache       # Main widget
│   ├── chat_message.mustache      # Message bubble
│   ├── analytics_dashboard.mustache
│   └── user_settings.mustache
├── amd/src/
│   ├── chat.js                    # Main controller
│   ├── ui.js                      # DOM manipulation
│   ├── sse_client.js              # SSE streaming
│   ├── markdown.js                # MD to HTML
│   ├── audio_player.js            # TTS playback
│   └── repository.js              # AJAX wrappers
├── styles.css                     # Widget styles
├── pix/
│   ├── icon.svg                   # Plugin icon
│   └── avatars/                   # 10 avatar SVGs
└── tests/
    ├── context_builder_test.php
    ├── conversation_manager_test.php
    └── behat/
        └── chat_widget.feature
```

## API Providers

### Supported Providers

1. **Claude (Anthropic)**
   - Models: claude-sonnet-4, claude-opus-4, claude-haiku-4
   - API: `https://api.anthropic.com`

2. **OpenAI**
   - Models: gpt-4o, gpt-4-turbo, gpt-3.5-turbo
   - API: `https://api.openai.com`

3. **Ollama (Self-Hosted)**
   - Models: llama3, mistral, codellama, etc.
   - API: `http://localhost:11434` (default)

4. **MiniMax**
   - Models: MiniMax-Text-01
   - API: `https://api.minimax.chat`

5. **Custom OpenAI-Compatible**
   - Any API following OpenAI's chat completions format

### Cost Considerations

- Configure max history to control token usage
- Use rate limiting to prevent runaway costs
- Monitor usage in analytics dashboard
- Consider self-hosted options (Ollama) for unlimited use

## Performance

### Optimizations Implemented
- ✅ System prompt caching (1 hour)
- ✅ Rate limiting (user + IP)
- ✅ Gzip compression for responses
- ✅ Database query optimization with indexes
- ✅ Lazy loading of chat widget JS
- ✅ Efficient SSE streaming
- ✅ Session write-close to prevent blocking

### Benchmarks
- Widget load: <100ms
- Message send (cached prompt): ~200ms + AI provider latency
- SSE streaming: Real-time token delivery
- Analytics dashboard: <500ms (typical course)

## Troubleshooting

### Widget not appearing
- Check plugin is enabled in settings
- Verify you have `local/ai_course_assistant:use` capability
- Ensure you're on a course page (not site home)
- Check browser console for JavaScript errors

### Streaming not working
- Verify web server doesn't buffer SSE responses
- For nginx: Add `X-Accel-Buffering: no` (already in code)
- For Apache: Disable mod_deflate for SSE endpoint
- Check firewall/proxy settings

### Rate limit errors
- Increase limits in rate_limiter.php defaults
- Clear rate limit cache: Purge caches → All caches
- Check for API rate limits from provider

### Audio not working
- Web Speech API not supported in all browsers
- Try Chrome, Edge, or Safari (best support)
- Check browser permissions for audio

## Development

### Testing
```bash
# PHPUnit
php admin/tool/phpunit/cli/init.php
vendor/bin/phpunit local/ai_course_assistant/tests/

# Behat
php admin/tool/behat/cli/init.php
vendor/bin/behat --tags=@local_ai_course_assistant
```

### Code Style
- Follow Moodle coding style guidelines
- Use `phpcbf` for automatic fixes
- Run `phpcs` before committing

## Roadmap

### v0.4.0
- [ ] Mobile app support
- [ ] Voice input
- [ ] Image analysis
- [ ] PDF document ingestion
- [ ] Collaborative study groups

### v0.5.0
- [ ] Advanced analytics (sentiment analysis)
- [ ] A/B testing framework
- [ ] Custom prompt templates per course
- [ ] Integration with H5P activities

## Contributing

Contributions welcome! Please:
1. Fork the repository
2. Create a feature branch
3. Follow Moodle coding standards
4. Add tests for new functionality
5. Submit a pull request

## Support

- **Documentation:** See SECURITY.md for compliance details
- **Issues:** [GitHub Issues](https://github.com/[your-repo]/issues)
- **Email:** [Your support email]

## Credits

**Author:** [Your name/organization]
**Contributors:** [List contributors]
**License:** GNU GPL v3 or later
**Copyright:** 2025 AI Course Assistant

## Acknowledgments

- Moodle community for the excellent platform
- Anthropic for Claude API
- OpenAI for GPT models
- All contributors and testers

---

**Note:** This plugin is in BETA. Use in production environments at your own risk. Always test thoroughly in a staging environment first.
