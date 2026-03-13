<?php

/**
 * Automatically update the README.md translation table.
 *
 * Scans the translations/ directory, validates each language against the
 * English reference, determines completeness and contributor, then rewrites
 * the table rows in README.md.
 *
 * Triggered by the "Update README on merge" GitHub Action.
 */

$rootDir  = realpath(__DIR__ . '/../..');
$baseDir  = $rootDir . '/translations';
$readme   = $rootDir . '/README.md';
$refFile  = $baseDir . '/en/server-sync.php';

// ── Language metadata ────────────────────────────────────────────────────────
// Maps language code → [flag emoji, display name]
$languageMap = [
    'en'    => ['🇬🇧', 'English'],
    'de-DE' => ['🇩🇪', 'German'],
    'ar'    => ['🇸🇦', 'Arabic'],
    'be'    => ['🇧🇾', 'Belarusian'],
    'bg'    => ['🇧🇬', 'Bulgarian'],
    'cs'    => ['🇨🇿', 'Czech'],
    'da'    => ['🇩🇰', 'Danish'],
    'el'    => ['🇬🇷', 'Greek'],
    'es'    => ['🇪🇸', 'Spanish'],
    'fi'    => ['🇫🇮', 'Finnish'],
    'fr'    => ['🇫🇷', 'French'],
    'hu'    => ['🇭🇺', 'Hungarian'],
    'id'    => ['🇮🇩', 'Indonesian'],
    'it'    => ['🇮🇹', 'Italian'],
    'ja'    => ['🇯🇵', 'Japanese'],
    'ko'    => ['🇰🇷', 'Korean'],
    'lt'    => ['🇱🇹', 'Lithuanian'],
    'nl'    => ['🇳🇱', 'Dutch'],
    'no'    => ['🇳🇴', 'Norwegian'],
    'pl'    => ['🇵🇱', 'Polish'],
    'pt'    => ['🇵🇹', 'Portuguese'],
    'pt_BR' => ['🇧🇷', 'Portuguese (Brazil)'],
    'ro'    => ['🇷🇴', 'Romanian'],
    'ru'    => ['🇷🇺', 'Russian'],
    'sk'    => ['🇸🇰', 'Slovak'],
    'sr'    => ['🇷🇸', 'Serbian'],
    'sv'    => ['🇸🇪', 'Swedish'],
    'tr'    => ['🇹🇷', 'Turkish'],
    'uk'    => ['🇺🇦', 'Ukrainian'],
    'vi'    => ['🇻🇳', 'Vietnamese'],
    'zh_CN' => ['🇨🇳', 'Chinese (Simplified)'],
    'zh_TW' => ['🇹🇼', 'Chinese (Traditional)'],
];

// Official translations maintained by the plugin author
$officialLanguages = ['en', 'de-DE'];

// ── Helper functions ─────────────────────────────────────────────────────────

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
 * Get the GitHub username of the person who contributed a translation file.
 *
 * Strategy (in order):
 * 1. Extract from noreply GitHub email in git log
 * 2. Use GitHub API /repos/.../commits to get the author login (most reliable)
 * 3. Use GitHub search API to resolve email → username
 * 4. Fallback to git author name
 */
function getContributor(string $filePath): ?string
{
    $repoSlug = 'Erani0/server-sync-translations';

    // --- Step 1: Get git log info (author who first added the file) ---
    $cmd = sprintf(
        'git log --follow --diff-filter=A --format="%%an|%%ae|%%H" -- %s 2>/dev/null | head -1',
        escapeshellarg($filePath)
    );
    $output = trim(shell_exec($cmd) ?? '');

    if (empty($output)) {
        // Fallback: get last modifier
        $cmd = sprintf(
            'git log -1 --format="%%an|%%ae|%%H" -- %s 2>/dev/null',
            escapeshellarg($filePath)
        );
        $output = trim(shell_exec($cmd) ?? '');
    }

    if (empty($output)) {
        return null;
    }

    $parts = explode('|', $output, 3);
    $name  = $parts[0] ?? '';
    $email = $parts[1] ?? '';
    $sha   = $parts[2] ?? '';

    // --- Step 2: Check noreply email ---
    if (preg_match('/^(\d+\+)?([^@]+)@users\.noreply\.github\.com$/', $email, $m)) {
        return $m[2];
    }

    // --- Step 3: Use GitHub Commits API (most reliable on GitHub Actions) ---
    if (!empty($sha)) {
        $apiUrl = sprintf('https://api.github.com/repos/%s/commits/%s', $repoSlug, $sha);
        $headers = "User-Agent: server-sync-translations-bot\r\n";

        // Use GITHUB_TOKEN if available (GitHub Actions provides this automatically)
        $token = getenv('GITHUB_TOKEN');
        if ($token) {
            $headers .= "Authorization: Bearer {$token}\r\n";
        }

        $context = stream_context_create(['http' => [
            'header'  => $headers,
            'timeout' => 5,
        ]]);
        $response = @file_get_contents($apiUrl, false, $context);

        if ($response !== false) {
            $data = json_decode($response, true);
            // Check author login (the actual GitHub user who made the commit)
            if (!empty($data['author']['login'])) {
                return $data['author']['login'];
            }
            // Fallback: check committer (for merge commits)
            if (!empty($data['committer']['login']) && $data['committer']['login'] !== 'web-flow') {
                return $data['committer']['login'];
            }
        }
    }

    // --- Step 4: GitHub search API (email → username) ---
    if (!empty($email)) {
        $apiUrl = sprintf('https://api.github.com/search/users?q=%s+in:email', urlencode($email));
        $context = stream_context_create(['http' => [
            'header'  => "User-Agent: server-sync-translations-bot\r\n",
            'timeout' => 5,
        ]]);
        $response = @file_get_contents($apiUrl, false, $context);

        if ($response !== false) {
            $data = json_decode($response, true);
            if (!empty($data['items'][0]['login'])) {
                return $data['items'][0]['login'];
            }
        }
    }

    // --- Step 5: Fallback to author name ---
    return $name ?: null;
}

