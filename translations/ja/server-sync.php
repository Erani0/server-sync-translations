<?php

return [
    // Navigation & page titles
    'navigation' => 'Server Sync',
    'title' => 'サーバー同期',
    'admin_title' => '同期の概要',
    'admin_description' => 'パネル内のすべてのサーバー同期ペアを管理します。',

    // Directions
    'direction' => [
        'main_to_sub' => 'メイン → サブ',
        'sub_to_main' => 'サブ → メイン',
        'bidirectional' => '双方向',
        'label' => '同期方向',
        'description' => 'ファイルを同期する方向を選択します。',
    ],

    // Scope
    'scope' => [
        'full' => '完全ディレクトリ',
        'paths' => '選択パス',
        'label' => '同期範囲',
        'description' => 'サーバーディレクトリ全体を同期するか、選択したパスのみを同期するかを選択します。',
    ],

    // Form labels
    'form' => [
        'main_server' => 'メインサーバー',
        'main_server_description' => 'プライマリサーバー。一方向同期では、これがソースになります。',
        'sub_server' => 'サブサーバー',
        'sub_server_description' => 'セカンダリサーバー。一方向同期では、これがターゲットになります。',
        'sync_paths' => '同期パス',
        'sync_paths_description' => '同期するディレクトリまたはファイルを指定します（1行に1つ）。例：mods/、config/',
        'sync_paths_placeholder' => "mods/\nconfig/\nplugins/",
        'exclude_paths' => '除外パス',
        'exclude_paths_description' => '同期から除外するパス（1行に1つ）。例：logs/、cache/',
        'exclude_paths_placeholder' => "logs/\ncache/\ntmp/",
        'interval' => '同期間隔（分）',
        'interval_description' => '自動同期の実行頻度。',
        'enabled' => '同期を有効にする',
        'enabled_description' => 'このペアの自動同期を有効または無効にします。',
    ],

    // Status labels
    'status' => [
        'success' => '成功',
        'failed' => '失敗',
        'running' => '実行中',
        'partial' => '部分的',
        'pending' => '保留中',
        'disabled' => '無効',
        'never' => '同期されたことがありません',
    ],

    // Actions
    'actions' => [
        'sync_now' => '今すぐ同期',
        'create_pair' => '同期ペアを作成',
        'edit_pair' => '同期ペアを編集',
        'delete_pair' => '同期ペアを削除',
        'view_logs' => 'ログを表示',
        'manage' => '管理',
        'confirm_delete' => 'この同期ペアを削除してもよろしいですか？この操作は元に戻せません。',
        'confirm_sync' => '今すぐ手動同期を開始してもよろしいですか？',
        'browse_excludes' => 'ファイルを参照して除外',
    ],

    // Table headers
    'table' => [
        'main_server' => 'メインサーバー',
        'sub_server' => 'サブサーバー',
        'sync_pair' => '同期ペア',
        'direction' => '方向',
        'scope' => '範囲',
        'interval' => '間隔',
        'last_sync' => '最終同期',
        'status' => 'ステータス',
        'actions' => 'アクション',
        'files_synced' => 'ファイル',
        'bytes_transferred' => 'サイズ',
        'duration' => '所要時間',
        'error' => 'エラー',
        'synced_at' => '同期日時',
        'sync_mode' => '同期モード',
    ],

    // Messages
    'messages' => [
        'sync_started' => '同期が開始されました。',
        'sync_started_background' => '同期がバックグラウンドで開始されました。完了時に通知されます。',
        'sync_completed' => '同期が正常に完了しました。',
        'sync_failed' => '同期に失敗しました：:error',
        'sync_failed_title' => '同期失敗',
        'sync_partial' => '同期が部分的に完了しました',
        'sync_unknown_error' => '同期中に不明なエラーが発生しました。',
        'pair_created' => '同期ペアが作成されました。',
        'pair_updated' => '同期ペアが更新されました。',
        'pair_deleted' => '同期ペアが削除されました。',
        'no_pairs' => 'このサーバーに設定された同期ペアはありません。',
        'no_pairs_hint' => '管理者が管理パネルで同期ペアを設定できます。',
        'server_offline' => 'サーバーは現在オフラインまたは利用不可です。',
        'node_offline' => 'ノード ":node" に接続できません — サーバー ":server" は現在同期できません。',
        'server_conflict' => 'サーバーが競合状態です（転送/復元が進行中）。',
        'same_server' => 'メインサーバーとサブサーバーを同じにすることはできません。',
        'different_egg' => '両方のサーバーは同じエッグ（サーバータイプ）を使用する必要があります。',
        'pair_exists' => 'これらの2つのサーバー間の同期ペアは既に存在します。',
        'limit_reached' => 'サーバー ":server" は同期ペアの最大数（:max）に達しました。',
        'sync_disabled_for_server' => 'サーバー ":server" ではServer Syncが有効になっていません（制限は0）。',
        'interval_too_low' => '同期間隔は少なくとも :min 分必要です。',
        'sync_already_running' => 'このペアの同期はすでに実行中です。',
    ],

    // Permissions
    'permissions' => [
        'desc' => 'Server Syncプラグインの権限 — ステータスの表示、設定の管理、同期の開始。',
        'view' => '同期ステータスとログを表示',
        'manage' => '同期パスと設定を編集',
        'trigger' => '手動同期を開始',
    ],

    // Settings
    'settings' => [
        'enforce_same_egg' => '同じエッグを強制',
        'enforce_same_egg_description' => '有効にすると、同じエッグタイプのサーバーのみをペアリングできます。',
        'max_pairs' => 'サーバーあたりの最大ペア数',
        'max_pairs_description' => '1台のサーバーが参加できる同期ペアの最大数。',
        'default_interval' => 'デフォルト間隔（分）',
        'default_interval_description' => '新しいペアのデフォルト同期間隔。',
        'min_interval' => '最小間隔（分）',
        'min_interval_description' => '許可される最小の同期間隔。',
        'max_file_size' => '最大アーカイブサイズ（MB）',
        'max_file_size_description' => '同期アーカイブあたりの最大サイズ。超過すると、ファイルは自動的に複数のバッチに分割されます。',
        'concurrent_limit' => '同時同期制限',
        'concurrent_limit_description' => '同時に実行できる同期の最大数。',
        'log_retention' => 'ログ保持期間',
        'log_retention_description' => '自動クリーンアップ前に同期ログが保持される期間。',
        'days' => '日',
        'saved' => '設定が正常に保存されました。',
    ],

    // Log details
    'log' => [
        'title' => '同期ログ',
        'empty' => '同期ログが見つかりません。',
        'source' => 'ソース',
        'target' => 'ターゲット',
        'summary' => '概要',
        'summary_synced' => ':files ファイルが同期されました（:size）、所要時間：:duration',
        'summary_no_changes' => '変更は検出されませんでした — すべてのファイルは最新です',
        'summary_failed' => '失敗：:error',
        'summary_running' => '同期進行中…',
        'synced_files' => '同期済みファイル',
        'no_file_details' => 'ファイルの詳細はありません',
        'excluded_paths' => '除外パス',
        'no_excludes' => '除外は設定されていません',
        'view_details' => '詳細を表示',
        'detail_title' => '同期ログ詳細',
        'detail_sync_info' => '同期情報',
        'detail_transfer' => '転送詳細',
    ],

    // Server Sync Limit (injected into server create/edit form)
    'server_limit' => [
        'title' => 'Server Sync制限',
        'description' => 'このサーバーが参加できる同期ペア数を設定します（メインまたはサブとして）。0に設定すると完全に無効になります。',
        'label' => '同期ペア制限',
        'helper' => 'このサーバーが参加できる同期ペアの最大数。0 = 無効。',
    ],

    // Sync Mode
    'sync_mode' => [
        'label' => '同期モード',
        'description' => 'ファイルの変更をどのように適用するか。',
        'live' => 'ライブ',
        'on_restart' => '再起動時',
        'live_description' => 'サーバーの稼働中にファイルが即座に同期されます。',
        'on_restart_description' => '同期前にサーバーが停止され、その後再起動されます。',
    ],

    // Schedule integration
    'schedule' => [
        'task_name' => 'Server Sync',
        'create_schedule' => '同期スケジュールを作成',
        'select_pair' => '同期ペア',
        'select_pair_description' => 'このスケジュールタスクが実行する同期ペアを選択します。',
        'schedule_name' => 'スケジュール名',
        'preset' => '間隔',
        'preset_hourly' => '毎時',
        'preset_every_6h' => '6時間ごと',
        'preset_every_12h' => '12時間ごと',
        'preset_daily' => '毎日 00:00',
        'preset_daily_3am' => '毎日 03:00',
        'mirror_to_partner' => 'パートナーサーバーにミラーリング',
        'mirror_description' => 'パートナーサーバーにもこのスケジュールを作成し、両方のサーバーが一緒に停止、同期、再起動します。',
        'created' => '同期スケジュールが正常に作成されました。',
        'created_both' => '両方のサーバーに同期スケジュールが作成されました。',
    ],

    // File browser
    'file_browser' => [
        'title' => 'サーバーファイルを参照',
        'current_excludes' => '除外パス',
        'current_excludes_help' => 'これらのパスは現在同期から除外されています。Xをクリックしてエントリを削除するか、下のブラウザを使用して新しいものを追加します。',
        'navigate' => 'フォルダを移動',
        'navigate_placeholder' => '開くフォルダを選択してください...',
        'back' => '戻る',
        'exclude_current' => 'このフォルダを除外',
        'excluded' => '（除外済み）',
        'current_path' => '現在のパス',
        'directory' => 'ディレクトリを参照',
        'directory_help' => 'ディレクトリパスを入力してTabを押すと内容を参照できます。例：mods/ または config/',
        'select_files' => '除外するファイルとフォルダを選択',
        'open_folder' => ':name を開く',
        'save_excludes' => '除外を保存',
        'excludes_updated' => '除外リストが正常に更新されました。',
    ],

    // User-facing create pair form
    'user_create' => [
        'section_title' => '同期ペアを作成',
        'section_description' => ':server の新しい同期ペアを設定します。このサーバーには :max スロット中 :free スロットが利用可能です。',
        'partner_server' => 'パートナーサーバー',
        'partner_server_help' => '同期するサーバーを選択します。アクセス権があり、同期スロットが利用可能なサーバーのみが表示されます。',
        'slots_free' => '利用可能',
    ],
];
