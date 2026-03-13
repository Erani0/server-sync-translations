<?php

return [
    // Navigation & Seitentitel
    'navigation' => 'Server Sync',
    'title' => 'Server-Synchronisierung',
    'admin_title' => 'Sync Übersicht',
    'admin_description' => 'Verwalte alle Server-Synchronisierungspaare deines Panels.',

    // Richtungen
    'direction' => [
        'main_to_sub' => 'Main → Sub',
        'sub_to_main' => 'Sub → Main',
        'bidirectional' => 'Bidirektional',
        'label' => 'Sync-Richtung',
        'description' => 'Wähle die Richtung der Dateisynchronisierung.',
    ],

    // Umfang
    'scope' => [
        'full' => 'Gesamtes Verzeichnis',
        'paths' => 'Ausgewählte Pfade',
        'label' => 'Sync-Umfang',
        'description' => 'Wähle ob das komplette Serververzeichnis oder nur bestimmte Pfade synchronisiert werden sollen.',
    ],

    // Formularbeschriftungen
    'form' => [
        'main_server' => 'Hauptserver',
        'main_server_description' => 'Der primäre Server. Bei unidirektionalem Sync ist dies die Quelle.',
        'sub_server' => 'Nebenserver',
        'sub_server_description' => 'Der sekundäre Server. Bei unidirektionalem Sync ist dies das Ziel.',
        'sync_paths' => 'Sync-Pfade',
        'sync_paths_description' => 'Gib an, welche Verzeichnisse oder Dateien synchronisiert werden sollen (eine pro Zeile). Beispiel: mods/, config/',
        'sync_paths_placeholder' => "mods/\nconfig/\nplugins/",
        'exclude_paths' => 'Ausgeschlossene Pfade',
        'exclude_paths_description' => 'Pfade, die von der Synchronisierung ausgeschlossen werden sollen (eine pro Zeile). Beispiel: logs/, cache/',
        'exclude_paths_placeholder' => "logs/\ncache/\ntmp/",
        'interval' => 'Sync-Intervall (Minuten)',
        'interval_description' => 'Wie oft die automatische Synchronisierung ausgeführt werden soll.',
        'enabled' => 'Sync aktivieren',
        'enabled_description' => 'Automatische Synchronisierung für dieses Paar aktivieren oder deaktivieren.',
    ],

    // Status-Bezeichnungen
    'status' => [
        'success' => 'Erfolgreich',
        'failed' => 'Fehlgeschlagen',
        'running' => 'Läuft',
        'partial' => 'Teilweise',
        'pending' => 'Ausstehend',
        'disabled' => 'Deaktiviert',
        'never' => 'Noch nie synchronisiert',
    ],

    // Aktionen
    'actions' => [
        'sync_now' => 'Jetzt synchronisieren',
        'create_pair' => 'Sync-Paar erstellen',
        'edit_pair' => 'Sync-Paar bearbeiten',
        'delete_pair' => 'Sync-Paar löschen',
        'view_logs' => 'Protokoll anzeigen',
        'manage' => 'Verwalten',
        'confirm_delete' => 'Möchtest du dieses Sync-Paar wirklich löschen? Dies kann nicht rückgängig gemacht werden.',
        'confirm_sync' => 'Möchtest du jetzt eine manuelle Synchronisierung starten?',
        'browse_excludes' => 'Dateien durchsuchen & ausschließen',
    ],

    // Tabellenüberschriften
    'table' => [
        'main_server' => 'Hauptserver',
        'sub_server' => 'Nebenserver',
        'sync_pair' => 'Sync-Paar',
        'direction' => 'Richtung',
        'scope' => 'Umfang',
        'interval' => 'Intervall',
        'last_sync' => 'Letzter Sync',
        'status' => 'Status',
        'actions' => 'Aktionen',
        'files_synced' => 'Dateien',
        'bytes_transferred' => 'Größe',
        'duration' => 'Dauer',
        'error' => 'Fehler',
        'synced_at' => 'Synchronisiert am',
        'sync_mode' => 'Sync-Modus',
    ],

    // Meldungen
    'messages' => [
        'sync_started' => 'Synchronisierung wurde gestartet.',
        'sync_started_background' => 'Synchronisierung im Hintergrund gestartet. Du wirst benachrichtigt, wenn sie abgeschlossen ist.',
        'sync_completed' => 'Synchronisierung erfolgreich abgeschlossen.',
        'sync_failed' => 'Synchronisierung fehlgeschlagen: :error',
        'sync_failed_title' => 'Synchronisierung fehlgeschlagen',
        'sync_partial' => 'Synchronisierung teilweise abgeschlossen',
        'sync_unknown_error' => 'Unbekannter Fehler bei der Synchronisierung.',
        'pair_created' => 'Sync-Paar wurde erstellt.',
        'pair_updated' => 'Sync-Paar wurde aktualisiert.',
        'pair_deleted' => 'Sync-Paar wurde gelöscht.',
        'no_pairs' => 'Keine Sync-Paare für diesen Server konfiguriert.',
        'no_pairs_hint' => 'Ein Administrator kann Synchronisierungspaare im Admin-Panel einrichten.',
        'server_offline' => 'Server ist derzeit offline oder nicht erreichbar.',
        'node_offline' => 'Node ":node" ist nicht erreichbar — Server ":server" kann derzeit nicht synchronisiert werden.',
        'server_conflict' => 'Server befindet sich in einem Konfliktzustand (Transfer/Wiederherstellung läuft).',
        'same_server' => 'Haupt- und Nebenserver dürfen nicht identisch sein.',
        'different_egg' => 'Beide Server müssen den gleichen Ei-Typ (Servertyp) verwenden.',
        'pair_exists' => 'Ein Sync-Paar zwischen diesen beiden Servern existiert bereits.',
        'limit_reached' => 'Server ":server" hat die maximale Anzahl an Sync-Paaren erreicht (:max).',
        'sync_disabled_for_server' => 'Server Sync ist für Server ":server" nicht aktiviert (Limit ist 0).',
        'interval_too_low' => 'Das Sync-Intervall muss mindestens :min Minuten betragen.',
        'sync_already_running' => 'Eine Synchronisierung läuft bereits für dieses Paar.',
    ],

    // Berechtigungen
    'permissions' => [
        'desc' => 'Berechtigungen für das Server Sync Plugin — Status anzeigen, Einstellungen verwalten und Synchronisierung auslösen.',
        'view' => 'Sync-Status und Protokolle anzeigen',
        'manage' => 'Sync-Pfade und Einstellungen bearbeiten',
        'trigger' => 'Manuelle Synchronisierung auslösen',
    ],

    // Einstellungen
    'settings' => [
        'enforce_same_egg' => 'Gleicher Ei-Typ erforderlich',
        'enforce_same_egg_description' => 'Wenn aktiviert, können nur Server mit dem gleichen Ei-Typ gepaart werden.',
        'max_pairs' => 'Max. Paare pro Server',
        'max_pairs_description' => 'Maximale Anzahl an Sync-Paaren, an denen ein einzelner Server teilnehmen kann.',
        'default_interval' => 'Standard-Intervall (Minuten)',
        'default_interval_description' => 'Standard-Synchronisierungsintervall für neue Paare.',
        'min_interval' => 'Mindest-Intervall (Minuten)',
        'min_interval_description' => 'Minimal erlaubtes Synchronisierungsintervall.',
        'max_file_size' => 'Max. Archivgröße (MB)',
        'max_file_size_description' => 'Maximale Größe pro Sync-Archiv. Bei Überschreitung werden die Dateien automatisch in mehrere Batches aufgeteilt.',
        'concurrent_limit' => 'Gleichzeitige Sync-Grenze',
        'concurrent_limit_description' => 'Maximale Anzahl an Syncs, die gleichzeitig laufen können.',
        'log_retention' => 'Protokoll-Aufbewahrung',
        'log_retention_description' => 'Wie lange Sync-Protokolle aufbewahrt werden, bevor sie automatisch bereinigt werden.',
        'days' => 'Tage',
        'saved' => 'Einstellungen erfolgreich gespeichert.',
    ],

    // Protokoll-Details
    'log' => [
        'title' => 'Sync-Protokoll',
        'empty' => 'Keine Sync-Protokolle gefunden.',
        'source' => 'Quelle',
        'target' => 'Ziel',
        'summary' => 'Zusammenfassung',
        'summary_synced' => ':files Dateien synchronisiert (:size) in :duration',
        'summary_no_changes' => 'Keine Änderungen erkannt — alle Dateien aktuell',
        'summary_failed' => 'Fehlgeschlagen: :error',
        'summary_running' => 'Synchronisierung läuft…',
        'synced_files' => 'Synchronisierte Dateien',
        'no_file_details' => 'Keine Datei-Details verfügbar',
        'excluded_paths' => 'Ausgeschlossene Pfade',
        'no_excludes' => 'Keine Ausschlüsse konfiguriert',
        'view_details' => 'Details anzeigen',
        'detail_title' => 'Sync-Protokoll Details',
        'detail_sync_info' => 'Sync-Info',
        'detail_transfer' => 'Transfer-Details',
    ],

    // Server Sync Limit (wird in Server-Erstell-/Bearbeitungsformular eingefügt)
    'server_limit' => [
        'title' => 'Server Sync Limit',
        'description' => 'Lege fest, an wie vielen Sync-Paaren dieser Server teilnehmen kann (als Main oder Sub). Setze auf 0, um Server Sync für diesen Server vollständig zu deaktivieren.',
        'label' => 'Sync-Paar Limit',
        'helper' => 'Maximale Anzahl an Sync-Paaren, an denen dieser Server teilnehmen kann. 0 = deaktiviert.',
    ],

    // Sync-Modus
    'sync_mode' => [
        'label' => 'Sync-Modus',
        'description' => 'Wie Dateiänderungen angewendet werden sollen.',
        'live' => 'Live',
        'on_restart' => 'Bei Neustart',
        'live_description' => 'Dateien werden sofort synchronisiert, während die Server laufen.',
        'on_restart_description' => 'Server werden vor dem Sync gestoppt und danach neu gestartet.',
    ],

    // Zeitplan-Integration
    'schedule' => [
        'task_name' => 'Server Sync',
        'create_schedule' => 'Sync-Zeitplan erstellen',
        'select_pair' => 'Sync-Paar',
        'select_pair_description' => 'Wähle das Sync-Paar, das dieser Zeitplan-Task ausführen soll.',
        'schedule_name' => 'Zeitplan-Name',
        'preset' => 'Intervall',
        'preset_hourly' => 'Stündlich',
        'preset_every_6h' => 'Alle 6 Stunden',
        'preset_every_12h' => 'Alle 12 Stunden',
        'preset_daily' => 'Täglich um 00:00',
        'preset_daily_3am' => 'Täglich um 03:00',
        'mirror_to_partner' => 'Auf Partner-Server spiegeln',
        'mirror_description' => 'Erstelle diesen Zeitplan auch auf dem Partner-Server, damit beide Server gleichzeitig stoppen, synchronisieren und neu starten.',
        'created' => 'Sync-Zeitplan erfolgreich erstellt.',
        'created_both' => 'Sync-Zeitplan auf beiden Servern erstellt.',
    ],

    // Datei-Browser
    'file_browser' => [
        'title' => 'Server-Dateien durchsuchen',
        'current_excludes' => 'Ausgeschlossene Pfade',
        'current_excludes_help' => 'Diese Pfade sind derzeit vom Sync ausgeschlossen. Klicke X zum Entfernen, oder nutze den Browser unten zum Hinzuf\u00fcgen.',
        'navigate' => 'Ordner navigieren',
        'navigate_placeholder' => 'W\u00e4hle einen Ordner zum \u00d6ffnen...',
        'back' => 'Zur\u00fcck',
        'exclude_current' => 'Diesen Ordner ausschlie\u00dfen',
        'excluded' => '(ausgeschlossen)',
        'current_path' => 'Aktueller Pfad',
        'directory' => 'Verzeichnis durchsuchen',
        'directory_help' => 'Gib einen Verzeichnispfad ein und drücke Tab um den Inhalt zu durchsuchen. Beispiel: mods/ oder config/',
        'select_files' => 'Dateien & Ordner zum Ausschließen auswählen',
        'open_folder' => ':name öffnen',
        'save_excludes' => 'Ausschlüsse speichern',
        'excludes_updated' => 'Ausschlussliste erfolgreich aktualisiert.',
    ],

    // Benutzer-Erstellungsformular für Sync-Paare
    'user_create' => [
        'section_title' => 'Sync-Paar erstellen',
        'section_description' => 'Richte ein neues Synchronisierungspaar für :server ein. Dieser Server hat :free von :max Sync-Plätzen verfügbar.',
        'partner_server' => 'Partner-Server',
        'partner_server_help' => 'Wähle den Server, mit dem du synchronisieren möchtest. Nur Server, auf die du Zugriff hast und die freie Sync-Plätze haben, werden angezeigt.',
        'slots_free' => 'frei',
    ],
];
