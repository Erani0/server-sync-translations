<?php

/**
 * Validate all translation files against the English reference.
 *
 * Checks that every translation file contains all keys from en/server-sync.php,
 * reports missing keys, extra keys, and empty values.
 *
 * Exit code 0 = all translations valid
 * Exit code 1 = one or more translations have issues
 */

$baseDir = __DIR__ . '/../../translations';
$referenceFile = $baseDir . '/en/server-sync.php';

if (!file_exists($referenceFile)) {
    echo "❌ Reference file not found: translations/en/server-sync.php\n";
    exit(1);
}

$reference = require $referenceFile;

/**
 * Recursively flatten a nested array into dot-notation keys.
 */
function flattenArray(array $array, string $prefix = ''): array
{
    $result = [];
    foreach ($array as $key => $value) {
        $fullKey = $prefix === '' ? (string) $key : $prefix . '.' . $key;
        if (is_array($value)) {
            $result = array_merge($result, flattenArray($value, $fullKey));
        } else {
            $result[$fullKey] = $value;
        }
    }
    return $result;
}

/**
 * Extract :placeholder variables from a translation string.
 */
function extractPlaceholders(string $value): array
{
    preg_match_all('/:([a-zA-Z_]+)/', $value, $matches);
    return $matches[0] ?? [];
}

$referenceKeys = flattenArray($reference);
$referenceKeyList = array_keys($referenceKeys);
$totalKeys = count($referenceKeyList);

echo "📋 Reference: en/server-sync.php ({$totalKeys} keys)\n";
echo str_repeat('─', 60) . "\n\n";

$languages = array_filter(glob($baseDir . '/*'), 'is_dir');
$hasErrors = false;
$checkedCount = 0;

foreach ($languages as $langDir) {
    $langCode = basename($langDir);

    // Skip the reference language
    if ($langCode === 'en') {
        continue;
    }

    $langFile = $langDir . '/server-sync.php';
    if (!file_exists($langFile)) {
        echo "⚠️  {$langCode}: server-sync.php not found — skipping\n";
        continue;
    }

    $checkedCount++;
    $translation = require $langFile;
    $translationKeys = flattenArray($translation);
    $translationKeyList = array_keys($translationKeys);

    $missing = array_diff($referenceKeyList, $translationKeyList);
    $extra = array_diff($translationKeyList, $referenceKeyList);

    // Check for empty values
    $empty = [];
    foreach ($translationKeys as $key => $value) {
        if (is_string($value) && trim($value) === '') {
            $empty[] = $key;
        }
    }

    // Check for missing placeholders
    $placeholderIssues = [];
    foreach ($referenceKeys as $key => $refValue) {
        if (!isset($translationKeys[$key]) || !is_string($refValue)) {
            continue;
        }
        $refPlaceholders = extractPlaceholders($refValue);
        if (empty($refPlaceholders)) {
            continue;
        }
        $transValue = $translationKeys[$key];
        if (!is_string($transValue)) {
            continue;
        }
        $transPlaceholders = extractPlaceholders($transValue);
        $missingPlaceholders = array_diff($refPlaceholders, $transPlaceholders);
        if (!empty($missingPlaceholders)) {
            $placeholderIssues[$key] = $missingPlaceholders;
        }
    }

    $langHasErrors = !empty($missing) || !empty($empty) || !empty($placeholderIssues);
    if ($langHasErrors) {
        $hasErrors = true;
    }

    $completionPercent = $totalKeys > 0
        ? round((($totalKeys - count($missing)) / $totalKeys) * 100, 1)
        : 100;

    $statusIcon = $langHasErrors ? '❌' : '✅';
    echo "{$statusIcon} {$langCode} — {$completionPercent}% complete ({$totalKeys} keys)\n";

    if (!empty($missing)) {
        echo "   Missing keys (" . count($missing) . "):\n";
        foreach ($missing as $key) {
            echo "     - {$key}\n";
        }
    }

    if (!empty($empty)) {
        echo "   Empty values (" . count($empty) . "):\n";
        foreach ($empty as $key) {
            echo "     - {$key}\n";
        }
    }

    if (!empty($placeholderIssues)) {
        echo "   Missing placeholders:\n";
        foreach ($placeholderIssues as $key => $placeholders) {
            echo "     - {$key}: missing " . implode(', ', $placeholders) . "\n";
        }
    }

    if (!empty($extra)) {
        echo "   Extra keys (not in reference — " . count($extra) . "):\n";
        foreach ($extra as $key) {
            echo "     - {$key}\n";
        }
    }

    echo "\n";
}

echo str_repeat('─', 60) . "\n";
echo "Checked {$checkedCount} translation(s) against {$totalKeys} reference keys.\n";

if ($hasErrors) {
    echo "\n❌ Some translations have issues. Please fix them before merging.\n";
    exit(1);
}

echo "\n✅ All translations are complete and valid!\n";
exit(0);
