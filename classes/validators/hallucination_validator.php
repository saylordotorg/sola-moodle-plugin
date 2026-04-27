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

namespace local_ai_course_assistant\validators;

/**
 * Flags numeric factual claims in AI output not grounded in context.
 *
 * Extracts years (1500-2099), percentages, and currency figures from
 * the AI response. For each token, requires that the same string also
 * appears in either the supplied RAG chunks or the learner's input.
 * Tokens that appear nowhere upstream are reported as potentially
 * hallucinated.
 *
 * Returns WARN, not FAIL: paraphrasing legitimately produces format
 * variations the literal-match check can't reconcile (e.g. AI says
 * "$5 million" when context says "5,000,000 USD"; AI says "47%" when
 * context says "47 percent"). The signal is useful but noisy enough
 * that production use should log the warning, not block delivery.
 *
 * No-op when context['rag_chunks'] is empty — without grounding
 * material the validator has nothing to compare against.
 *
 * @package    local_ai_course_assistant
 * @copyright  2025-2026 Tom Caswell & David Ta / Saylor University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class hallucination_validator implements validator_interface {

    private const RE_YEAR    = '/\b(?:1[5-9]\d{2}|20\d{2})\b/';
    private const RE_PERCENT = '/\b\d+(?:\.\d+)?\s?%/';
    private const RE_MONEY   = '/\$\d+(?:,\d{3})*(?:\.\d+)?(?:\s?(?:million|billion|trillion))?/i';

    public function name(): string {
        return 'hallucination';
    }

    public function validate(string $output, array $context = []): result {
        $chunks = $context['rag_chunks'] ?? [];
        if (empty($chunks)) {
            return result::pass($this->name(), ['skipped' => 'no_rag_chunks']);
        }

        $haystack = (string) ($context['input'] ?? '');
        foreach ($chunks as $chunk) {
            $haystack .= "\n" . (is_array($chunk) ? ((string) ($chunk['content'] ?? '')) : (string) $chunk);
        }
        $haystack = $this->normalize($haystack);

        $tokens = array_merge(
            $this->extract(self::RE_YEAR, $output),
            $this->extract(self::RE_PERCENT, $output),
            $this->extract(self::RE_MONEY, $output)
        );

        $unsupported = [];
        foreach (array_unique($tokens) as $tok) {
            if (stripos($haystack, $this->normalize($tok)) === false) {
                $unsupported[] = $tok;
            }
        }

        if (empty($unsupported)) {
            return result::pass($this->name());
        }

        $messages = [];
        foreach ($unsupported as $tok) {
            $messages[] = "Output contains '{$tok}' which does not appear in supplied context or input";
        }

        return result::warn($this->name(), $messages, ['unsupported' => $unsupported]);
    }

    private function extract(string $pattern, string $text): array {
        if ($text === '' || !preg_match_all($pattern, $text, $m)) {
            return [];
        }
        return $m[0];
    }

    private function normalize(string $s): string {
        return preg_replace('/\s+/', ' ', $s) ?? $s;
    }
}
