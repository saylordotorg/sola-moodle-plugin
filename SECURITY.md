# Security and Compliance Documentation

## Overview

The AI Course Assistant plugin implements comprehensive security measures to ensure data protection, privacy, and compliance with industry standards including SOC2.

## Version

- **Plugin Version:** 0.3.0 (2025011500)
- **Moodle Requirement:** 4.5+
- **Maturity:** BETA
- **Last Updated:** January 2025

## SOC2 Compliance Measures

### 1. Audit Logging

All sensitive operations are logged for security auditing and compliance:

- **Logged Actions:**
  - User message sent
  - Assistant response generated
  - Data deletion (user-initiated or admin)
  - Settings changes
  - Failed authentication attempts
  - Rate limit violations
  - Off-topic lockouts

- **Audit Log Contents:**
  - Action type
  - User ID
  - Course ID
  - IP address
  - User agent
  - Additional details (JSON)
  - Timestamp

- **Retention Policy:** Audit logs are retained for 365 days by default (configurable)
- **Access Control:** Only administrators can access audit logs
- **Storage:** `local_ai_course_assistant_audit` database table

### 2. Data Encryption

- **API Keys:** Stored using Moodle's encrypted configuration system
- **Sensitive Data:** All database fields containing sensitive information are properly protected
- **Transport Security:** HTTPS/TLS enforcement recommended (server-level)
- **Session Security:** Moodle's built-in session management with `write_close()` for SSE

### 3. Access Control

- **Role-Based Access:**
  - `local/ai_course_assistant:use` - Students, Academic Support, Administrators
  - `local/ai_course_assistant:viewanalytics` - Academic Support, Administrators (RISK_PERSONAL)
  - `local/ai_course_assistant:manage` - Administrators only (RISK_CONFIG)

- **Capability Checks:** All endpoints verify user capabilities before executing
- **CSRF Protection:** Session key (`sesskey`) required for all state-changing operations
- **Context-Based:** Permissions checked at course/module context level

### 4. Rate Limiting

- **User-Based Limits:**
  - Default: 20 requests per 60 seconds per user per endpoint
  - Sliding window algorithm
  - Per-endpoint tracking

- **IP-Based Limits:**
  - Default: 100 requests per 60 seconds per IP per endpoint
  - Additional security layer against distributed attacks
  - IP hashing for privacy

- **Implementation:** Moodle cache API for distributed rate limiting
- **Response:** HTTP 429 (Too Many Requests) with Retry-After header

### 5. Input Validation and Sanitization

- **User Input:**
  - `PARAM_RAW` for message content (preserved for AI processing)
  - `PARAM_INT` for IDs
  - `PARAM_ALPHA` for actions
  - HTML output sanitization via Moodle's text output functions

- **SQL Injection Protection:** Moodle's database API with parameterized queries
- **XSS Protection:** All user-generated content escaped before display
- **Code Injection:** No `eval()` or dynamic code execution

### 6. Authentication and Authorization

- **Authentication:** Moodle's `require_login()` and `require_sesskey()`
- **Authorization:** Capability checks via `has_capability()` and `require_capability()`
- **Session Management:** Moodle's session manager with secure cookies
- **No Separate Login:** Integrates with Moodle's SSO/authentication system

### 7. Privacy and Data Protection (GDPR)

- **Privacy API:** Full implementation of Moodle's Privacy API
- **User Data Rights:**
  - Right to access (export)
  - Right to erasure (delete)
  - Right to data portability

- **Data Minimization:** Only necessary data is collected and stored
- **Purpose Limitation:** Data used only for educational AI tutoring
- **Student-Facing Controls:** User settings page for self-service data deletion

### 8. Performance and Availability

- **Caching:**
  - System prompts cached (1 hour TTL)
  - Rate limit data cached (2 minutes TTL)
  - Cache invalidation on course changes

- **Compression:** Gzip compression for SSE responses (if supported)
- **Database Optimization:**
  - Indexes on frequently queried fields
  - Efficient query design
  - Pagination for large result sets

- **Resource Limits:**
  - Maximum history: 20 message pairs (configurable)
  - System prompt truncation: 8000 characters
  - Request timeouts: 120 seconds

### 9. Error Handling and Logging

- **Error Disclosure:** Generic error messages to users, detailed logs for admins
- **Logging:** Moodle's debugging system (`debugging()`)
- **Graceful Degradation:** Failures don't expose sensitive information
- **Exception Handling:** Try-catch blocks around external API calls

### 10. Third-Party Service Security

- **AI Provider APIs:**
  - API keys stored encrypted
  - HTTPS-only connections
  - Error handling for service failures
  - No user data logged by default (provider-dependent)

- **Zendesk Integration:**
  - API key stored encrypted
  - HTTPS-only
  - Limited conversation summary shared

- **WhatsApp Integration:**
  - API key stored encrypted
  - Opt-in only
  - Country restrictions supported
  - Unsubscribe mechanism

## Security Best Practices for Administrators

### 1. Configuration

- Use strong, unique API keys for all external services
- Enable HTTPS/TLS on your Moodle server
- Configure appropriate off-topic limits and lockout duration
- Review and adjust rate limits based on your user base
- Enable audit logging and monitor regularly

### 2. Access Control

- Limit `manage` capability to trusted administrators
- Regularly review users with `viewanalytics` capability
- Use Moodle's role override system for fine-grained control

### 3. Monitoring

- Check audit logs regularly for suspicious activity
- Monitor rate limit violations
- Review off-topic lockouts for abuse patterns
- Track API usage and costs

### 4. Data Retention

- Implement a data retention policy aligned with your institution
- Use the audit log cleanup task (default: 365 days)
- Consider archiving old conversations if storage is a concern

### 5. Updates and Patching

- Keep Moodle core and all plugins up to date
- Subscribe to security announcements
- Test updates in a staging environment first

## Incident Response

### Security Incident

1. Isolate the affected system if necessary
2. Review audit logs for the timeframe
3. Identify compromised accounts or data
4. Change API keys if compromised
5. Notify affected users per GDPR requirements
6. Document the incident and remediation steps

### Data Breach

1. Immediately disable the plugin if necessary (`enabled` setting)
2. Secure all API keys and credentials
3. Review database access logs
4. Notify data protection officer
5. Follow institutional breach notification procedures
6. Conduct post-incident review

## Compliance Checklist

- [ ] HTTPS/TLS enabled on Moodle server
- [ ] API keys stored encrypted
- [ ] Audit logging enabled
- [ ] Rate limiting configured
- [ ] Data retention policy documented
- [ ] Privacy policy updated to include AI tutor
- [ ] User consent obtained (if required by jurisdiction)
- [ ] Administrator training completed
- [ ] Incident response plan documented
- [ ] Regular security reviews scheduled

## Contact

For security concerns or to report vulnerabilities:
- **Email:** [Your security contact]
- **GitHub:** https://github.com/[your-repo]/issues (for public, non-sensitive issues)

## References

- [Moodle Security Documentation](https://docs.moodle.org/en/Security)
- [GDPR Compliance](https://docs.moodle.org/en/GDPR)
- [SOC2 Framework](https://www.aicpa.org/interestareas/frc/assuranceadvisoryservices/sorhome)
