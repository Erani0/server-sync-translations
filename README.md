# 🌍 Server Sync — Translations

Community translations for the **Server Sync** plugin for [Pelican Panel](https://pelican.dev).

## Available Translations

| Language | Code | Status | Contributor |
|----------|------|--------|-------------|
| 🇬🇧 English | `en` | ✅ Complete (official) | [@Erani0](https://github.com/Erani0) |
| 🇩🇪 German | `de-DE` | ✅ Complete (official) | [@Erani0](https://github.com/Erani0) |
| 🇸🇦 Arabic | `ar` | ❌ Missing | — |
| 🇧🇾 Belarusian | `be` | ❌ Missing | — |
| 🇧🇬 Bulgarian | `bg` | ❌ Missing | — |
| 🇨🇿 Czech | `cs` | ❌ Missing | — |
| 🇩🇰 Danish | `da` | ❌ Missing | — |
| 🇬🇷 Greek | `el` | ❌ Missing | — |
| 🇪🇸 Spanish | `es` | ❌ Missing | — |
| 🇫🇮 Finnish | `fi` | ❌ Missing | — |
| 🇫🇷 French | `fr` | ❌ Missing | — |
| 🇭🇺 Hungarian | `hu` | ❌ Missing | — |
| 🇮🇩 Indonesian | `id` | ❌ Missing | — |
| 🇮🇹 Italian | `it` | ❌ Missing | — |
| 🇯🇵 Japanese | `ja` | ❌ Missing | — |
| 🇰🇷 Korean | `ko` | ❌ Missing | — |
| 🇱🇹 Lithuanian | `lt` | ❌ Missing | — |
| 🇳🇱 Dutch | `nl` | ❌ Missing | — |
| 🇳🇴 Norwegian | `no` | ❌ Missing | — |
| 🇵🇱 Polish | `pl` | ❌ Missing | — |
| 🇵🇹 Portuguese | `pt` | ❌ Missing | — |
| 🇧🇷 Portuguese (Brazil) | `pt_BR` | ❌ Missing | — |
| 🇷🇴 Romanian | `ro` | ❌ Missing | — |
| 🇷🇺 Russian | `ru` | ❌ Missing | — |
| 🇸🇰 Slovak | `sk` | ❌ Missing | — |
| 🇷🇸 Serbian | `sr` | ❌ Missing | — |
| 🇸🇪 Swedish | `sv` | ❌ Missing | — |
| 🇹🇷 Turkish | `tr` | ❌ Missing | — |
| 🇺🇦 Ukrainian | `uk` | ❌ Missing | — |
| 🇻🇳 Vietnamese | `vi` | ❌ Missing | — |
| 🇨🇳 Chinese (Simplified) | `zh_CN` | ❌ Missing | — |
| 🇹🇼 Chinese (Traditional) | `zh_TW` | ❌ Missing | — |

## How to Contribute

1. **Fork** this repository
2. **Copy** `translations/en/server-sync.php` to `translations/<your-language-code>/server-sync.php`
3. **Translate** all values (keep the keys in English!)
4. **Submit** a Pull Request

### Language Codes

Use the same language codes as Pelican Panel (listed in the table above). The folder name must match exactly.

### Rules

- **Do not change array keys** — only translate the values
- **Keep all `:placeholder` variables** (e.g. `:error`, `:server`, `:files`) — they are replaced at runtime
- **Keep special characters** like `→`, `…`, `\n` as-is
- Every key that exists in `en/server-sync.php` must also exist in your translation
- A CI workflow will automatically validate your PR to ensure all keys are present

### Example

```php
// ✅ Correct — only the value is translated
'navigation' => 'Synchronisation du Serveur',

// ❌ Wrong — key was changed
'navigation_fr' => 'Synchronisation du Serveur',

// ❌ Wrong — placeholder removed
'sync_failed' => 'Synchronisation échouée',
// ✅ Correct — placeholder kept
'sync_failed' => 'Synchronisation échouée : :error',
```

## Installation

Copy your language folder into the plugin's `lang/` directory:

```
plugins/server-sync/lang/<language-code>/server-sync.php
```

Or use all translations at once:

```bash
# Clone this repo
git clone https://github.com/Erani0/server-sync-translations.git

# Copy all translations into the plugin
cp -r server-sync-translations/translations/* /var/www/pelican/plugins/server-sync/lang/
```

## Validation

Every Pull Request is automatically checked by a GitHub Actions workflow that:

1. Extracts all keys from the English reference file (`en/server-sync.php`)
2. Compares every translation file against the reference
3. Reports **missing keys** and **extra keys** that don't exist in the reference
4. Fails the PR check if any translation is incomplete

## License

MIT — Translations are contributed under the same license as the **Server Sync** plugin.