// ── Main logic ───────────────────────────────────────────────────────────────

if (!file_exists($refFile)) {
    echo "❌ Reference file not found: translations/en/server-sync.php\n";
    exit(1);
}

if (!file_exists($readme)) {
    echo "❌ README.md not found\n";
    exit(1);
}

$reference     = require $refFile;
$referenceKeys = array_keys(flattenArray($reference));
$totalKeys     = count($referenceKeys);

echo "📋 Reference: {$totalKeys} keys\n";

// Scan existing translation directories
$existingTranslations = [];
$langDirs = array_filter(glob($baseDir . '/*'), 'is_dir');

foreach ($langDirs as $langDir) {
    $code = basename($langDir);
    $file = $langDir . '/server-sync.php';

    if (!file_exists($file)) {
        continue;
    }

    $translation     = require $file;
    $translationKeys = array_keys(flattenArray($translation));
    $missing         = array_diff($referenceKeys, $translationKeys);
    $keyCount        = count($translationKeys) - count(array_diff($translationKeys, $referenceKeys));

    $existingTranslations[$code] = [
        'keys'     => $keyCount,
        'total'    => $totalKeys,
        'complete' => count($missing) === 0,
        'percent'  => round(($keyCount / $totalKeys) * 100),
    ];
}

// Build table rows
$tableRows = [];

foreach ($languageMap as $code => [$flag, $name]) {
    $isOfficial = in_array($code, $officialLanguages);

    if (isset($existingTranslations[$code])) {
        $info = $existingTranslations[$code];

        // Determine contributor
        $filePath    = "translations/{$code}/server-sync.php";
        $contributor = $isOfficial ? 'Erani0' : getContributor($rootDir . '/' . $filePath);

        $contributorText = $contributor
            ? "[@{$contributor}](https://github.com/{$contributor})"
            : '—';

        if ($info['complete']) {
            $status = $isOfficial
                ? '✅ Complete (official)'
                : '✅ Complete';
        } else {
            $status = "⚠️ {$info['percent']}% ({$info['keys']}/{$info['total']})";
        }
    } else {
        $status          = '❌ Missing';
        $contributorText = '—';
    }

    $tableRows[] = "| {$flag} {$name} | `{$code}` | {$status} | {$contributorText} |";
}

// Read current README — normalize to LF
$readmeContent = str_replace("\r\n", "\n", file_get_contents($readme));

// Find and replace the table
// Match from the header row to the last table row
$pattern = '/(\| Language \| Code \| Status \| Contributor \|\n\|[-| ]+\|\n)((?:\|.*\|\n)*)/';

if (!preg_match($pattern, $readmeContent, $matches)) {
    echo "❌ Could not find translation table in README.md\n";
    echo "DEBUG: First 500 chars around table:\n";
    $pos = strpos($readmeContent, '| Language');
    if ($pos !== false) {
        echo substr($readmeContent, $pos, 300) . "\n";
    } else {
        echo "Table header '| Language' not found at all!\n";
    }
    exit(1);
}

$tableHeader  = $matches[1];
$newTableBody = implode("\n", $tableRows) . "\n";

$readmeContent = preg_replace(
    $pattern,
    $tableHeader . $newTableBody,
    $readmeContent
);

file_put_contents($readme, $readmeContent);

// Summary
$completeCount = count(array_filter($existingTranslations, fn($t) => $t['complete']));
$partialCount  = count(array_filter($existingTranslations, fn($t) => !$t['complete']));
$missingCount  = count($languageMap) - count($existingTranslations);

echo "✅ README updated: {$completeCount} complete, {$partialCount} partial, {$missingCount} missing\n";
