<?php

return [
    // Navigation & page titles
    'navigation' => 'Server Sync',
    'title' => 'Sincronizzazione Server',
    'admin_title' => 'Panoramica Sincronizzazione',
    'admin_description' => 'Gestisci tutte le coppie di sincronizzazione server nel tuo pannello.',

    // Directions
    'direction' => [
        'main_to_sub' => 'Principale → Secondario',
        'sub_to_main' => 'Secondario → Principale',
        'bidirectional' => 'Bidirezionale',
        'label' => 'Direzione Sincronizzazione',
        'description' => 'Scegli in quale direzione i file devono essere sincronizzati.',
    ],

    // Scope
    'scope' => [
        'full' => 'Directory Completa',
        'paths' => 'Percorsi Selezionati',
        'label' => 'Ambito Sincronizzazione',
        'description' => 'Scegli se sincronizzare l\'intera directory del server o solo percorsi selezionati.',
    ],

    // Form labels
    'form' => [
        'main_server' => 'Server Principale',
        'main_server_description' => 'Il server primario. Nella sincronizzazione unidirezionale, questo è l\'origine.',
        'sub_server' => 'Server Secondario',
        'sub_server_description' => 'Il server secondario. Nella sincronizzazione unidirezionale, questo è la destinazione.',
        'sync_paths' => 'Percorsi di Sincronizzazione',
        'sync_paths_description' => 'Specifica quali directory o file sincronizzare (uno per riga). Esempio: mods/, config/',
        'sync_paths_placeholder' => "mods/\nconfig/\nplugins/",
        'exclude_paths' => 'Percorsi Esclusi',
        'exclude_paths_description' => 'Percorsi da escludere dalla sincronizzazione (uno per riga). Esempio: logs/, cache/',
        'exclude_paths_placeholder' => "logs/\ncache/\ntmp/",
        'interval' => 'Intervallo di Sincronizzazione (minuti)',
        'interval_description' => 'Quanto spesso la sincronizzazione deve essere eseguita automaticamente.',
        'enabled' => 'Attiva Sincronizzazione',
        'enabled_description' => 'Attiva o disattiva la sincronizzazione automatica per questa coppia.',
    ],

    // Status labels
    'status' => [
        'success' => 'Completata',
        'failed' => 'Fallita',
        'running' => 'In Esecuzione',
        'partial' => 'Parziale',
        'pending' => 'In Attesa',
        'disabled' => 'Disattivata',
        'never' => 'Mai sincronizzato',
    ],

    // Actions
    'actions' => [
        'sync_now' => 'Sincronizza Ora',
        'create_pair' => 'Crea Coppia di Sincronizzazione',
        'edit_pair' => 'Modifica Coppia di Sincronizzazione',
        'delete_pair' => 'Elimina Coppia di Sincronizzazione',
        'view_logs' => 'Visualizza Registri',
        'manage' => 'Gestisci',
        'confirm_delete' => 'Sei sicuro di voler eliminare questa coppia di sincronizzazione? Questa azione non può essere annullata.',
        'confirm_sync' => 'Sei sicuro di voler avviare una sincronizzazione manuale adesso?',
        'browse_excludes' => 'Sfoglia ed Escludi File',
    ],

    // Table headers
    'table' => [
        'main_server' => 'Server Principale',
        'sub_server' => 'Server Secondario',
        'sync_pair' => 'Coppia di Sincronizzazione',
        'direction' => 'Direzione',
        'scope' => 'Ambito',
        'interval' => 'Intervallo',
        'last_sync' => 'Ultima Sincronizzazione',
        'status' => 'Stato',
        'actions' => 'Azioni',
        'files_synced' => 'File',
        'bytes_transferred' => 'Dimensione',
        'duration' => 'Durata',
        'error' => 'Errore',
        'synced_at' => 'Sincronizzato Il',
        'sync_mode' => 'Modalità di Sincronizzazione',
    ],

    // Messages
    'messages' => [
        'sync_started' => 'La sincronizzazione è stata avviata.',
        'sync_started_background' => 'Sincronizzazione avviata in background. Riceverai una notifica al completamento.',
        'sync_completed' => 'Sincronizzazione completata con successo.',
        'sync_failed' => 'Sincronizzazione fallita: :error',
        'sync_failed_title' => 'Sincronizzazione Fallita',
        'sync_partial' => 'Sincronizzazione completata parzialmente',
        'sync_unknown_error' => 'Errore sconosciuto durante la sincronizzazione.',
        'pair_created' => 'Coppia di sincronizzazione creata.',
        'pair_updated' => 'Coppia di sincronizzazione aggiornata.',
        'pair_deleted' => 'Coppia di sincronizzazione eliminata.',
        'no_pairs' => 'Nessuna coppia di sincronizzazione configurata per questo server.',
        'no_pairs_hint' => 'Un amministratore può configurare le coppie di sincronizzazione nel pannello di amministrazione.',
        'server_offline' => 'Il server è attualmente offline o non disponibile.',
        'node_offline' => 'Il nodo ":node" non è raggiungibile — il server ":server" non può essere sincronizzato in questo momento.',
        'server_conflict' => 'Il server è in uno stato di conflitto (trasferimento/ripristino in corso).',
        'same_server' => 'Il server principale e il server secondario non possono essere lo stesso.',
        'different_egg' => 'Entrambi i server devono utilizzare lo stesso egg (tipo di server).',
        'pair_exists' => 'Una coppia di sincronizzazione tra questi due server esiste già.',
        'limit_reached' => 'Il server ":server" ha raggiunto il numero massimo di coppie di sincronizzazione (:max).',
        'sync_disabled_for_server' => 'Server Sync non è abilitato per il server ":server" (il limite è 0).',
        'interval_too_low' => 'L\'intervallo di sincronizzazione deve essere almeno :min minuti.',
        'sync_already_running' => 'Una sincronizzazione è già in esecuzione per questa coppia.',
    ],

    // Permissions
    'permissions' => [
        'desc' => 'Permessi per il plugin Server Sync — visualizza lo stato, gestisci le impostazioni e avvia la sincronizzazione.',
        'view' => 'Visualizza stato e registri di sincronizzazione',
        'manage' => 'Modifica percorsi e impostazioni di sincronizzazione',
        'trigger' => 'Avvia sincronizzazione manuale',
    ],

    // Settings
    'settings' => [
        'enforce_same_egg' => 'Forza Stesso Egg',
        'enforce_same_egg_description' => 'Se attivato, solo server con lo stesso tipo di egg possono essere accoppiati.',
        'max_pairs' => 'Coppie Massime Per Server',
        'max_pairs_description' => 'Numero massimo di coppie di sincronizzazione a cui un singolo server può partecipare.',
        'default_interval' => 'Intervallo Predefinito (minuti)',
        'default_interval_description' => 'Intervallo di sincronizzazione predefinito per le nuove coppie.',
        'min_interval' => 'Intervallo Minimo (minuti)',
        'min_interval_description' => 'Intervallo di sincronizzazione minimo consentito.',
        'max_file_size' => 'Dimensione Massima Archivio (MB)',
        'max_file_size_description' => 'Dimensione massima per archivio di sincronizzazione. Se superata, i file vengono automaticamente suddivisi in più batch.',
        'concurrent_limit' => 'Limite Sincronizzazioni Simultanee',
        'concurrent_limit_description' => 'Numero massimo di sincronizzazioni che possono essere eseguite contemporaneamente.',
        'log_retention' => 'Conservazione Registri',
        'log_retention_description' => 'Per quanto tempo i registri di sincronizzazione vengono conservati prima della pulizia automatica.',
        'days' => 'giorni',
        'saved' => 'Impostazioni salvate con successo.',
    ],

    // Log details
    'log' => [
        'title' => 'Registri Sincronizzazione',
        'empty' => 'Nessun registro di sincronizzazione trovato.',
        'source' => 'Origine',
        'target' => 'Destinazione',
        'summary' => 'Riepilogo',
        'summary_synced' => ':files file sincronizzati (:size) in :duration',
        'summary_no_changes' => 'Nessuna modifica rilevata — tutti i file sono aggiornati',
        'summary_failed' => 'Fallito: :error',
        'summary_running' => 'Sincronizzazione in corso…',
        'synced_files' => 'File Sincronizzati',
        'no_file_details' => 'Nessun dettaglio file disponibile',
        'excluded_paths' => 'Percorsi Esclusi',
        'no_excludes' => 'Nessuna esclusione configurata',
        'view_details' => 'Visualizza Dettagli',
        'detail_title' => 'Dettagli Registro Sincronizzazione',
        'detail_sync_info' => 'Info Sincronizzazione',
        'detail_transfer' => 'Dettagli Trasferimento',
    ],

    // Server Sync Limit (injected into server create/edit form)
    'server_limit' => [
        'title' => 'Limite Server Sync',
        'description' => 'Imposta quante coppie di sincronizzazione questo server può avere (come principale o secondario). Imposta a 0 per disabilitare completamente Server Sync per questo server.',
        'label' => 'Limite Coppie di Sincronizzazione',
        'helper' => 'Numero massimo di coppie di sincronizzazione di cui questo server può far parte. 0 = disabilitato.',
    ],

    // Sync Mode
    'sync_mode' => [
        'label' => 'Modalità di Sincronizzazione',
        'description' => 'Come devono essere applicate le modifiche ai file.',
        'live' => 'Live',
        'on_restart' => 'Al Riavvio',
        'live_description' => 'I file vengono sincronizzati immediatamente mentre i server sono in esecuzione.',
        'on_restart_description' => 'I server vengono fermati prima della sincronizzazione e riavviati dopo.',
    ],

    // Schedule integration
    'schedule' => [
        'task_name' => 'Server Sync',
        'create_schedule' => 'Crea Pianificazione Sincronizzazione',
        'select_pair' => 'Coppia di Sincronizzazione',
        'select_pair_description' => 'Seleziona la coppia di sincronizzazione che questa attività pianificata deve eseguire.',
        'schedule_name' => 'Nome Pianificazione',
        'preset' => 'Intervallo',
        'preset_hourly' => 'Ogni ora',
        'preset_every_6h' => 'Ogni 6 ore',
        'preset_every_12h' => 'Ogni 12 ore',
        'preset_daily' => 'Giornaliero alle 00:00',
        'preset_daily_3am' => 'Giornaliero alle 03:00',
        'mirror_to_partner' => 'Replica sul Server Partner',
        'mirror_description' => 'Crea questa pianificazione anche sul server partner, in modo che entrambi i server si fermino, sincronizzino e riavviino insieme.',
        'created' => 'Pianificazione di sincronizzazione creata con successo.',
        'created_both' => 'Pianificazione di sincronizzazione creata su entrambi i server.',
    ],

    // File browser
    'file_browser' => [
        'title' => 'Sfoglia File del Server',
        'current_excludes' => 'Percorsi Esclusi',
        'current_excludes_help' => 'Questi percorsi sono attualmente esclusi dalla sincronizzazione. Fai clic su X per rimuovere le voci, o usa il browser qui sotto per aggiungerne di nuove.',
        'navigate' => 'Naviga Cartelle',
        'navigate_placeholder' => 'Seleziona una cartella da aprire...',
        'back' => 'Indietro',
        'exclude_current' => 'Escludi questa cartella',
        'excluded' => '(escluso)',
        'current_path' => 'Percorso attuale',
        'directory' => 'Sfoglia Directory',
        'directory_help' => 'Inserisci un percorso di directory e premi Tab per sfogliarne il contenuto. Esempio: mods/ o config/',
        'select_files' => 'Seleziona File e Cartelle da Escludere',
        'open_folder' => 'Apri :name',
        'save_excludes' => 'Salva Esclusioni',
        'excludes_updated' => 'Lista esclusioni aggiornata con successo.',
    ],

    // User-facing create pair form
    'user_create' => [
        'section_title' => 'Crea Coppia di Sincronizzazione',
        'section_description' => 'Configura una nuova coppia di sincronizzazione per :server. Questo server ha :free di :max slot di sincronizzazione disponibili.',
        'partner_server' => 'Server Partner',
        'partner_server_help' => 'Seleziona il server con cui vuoi sincronizzare. Vengono mostrati solo i server a cui hai accesso con slot di sincronizzazione disponibili.',
        'slots_free' => 'disponibili',
    ],
];
