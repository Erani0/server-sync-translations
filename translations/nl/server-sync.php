<?php

return [
    // Navigation & page titles
    'navigation' => 'Server Sync',
    'title' => 'Server Synchronisatie',
    'admin_title' => 'Sync Overzicht',
    'admin_description' => 'Beheer alle serversynchronisatieparen in uw panel.',

    // Directions
    'direction' => [
        'main_to_sub' => 'Hoofd → Sub',
        'sub_to_main' => 'Sub → Hoofd',
        'bidirectional' => 'Bidirectioneel',
        'label' => 'Synchronisatierichting',
        'description' => 'Kies in welke richting bestanden gesynchroniseerd moeten worden.',
    ],

    // Scope
    'scope' => [
        'full' => 'Volledige map',
        'paths' => 'Geselecteerde paden',
        'label' => 'Synchronisatiebereik',
        'description' => 'Kies of de hele servermap of alleen geselecteerde paden gesynchroniseerd moeten worden.',
    ],

    // Form labels
    'form' => [
        'main_server' => 'Hoofdserver',
        'main_server_description' => 'De primaire server. Bij unidirectionele sync is dit de bron.',
        'sub_server' => 'Subserver',
        'sub_server_description' => 'De secundaire server. Bij unidirectionele sync is dit het doel.',
        'sync_paths' => 'Synchronisatiepaden',
        'sync_paths_description' => 'Geef aan welke mappen of bestanden gesynchroniseerd moeten worden (één per regel). Voorbeeld: mods/, config/',
        'sync_paths_placeholder' => "mods/\nconfig/\nplugins/",
        'exclude_paths' => 'Uitgesloten paden',
        'exclude_paths_description' => 'Paden die uitgesloten worden van synchronisatie (één per regel). Voorbeeld: logs/, cache/',
        'exclude_paths_placeholder' => "logs/\ncache/\ntmp/",
        'interval' => 'Synchronisatie-interval (minuten)',
        'interval_description' => 'Hoe vaak de automatische synchronisatie moet worden uitgevoerd.',
        'enabled' => 'Synchronisatie inschakelen',
        'enabled_description' => 'Schakel automatische synchronisatie voor dit paar in of uit.',
    ],

    // Status labels
    'status' => [
        'success' => 'Geslaagd',
        'failed' => 'Mislukt',
        'running' => 'Actief',
        'partial' => 'Gedeeltelijk',
        'pending' => 'In afwachting',
        'disabled' => 'Uitgeschakeld',
        'never' => 'Nooit gesynchroniseerd',
    ],

    // Actions
    'actions' => [
        'sync_now' => 'Nu synchroniseren',
        'create_pair' => 'Synchronisatiepaar aanmaken',
        'edit_pair' => 'Synchronisatiepaar bewerken',
        'delete_pair' => 'Synchronisatiepaar verwijderen',
        'view_logs' => 'Logs bekijken',
        'manage' => 'Beheren',
        'confirm_delete' => 'Weet u zeker dat u dit synchronisatiepaar wilt verwijderen? Dit kan niet ongedaan worden gemaakt.',
        'confirm_sync' => 'Weet u zeker dat u nu een handmatige synchronisatie wilt starten?',
        'browse_excludes' => 'Bestanden bladeren en uitsluiten',
    ],

    // Table headers
    'table' => [
        'main_server' => 'Hoofdserver',
        'sub_server' => 'Subserver',
        'sync_pair' => 'Synchronisatiepaar',
        'direction' => 'Richting',
        'scope' => 'Bereik',
        'interval' => 'Interval',
        'last_sync' => 'Laatste sync',
        'status' => 'Status',
        'actions' => 'Acties',
        'files_synced' => 'Bestanden',
        'bytes_transferred' => 'Grootte',
        'duration' => 'Duur',
        'error' => 'Fout',
        'synced_at' => 'Gesynchroniseerd op',
        'sync_mode' => 'Synchronisatiemodus',
    ],

    // Messages
    'messages' => [
        'sync_started' => 'Synchronisatie is gestart.',
        'sync_started_background' => 'Synchronisatie is op de achtergrond gestart. U ontvangt een melding wanneer deze is voltooid.',
        'sync_completed' => 'Synchronisatie is succesvol voltooid.',
        'sync_failed' => 'Synchronisatie mislukt: :error',
        'sync_failed_title' => 'Synchronisatie mislukt',
        'sync_partial' => 'Synchronisatie gedeeltelijk voltooid',
        'sync_unknown_error' => 'Onbekende fout tijdens synchronisatie.',
        'pair_created' => 'Synchronisatiepaar is aangemaakt.',
        'pair_updated' => 'Synchronisatiepaar is bijgewerkt.',
        'pair_deleted' => 'Synchronisatiepaar is verwijderd.',
        'no_pairs' => 'Geen synchronisatieparen geconfigureerd voor deze server.',
        'no_pairs_hint' => 'Een beheerder kan synchronisatieparen instellen in het beheerderspaneel.',
        'server_offline' => 'Server is momenteel offline of niet beschikbaar.',
        'node_offline' => 'Node ":node" is onbereikbaar — server ":server" kan momenteel niet worden gesynchroniseerd.',
        'server_conflict' => 'Server heeft een conflictstatus (overdracht/herstel bezig).',
        'same_server' => 'Hoofdserver en subserver kunnen niet dezelfde zijn.',
        'different_egg' => 'Beide servers moeten hetzelfde Egg (servertype) gebruiken.',
        'pair_exists' => 'Er bestaat al een synchronisatiepaar tussen deze twee servers.',
        'limit_reached' => 'Server ":server" heeft het maximale aantal synchronisatieparen bereikt (:max).',
        'sync_disabled_for_server' => 'Server Sync is niet ingeschakeld voor server ":server" (limiet is 0).',
        'interval_too_low' => 'Het synchronisatie-interval moet minimaal :min minuten zijn.',
        'sync_already_running' => 'Er is al een synchronisatie actief voor dit paar.',
    ],

    // Permissions
    'permissions' => [
        'desc' => 'Rechten voor de Server Sync plugin — status bekijken, instellingen beheren en synchronisatie starten.',
        'view' => 'Synchronisatiestatus en logs bekijken',
        'manage' => 'Synchronisatiepaden en instellingen bewerken',
        'trigger' => 'Handmatige synchronisatie starten',
    ],

    // Settings
    'settings' => [
        'enforce_same_egg' => 'Zelfde Egg afdwingen',
        'enforce_same_egg_description' => 'Wanneer ingeschakeld kunnen alleen servers met hetzelfde Egg-type gekoppeld worden.',
        'max_pairs' => 'Max. paren per server',
        'max_pairs_description' => 'Maximaal aantal synchronisatieparen waaraan een server kan deelnemen.',
        'default_interval' => 'Standaardinterval (minuten)',
        'default_interval_description' => 'Standaard synchronisatie-interval voor nieuwe paren.',
        'min_interval' => 'Minimuminterval (minuten)',
        'min_interval_description' => 'Minimaal toegestaan synchronisatie-interval.',
        'max_file_size' => 'Max. archiefgrootte (MB)',
        'max_file_size_description' => 'Maximale grootte per synchronisatiearchief. Bij overschrijding worden bestanden automatisch in meerdere batches gesplitst.',
        'concurrent_limit' => 'Gelijktijdige synchronisatielimiet',
        'concurrent_limit_description' => 'Maximaal aantal synchronisaties dat gelijktijdig kan worden uitgevoerd.',
        'log_retention' => 'Logbewaring',
        'log_retention_description' => 'Hoe lang synchronisatielogs worden bewaard voordat ze automatisch worden opgeruimd.',
        'days' => 'dagen',
        'saved' => 'Instellingen zijn succesvol opgeslagen.',
    ],

    // Log details
    'log' => [
        'title' => 'Synchronisatielogs',
        'empty' => 'Geen synchronisatielogs gevonden.',
        'source' => 'Bron',
        'target' => 'Doel',
        'summary' => 'Samenvatting',
        'summary_synced' => ':files bestanden gesynchroniseerd (:size) in :duration',
        'summary_no_changes' => 'Geen wijzigingen gedetecteerd — alle bestanden zijn up-to-date',
        'summary_failed' => 'Mislukt: :error',
        'summary_running' => 'Synchronisatie bezig…',
        'synced_files' => 'Gesynchroniseerde bestanden',
        'no_file_details' => 'Geen bestandsdetails beschikbaar',
        'excluded_paths' => 'Uitgesloten paden',
        'no_excludes' => 'Geen uitsluitingen geconfigureerd',
        'view_details' => 'Details bekijken',
        'detail_title' => 'Synchronisatielog details',
        'detail_sync_info' => 'Synchronisatie-informatie',
        'detail_transfer' => 'Overdrachtsdetails',
    ],

    // Server Sync Limit (injected into server create/edit form)
    'server_limit' => [
        'title' => 'Server Sync limiet',
        'description' => 'Stel in aan hoeveel synchronisatieparen deze server kan deelnemen (als hoofd- of subserver). Stel in op 0 om Server Sync voor deze server volledig uit te schakelen.',
        'label' => 'Synchronisatiepaarlimiet',
        'helper' => 'Maximaal aantal synchronisatieparen waarvan deze server deel kan uitmaken. 0 = uitgeschakeld.',
    ],

    // Sync Mode
    'sync_mode' => [
        'label' => 'Synchronisatiemodus',
        'description' => 'Hoe bestandswijzigingen moeten worden toegepast.',
        'live' => 'Live',
        'on_restart' => 'Bij herstart',
        'live_description' => 'Bestanden worden onmiddellijk gesynchroniseerd terwijl servers actief zijn.',
        'on_restart_description' => 'Servers worden gestopt voor synchronisatie en daarna opnieuw gestart.',
    ],

    // Schedule integration
    'schedule' => [
        'task_name' => 'Server Sync',
        'create_schedule' => 'Synchronisatieschema aanmaken',
        'select_pair' => 'Synchronisatiepaar',
        'select_pair_description' => 'Selecteer het synchronisatiepaar dat deze geplande taak moet uitvoeren.',
        'schedule_name' => 'Schemanaam',
        'preset' => 'Interval',
        'preset_hourly' => 'Elk uur',
        'preset_every_6h' => 'Elke 6 uur',
        'preset_every_12h' => 'Elke 12 uur',
        'preset_daily' => 'Dagelijks om 00:00',
        'preset_daily_3am' => 'Dagelijks om 03:00',
        'mirror_to_partner' => 'Spiegelen naar partnerserver',
        'mirror_description' => 'Maak dit schema ook aan op de partnerserver, zodat beide servers samen stoppen, synchroniseren en herstarten.',
        'created' => 'Synchronisatieschema is succesvol aangemaakt.',
        'created_both' => 'Synchronisatieschema is op beide servers aangemaakt.',
    ],

    // File browser
    'file_browser' => [
        'title' => 'Serverbestanden bladeren',
        'current_excludes' => 'Uitgesloten paden',
        'current_excludes_help' => 'Deze paden zijn momenteel uitgesloten van synchronisatie. Klik op X om items te verwijderen, of gebruik de browser hieronder om nieuwe toe te voegen.',
        'navigate' => 'Mappen navigeren',
        'navigate_placeholder' => 'Selecteer een map om te openen...',
        'back' => 'Terug',
        'exclude_current' => 'Deze map uitsluiten',
        'excluded' => '(uitgesloten)',
        'current_path' => 'Huidig pad',
        'directory' => 'Map bladeren',
        'directory_help' => 'Voer een mappad in en druk op Tab om de inhoud te bekijken. Voorbeeld: mods/ of config/',
        'select_files' => 'Bestanden en mappen selecteren om uit te sluiten',
        'open_folder' => ':name openen',
        'save_excludes' => 'Uitsluitingen opslaan',
        'excludes_updated' => 'Uitsluitingslijst is succesvol bijgewerkt.',
    ],

    // User-facing create pair form
    'user_create' => [
        'section_title' => 'Synchronisatiepaar aanmaken',
        'section_description' => 'Stel een nieuw synchronisatiepaar in voor :server. Deze server heeft :free van :max sync-slots beschikbaar.',
        'partner_server' => 'Partnerserver',
        'partner_server_help' => 'Selecteer de server waarmee u wilt synchroniseren. Alleen servers waar u toegang toe heeft met beschikbare sync-slots worden getoond.',
        'slots_free' => 'beschikbaar',
    ],
];
