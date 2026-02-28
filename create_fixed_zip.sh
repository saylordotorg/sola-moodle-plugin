#!/bin/bash
# Create .zip for Moodle upload

echo "Creating ai_course_assistant.zip..."

SCRIPT_DIR="$(cd "$(dirname "$0")/.." && pwd)"
cd "$SCRIPT_DIR"
rm -f ai_course_assistant.zip
zip -r ai_course_assistant.zip ai_course_assistant/ \
  -x "*.git*" \
  -x "*/.DS_Store" \
  -x "*/Thumbs.db" \
  -x "*/create_fixed_zip.sh" \
  -x "*/TROUBLESHOOTING.md" \
  -x "*/ENHANCEMENT_ESTIMATE.md" \
  -x "*/SAYLOR_ACADEMY_PROPOSAL.md" \
  -x "*/amd/build/*.map"

echo "✅ Created: ${SCRIPT_DIR}/ai_course_assistant.zip"
echo ""
echo "Upload this to Moodle via:"
echo "Site admin → Plugins → Install plugins"
