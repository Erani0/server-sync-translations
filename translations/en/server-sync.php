<?php

return [
    // Navigation & page titles
    'navigation' => 'Server Sync',
    'title' => 'Server Synchronization',
    'admin_title' => 'Sync Overview',
    'admin_description' => 'Manage all server synchronization pairs across your panel.',

    // Directions
    'direction' => [
        'main_to_sub' => 'Main → Sub',
        'sub_to_main' => 'Sub → Main',
        'bidirectional' => 'Bidirectional',
        'label' => 'Sync Direction',
        'description' => 'Choose which direction files should be synchronized.',
    ],

    // Scope
    'scope' => [
        'full' => 'Full Directory',
        'paths' => 'Selected Paths',
        'label' => 'Sync Scope',
        'description' => 'Choose whether to sync the entire server directory or only selected paths.',
    ],

    // Form labels
    'form' => [
        'main_server' => 'Main Server',
        'main_server_description' => 'The primary server. In unidirectional sync, this is the source.',
        'sub_server' => 'Sub Server',
        'sub_server_description' => 'The secondary server. In unidirectional sync, this is the target.',
        'sync_paths' => 'Sync Paths',
        'sync_paths_description' => 'Specify which directories or files to synchronize (one per line). Example: mods/, config/',
        'sync_paths_placeholder' => "mods/\nconfig/\nplugins/",
        'exclude_paths' => 'Exclude Paths',
        'exclude_paths_description' => 'Paths to exclude from synchronization (one per line). Example: logs/, cache/',
        'exclude_paths_placeholder' => "logs/\ncache/\ntmp/",
        'interval' => 'Sync Interval (minutes)',
        'interval_description' => 'How often the synchronization should run automatically.',
        'enabled' => 'Enable Sync',
        'enabled_description' => 'Enable or disable automatic synchronization for this pair.',
    ],

    // Status labels
    'status' => [
        'success' => 'Success',
        'failed' => 'Failed',
        'running' => 'Running',
        'partial' => 'Partial',
        'pending' => 'Pending',
        'disabled' => 'Disabled',
        'never' => 'Never synced',
    ],

    // Actions
    'actions' => [
        'sync_now' => 'Sync Now',
        'create_pair' => 'Create Sync Pair',
        'edit_pair' => 'Edit Sync Pair',
        'delete_pair' => 'Delete Sync Pair',
        'view_logs' => 'View Logs',
        'manage' => 'Manage',
        'confirm_delete' => 'Are you sure you want to delete this sync pair? This cannot be undone.',
        'confirm_sync' => 'Are you sure you want to trigger a manual synchronization now?',
        'browse_excludes' => 'Browse & Exclude Files',
    ],

    // Table headers
    'table' => [
        'main_server' => 'Main Server',
        'sub_server' => 'Sub Server',
        'sync_pair' => 'Sync Pair',
        'direction' => 'Direction',
        'scope' => 'Scope',
        'interval' => 'Interval',
        'last_sync' => 'Last Sync',
        'status' => 'Status',
        'actions' => 'Actions',
        'files_synced' => 'Files',
        'bytes_transferred' => 'Size',
        'duration' => 'Duration',
        'error' => 'Error',
        'synced_at' => 'Synced At',
        'sync_mode' => 'Sync Mode',
    ],

    // Messages
    'messages' => [
        'sync_started' => 'Synchronization has been started.',
        'sync_started_background' => 'Synchronization started in background. You will be notified when it completes.',
        'sync_completed' => 'Synchronization completed successfully.',
        'sync_failed' => 'Synchronization failed: :error',
        'sync_failed_title' => 'Synchronization Failed',
        'sync_partial' => 'Synchronization partially completed',
        'sync_unknown_error' => 'Unknown error during synchronization.',
        'pair_created' => 'Sync pair has been created.',
        'pair_updated' => 'Sync pair has been updated.',
        'pair_deleted' => 'Sync pair has been deleted.',
        'no_pairs' => 'No sync pairs configured for this server.',
        'no_pairs_hint' => 'An administrator can set up synchronization pairs in the admin panel.',
        'server_offline' => 'Server is currently offline or unavailable.',
        'node_offline' => 'Node ":node" is unreachable — server ":server" cannot be synced right now.',
        'server_conflict' => 'Server is in a conflict state (transfer/restore in progress).',
        'same_server' => 'Main server and sub server cannot be the same.',
        'different_egg' => 'Both servers must use the same egg (server type).',
        'pair_exists' => 'A sync pair between these two servers already exists.',
        'limit_reached' => 'Server ":server" has reached the maximum number of sync pairs (:max).',
        'sync_disabled_for_server' => 'Server Sync is not enabled for server ":server" (limit is 0).',
        'interval_too_low' => 'Sync interval must be at least :min minutes.',
        'sync_already_running' => 'A synchronization is already running for this pair.',
    ],

    // Permissions
    'permissions' => [
        'desc' => 'Permissions for the Server Sync plugin — view status, manage settings, and trigger synchronization.',
        'view' => 'View sync status and logs',
        'manage' => 'Edit sync paths and settings',
        'trigger' => 'Trigger manual synchronization',
    ],

    // Settings
    'settings' => [
        'enforce_same_egg' => 'Enforce Same Egg',
        'enforce_same_egg_description' => 'When enabled, only servers with the same egg type can be paired.',
        'max_pairs' => 'Max Pairs Per Server',
        'max_pairs_description' => 'Maximum number of sync pairs a single server can participate in.',
        'default_interval' => 'Default Interval (minutes)',
        'default_interval_description' => 'Default synchronization interval for new pairs.',
        'min_interval' => 'Minimum Interval (minutes)',
        'min_interval_description' => 'Minimum allowed synchronization interval.',
        'max_file_size' => 'Max Archive Size (MB)',
        'max_file_size_description' => 'Maximum size per sync archive. When exceeded, files are automatically split into multiple batches.',
        'concurrent_limit' => 'Concurrent Sync Limit',
        'concurrent_limit_description' => 'Maximum number of syncs that can run simultaneously.',
        'log_retention' => 'Log Retention',
        'log_retention_description' => 'How long sync logs are kept before automatic cleanup.',
        'days' => 'days',
        'saved' => 'Settings saved successfully.',
    ],

    // Log details
    'log' => [
        'title' => 'Sync Logs',
        'empty' => 'No sync logs found.',
        'source' => 'Source',
        'target' => 'Target',
        'summary' => 'Summary',
        'summary_synced' => ':files files synced (:size) in :duration',
        'summary_no_changes' => 'No changes detected — all files up to date',
        'summary_failed' => 'Failed: :error',
        'summary_running' => 'Synchronization in progress…',
        'synced_files' => 'Synced Files',
        'no_file_details' => 'No file details available',
        'excluded_paths' => 'Excluded Paths',
        'no_excludes' => 'No excludes configured',
        'view_details' => 'View Details',
        'detail_title' => 'Sync Log Details',
        'detail_sync_info' => 'Sync Info',
        'detail_transfer' => 'Transfer Details',
    ],

    // Server Sync Limit (injected into server create/edit form)
    'server_limit' => [
        'title' => 'Server Sync Limit',
        'description' => 'Set how many sync pairs this server can participate in (as main or sub). Set to 0 to disable Server Sync for this server entirely.',
        'label' => 'Sync Pair Limit',
        'helper' => 'Maximum number of sync pairs this server can be part of. 0 = disabled.',
    ],

    // Sync Mode
    'sync_mode' => [
        'label' => 'Sync Mode',
        'description' => 'How file changes should be applied.',
        'live' => 'Live',
        'on_restart' => 'On Restart',
        'live_description' => 'Files are synced immediately while servers are running.',
        'on_restart_description' => 'Servers are stopped before syncing and restarted afterwards.',
    ],

    // Schedule integration
    'schedule' => [
        'task_name' => 'Server Sync',
        'create_schedule' => 'Create Sync Schedule',
        'select_pair' => 'Sync Pair',
        'select_pair_description' => 'Select the sync pair this schedule task should execute.',
        'schedule_name' => 'Schedule Name',
        'preset' => 'Interval',
        'preset_hourly' => 'Every hour',
        'preset_every_6h' => 'Every 6 hours',
        'preset_every_12h' => 'Every 12 hours',
        'preset_daily' => 'Daily at 00:00',
        'preset_daily_3am' => 'Daily at 03:00',
        'mirror_to_partner' => 'Mirror to Partner Server',
        'mirror_description' => 'Also create this schedule on the partner server, so both servers stop, sync, and restart together.',
        'created' => 'Sync schedule created successfully.',
        'created_both' => 'Sync schedule created on both servers.',
    ],

    // File browser
    'file_browser' => [
        'title' => 'Browse Server Files',
        'current_excludes' => 'Excluded Paths',
        'current_excludes_help' => 'These paths are currently excluded from sync. Click X to remove entries, or use the browser below to add new ones.',
        'navigate' => 'Navigate Folders',
        'navigate_placeholder' => 'Select a folder to open...',
        'back' => 'Back',
        'exclude_current' => 'Exclude this folder',
        'excluded' => '(excluded)',
        'current_path' => 'Current path',
        'directory' => 'Browse Directory',
        'directory_help' => 'Enter a directory path and press Tab to browse its contents. Example: mods/ or config/',
        'select_files' => 'Select Files & Folders to Exclude',
        'open_folder' => 'Open :name',
        'save_excludes' => 'Save Excludes',
        'excludes_updated' => 'Exclude list updated successfully.',
    ],

    // User-facing create pair form
    'user_create' => [
        'section_title' => 'Create Sync Pair',
        'section_description' => 'Set up a new synchronization pair for :server. This server has :free of :max sync slots available.',
        'partner_server' => 'Partner Server',
        'partner_server_help' => 'Select the server you want to sync with. Only servers you have access to with available sync slots are shown.',
        'slots_free' => 'free',
    ],
];
