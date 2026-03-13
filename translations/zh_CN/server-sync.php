<?php

return [
    // Navigation & page titles
    'navigation' => '服务器同步',
    'title' => '服务器同步',
    'admin_title' => '同步概览',
    'admin_description' => '管理面板中所有服务器的同步配对。',

    // Directions
    'direction' => [
        'main_to_sub' => '主服务器 → 子服务器',
        'sub_to_main' => '子服务器 → 主服务器',
        'bidirectional' => '双向同步',
        'label' => '同步方向',
        'description' => '选择文件同步的方向。',
    ],

    // Scope
    'scope' => [
        'full' => '完整目录',
        'paths' => '选定路径',
        'label' => '同步范围',
        'description' => '选择同步整个服务器目录还是仅同步选定的路径。',
    ],

    // Form labels
    'form' => [
        'main_server' => '主服务器',
        'main_server_description' => '主要服务器。在单向同步中，这是源服务器。',
        'sub_server' => '子服务器',
        'sub_server_description' => '次要服务器。在单向同步中，这是目标服务器。',
        'sync_paths' => '同步路径',
        'sync_paths_description' => '指定要同步的目录或文件（每行一个）。示例：mods/、config/',
        'sync_paths_placeholder' => "mods/\nconfig/\nplugins/",
        'exclude_paths' => '排除路径',
        'exclude_paths_description' => '要从同步中排除的路径（每行一个）。示例：logs/、cache/',
        'exclude_paths_placeholder' => "logs/\ncache/\ntmp/",
        'interval' => '同步间隔（分钟）',
        'interval_description' => '自动同步的执行频率。',
        'enabled' => '启用同步',
        'enabled_description' => '启用或禁用此同步配对的自动同步。',
    ],

    // Status labels
    'status' => [
        'success' => '成功',
        'failed' => '失败',
        'running' => '运行中',
        'partial' => '部分完成',
        'pending' => '等待中',
        'disabled' => '已禁用',
        'never' => '从未同步',
    ],

    // Actions
    'actions' => [
        'sync_now' => '立即同步',
        'create_pair' => '创建同步配对',
        'edit_pair' => '编辑同步配对',
        'delete_pair' => '删除同步配对',
        'view_logs' => '查看日志',
        'manage' => '管理',
        'confirm_delete' => '确定要删除此同步配对吗？此操作无法撤销。',
        'confirm_sync' => '确定要立即触发手动同步吗？',
        'browse_excludes' => '浏览并排除文件',
    ],

    // Table headers
    'table' => [
        'main_server' => '主服务器',
        'sub_server' => '子服务器',
        'sync_pair' => '同步配对',
        'direction' => '方向',
        'scope' => '范围',
        'interval' => '间隔',
        'last_sync' => '上次同步',
        'status' => '状态',
        'actions' => '操作',
        'files_synced' => '文件数',
        'bytes_transferred' => '大小',
        'duration' => '耗时',
        'error' => '错误',
        'synced_at' => '同步时间',
        'sync_mode' => '同步模式',
    ],

    // Messages
    'messages' => [
        'sync_started' => '同步已开始。',
        'sync_started_background' => '同步已在后台启动，完成后会通知您。',
        'sync_completed' => '同步已成功完成。',
        'sync_failed' => '同步失败：:error',
        'sync_failed_title' => '同步失败',
        'sync_partial' => '同步部分完成',
        'sync_unknown_error' => '同步过程中发生未知错误。',
        'pair_created' => '同步配对已创建。',
        'pair_updated' => '同步配对已更新。',
        'pair_deleted' => '同步配对已删除。',
        'no_pairs' => '此服务器未配置同步配对。',
        'no_pairs_hint' => '管理员可以在管理面板中设置同步配对。',
        'server_offline' => '服务器当前处于离线或不可用状态。',
        'node_offline' => '节点":node"不可达 — 服务器":server"目前无法同步。',
        'server_conflict' => '服务器处于冲突状态（正在进行迁移/恢复）。',
        'same_server' => '主服务器和子服务器不能是同一个。',
        'different_egg' => '两个服务器必须使用相同的 Egg（服务器类型）。',
        'pair_exists' => '这两个服务器之间已存在同步配对。',
        'limit_reached' => '服务器":server"已达到同步配对上限（:max）。',
        'sync_disabled_for_server' => '服务器":server"未启用 Server Sync（限制为 0）。',
        'interval_too_low' => '同步间隔至少需要 :min 分钟。',
        'sync_already_running' => '此配对的同步已在运行中。',
    ],

    // Permissions
    'permissions' => [
        'desc' => 'Server Sync 插件的权限 — 查看状态、管理设置和触发同步。',
        'view' => '查看同步状态和日志',
        'manage' => '编辑同步路径和设置',
        'trigger' => '触发手动同步',
    ],

    // Settings
    'settings' => [
        'enforce_same_egg' => '强制相同 Egg',
        'enforce_same_egg_description' => '启用后，只有使用相同 Egg 类型的服务器才能配对。',
        'max_pairs' => '每服务器最大配对数',
        'max_pairs_description' => '单个服务器可参与的最大同步配对数。',
        'default_interval' => '默认间隔（分钟）',
        'default_interval_description' => '新配对的默认同步间隔。',
        'min_interval' => '最小间隔（分钟）',
        'min_interval_description' => '允许的最小同步间隔。',
        'max_file_size' => '最大归档大小（MB）',
        'max_file_size_description' => '每次同步归档的最大大小。超过此限制时，文件将自动分批处理。',
        'concurrent_limit' => '并发同步限制',
        'concurrent_limit_description' => '可同时运行的最大同步数。',
        'log_retention' => '日志保留',
        'log_retention_description' => '同步日志在自动清理前的保留时间。',
        'days' => '天',
        'saved' => '设置已成功保存。',
    ],

    // Log details
    'log' => [
        'title' => '同步日志',
        'empty' => '未找到同步日志。',
        'source' => '源',
        'target' => '目标',
        'summary' => '摘要',
        'summary_synced' => '已同步 :files 个文件（:size），耗时 :duration',
        'summary_no_changes' => '未检测到更改 — 所有文件均为最新状态',
        'summary_failed' => '失败：:error',
        'summary_running' => '同步进行中…',
        'synced_files' => '已同步文件',
        'no_file_details' => '无可用的文件详情',
        'excluded_paths' => '排除的路径',
        'no_excludes' => '未配置排除项',
        'view_details' => '查看详情',
        'detail_title' => '同步日志详情',
        'detail_sync_info' => '同步信息',
        'detail_transfer' => '传输详情',
    ],

    // Server Sync Limit (injected into server create/edit form)
    'server_limit' => [
        'title' => 'Server Sync 限制',
        'description' => '设置此服务器可参与的同步配对数量（作为主服务器或子服务器）。设为 0 可完全禁用此服务器的 Server Sync。',
        'label' => '同步配对限制',
        'helper' => '此服务器可参与的最大同步配对数。0 = 已禁用。',
    ],

    // Sync Mode
    'sync_mode' => [
        'label' => '同步模式',
        'description' => '文件更改的应用方式。',
        'live' => '实时',
        'on_restart' => '重启时',
        'live_description' => '服务器运行时立即同步文件。',
        'on_restart_description' => '同步前停止服务器，同步后重新启动。',
    ],

    // Schedule integration
    'schedule' => [
        'task_name' => 'Server Sync',
        'create_schedule' => '创建同步计划',
        'select_pair' => '同步配对',
        'select_pair_description' => '选择此计划任务应执行的同步配对。',
        'schedule_name' => '计划名称',
        'preset' => '间隔',
        'preset_hourly' => '每小时',
        'preset_every_6h' => '每 6 小时',
        'preset_every_12h' => '每 12 小时',
        'preset_daily' => '每天 00:00',
        'preset_daily_3am' => '每天 03:00',
        'mirror_to_partner' => '镜像到伙伴服务器',
        'mirror_description' => '同时在伙伴服务器上创建此计划，使两台服务器一起停止、同步和重启。',
        'created' => '同步计划已成功创建。',
        'created_both' => '同步计划已在两台服务器上创建。',
    ],

    // File browser
    'file_browser' => [
        'title' => '浏览服务器文件',
        'current_excludes' => '排除的路径',
        'current_excludes_help' => '这些路径当前已被排除在同步之外。点击 X 可移除条目，或使用下方浏览器添加新的排除项。',
        'navigate' => '导航文件夹',
        'navigate_placeholder' => '选择要打开的文件夹...',
        'back' => '返回',
        'exclude_current' => '排除此文件夹',
        'excluded' => '（已排除）',
        'current_path' => '当前路径',
        'directory' => '浏览目录',
        'directory_help' => '输入目录路径并按 Tab 键浏览其内容。示例：mods/ 或 config/',
        'select_files' => '选择要排除的文件和文件夹',
        'open_folder' => '打开 :name',
        'save_excludes' => '保存排除项',
        'excludes_updated' => '排除列表已成功更新。',
    ],

    // User-facing create pair form
    'user_create' => [
        'section_title' => '创建同步配对',
        'section_description' => '为 :server 设置新的同步配对。此服务器有 :free / :max 个可用同步槽位。',
        'partner_server' => '伙伴服务器',
        'partner_server_help' => '选择要同步的服务器。仅显示您有权限访问且有可用同步槽位的服务器。',
        'slots_free' => '可用',
    ],
];
