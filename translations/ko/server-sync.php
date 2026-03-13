<?php

return [
    // Navigation & page titles
    'navigation' => 'Server Sync',
    'title' => '서버 동기화',
    'admin_title' => '동기화 개요',
    'admin_description' => '패널의 모든 서버 동기화 쌍을 관리합니다.',

    // Directions
    'direction' => [
        'main_to_sub' => '메인 → 서브',
        'sub_to_main' => '서브 → 메인',
        'bidirectional' => '양방향',
        'label' => '동기화 방향',
        'description' => '파일을 동기화할 방향을 선택하세요.',
    ],

    // Scope
    'scope' => [
        'full' => '전체 디렉토리',
        'paths' => '선택된 경로',
        'label' => '동기화 범위',
        'description' => '서버 디렉토리 전체를 동기화할지 선택한 경로만 동기화할지 선택하세요.',
    ],

    // Form labels
    'form' => [
        'main_server' => '메인 서버',
        'main_server_description' => '기본 서버입니다. 단방향 동기화에서는 소스가 됩니다.',
        'sub_server' => '서브 서버',
        'sub_server_description' => '보조 서버입니다. 단방향 동기화에서는 대상이 됩니다.',
        'sync_paths' => '동기화 경로',
        'sync_paths_description' => '동기화할 디렉토리 또는 파일을 지정하세요 (줄당 하나). 예: mods/, config/',
        'sync_paths_placeholder' => "mods/\nconfig/\nplugins/",
        'exclude_paths' => '제외 경로',
        'exclude_paths_description' => '동기화에서 제외할 경로 (줄당 하나). 예: logs/, cache/',
        'exclude_paths_placeholder' => "logs/\ncache/\ntmp/",
        'interval' => '동기화 간격 (분)',
        'interval_description' => '자동 동기화 실행 빈도.',
        'enabled' => '동기화 활성화',
        'enabled_description' => '이 쌍의 자동 동기화를 활성화하거나 비활성화합니다.',
    ],

    // Status labels
    'status' => [
        'success' => '성공',
        'failed' => '실패',
        'running' => '실행 중',
        'partial' => '부분적',
        'pending' => '대기 중',
        'disabled' => '비활성화',
        'never' => '동기화된 적 없음',
    ],

    // Actions
    'actions' => [
        'sync_now' => '지금 동기화',
        'create_pair' => '동기화 쌍 생성',
        'edit_pair' => '동기화 쌍 편집',
        'delete_pair' => '동기화 쌍 삭제',
        'view_logs' => '로그 보기',
        'manage' => '관리',
        'confirm_delete' => '이 동기화 쌍을 삭제하시겠습니까? 이 작업은 되돌릴 수 없습니다.',
        'confirm_sync' => '지금 수동 동기화를 시작하시겠습니까?',
        'browse_excludes' => '파일 찾아보기 및 제외',
    ],

    // Table headers
    'table' => [
        'main_server' => '메인 서버',
        'sub_server' => '서브 서버',
        'sync_pair' => '동기화 쌍',
        'direction' => '방향',
        'scope' => '범위',
        'interval' => '간격',
        'last_sync' => '마지막 동기화',
        'status' => '상태',
        'actions' => '작업',
        'files_synced' => '파일',
        'bytes_transferred' => '크기',
        'duration' => '소요 시간',
        'error' => '오류',
        'synced_at' => '동기화 일시',
        'sync_mode' => '동기화 모드',
    ],

    // Messages
    'messages' => [
        'sync_started' => '동기화가 시작되었습니다.',
        'sync_started_background' => '동기화가 백그라운드에서 시작되었습니다. 완료되면 알림을 받게 됩니다.',
        'sync_completed' => '동기화가 성공적으로 완료되었습니다.',
        'sync_failed' => '동기화 실패: :error',
        'sync_failed_title' => '동기화 실패',
        'sync_partial' => '동기화가 부분적으로 완료되었습니다',
        'sync_unknown_error' => '동기화 중 알 수 없는 오류가 발생했습니다.',
        'pair_created' => '동기화 쌍이 생성되었습니다.',
        'pair_updated' => '동기화 쌍이 업데이트되었습니다.',
        'pair_deleted' => '동기화 쌍이 삭제되었습니다.',
        'no_pairs' => '이 서버에 구성된 동기화 쌍이 없습니다.',
        'no_pairs_hint' => '관리자가 관리 패널에서 동기화 쌍을 설정할 수 있습니다.',
        'server_offline' => '서버가 현재 오프라인이거나 사용할 수 없습니다.',
        'node_offline' => '노드 ":node"에 연결할 수 없습니다 — 서버 ":server"를 지금 동기화할 수 없습니다.',
        'server_conflict' => '서버가 충돌 상태입니다 (전송/복원 진행 중).',
        'same_server' => '메인 서버와 서브 서버는 같을 수 없습니다.',
        'different_egg' => '두 서버 모두 동일한 에그 (서버 유형)를 사용해야 합니다.',
        'pair_exists' => '이 두 서버 간의 동기화 쌍이 이미 존재합니다.',
        'limit_reached' => '서버 ":server"가 최대 동기화 쌍 수 (:max)에 도달했습니다.',
        'sync_disabled_for_server' => '서버 ":server"에 대해 Server Sync가 활성화되지 않았습니다 (제한: 0).',
        'interval_too_low' => '동기화 간격은 최소 :min 분이어야 합니다.',
        'sync_already_running' => '이 쌍에 대한 동기화가 이미 실행 중입니다.',
    ],

    // Permissions
    'permissions' => [
        'desc' => 'Server Sync 플러그인 권한 — 상태 보기, 설정 관리, 동기화 시작.',
        'view' => '동기화 상태 및 로그 보기',
        'manage' => '동기화 경로 및 설정 편집',
        'trigger' => '수동 동기화 시작',
    ],

    // Settings
    'settings' => [
        'enforce_same_egg' => '동일 에그 강제',
        'enforce_same_egg_description' => '활성화하면 동일한 에그 유형의 서버만 페어링할 수 있습니다.',
        'max_pairs' => '서버당 최대 쌍 수',
        'max_pairs_description' => '단일 서버가 참여할 수 있는 최대 동기화 쌍 수.',
        'default_interval' => '기본 간격 (분)',
        'default_interval_description' => '새 쌍의 기본 동기화 간격.',
        'min_interval' => '최소 간격 (분)',
        'min_interval_description' => '허용되는 최소 동기화 간격.',
        'max_file_size' => '최대 아카이브 크기 (MB)',
        'max_file_size_description' => '동기화 아카이브당 최대 크기. 초과 시 파일이 자동으로 여러 배치로 분할됩니다.',
        'concurrent_limit' => '동시 동기화 제한',
        'concurrent_limit_description' => '동시에 실행할 수 있는 최대 동기화 수.',
        'log_retention' => '로그 보존 기간',
        'log_retention_description' => '자동 정리 전 동기화 로그 보존 기간.',
        'days' => '일',
        'saved' => '설정이 성공적으로 저장되었습니다.',
    ],

    // Log details
    'log' => [
        'title' => '동기화 로그',
        'empty' => '동기화 로그를 찾을 수 없습니다.',
        'source' => '소스',
        'target' => '대상',
        'summary' => '요약',
        'summary_synced' => ':files 파일 동기화됨 (:size), 소요 시간: :duration',
        'summary_no_changes' => '변경 사항이 감지되지 않았습니다 — 모든 파일이 최신입니다',
        'summary_failed' => '실패: :error',
        'summary_running' => '동기화 진행 중…',
        'synced_files' => '동기화된 파일',
        'no_file_details' => '파일 세부정보가 없습니다',
        'excluded_paths' => '제외된 경로',
        'no_excludes' => '구성된 제외 항목 없음',
        'view_details' => '세부정보 보기',
        'detail_title' => '동기화 로그 세부정보',
        'detail_sync_info' => '동기화 정보',
        'detail_transfer' => '전송 세부정보',
    ],

    // Server Sync Limit (injected into server create/edit form)
    'server_limit' => [
        'title' => 'Server Sync 제한',
        'description' => '이 서버가 참여할 수 있는 동기화 쌍 수를 설정합니다 (메인 또는 서브). 0으로 설정하면 완전히 비활성화됩니다.',
        'label' => '동기화 쌍 제한',
        'helper' => '이 서버가 참여할 수 있는 최대 동기화 쌍 수. 0 = 비활성화.',
    ],

    // Sync Mode
    'sync_mode' => [
        'label' => '동기화 모드',
        'description' => '파일 변경 사항을 적용하는 방법.',
        'live' => '실시간',
        'on_restart' => '재시작 시',
        'live_description' => '서버가 실행 중일 때 파일이 즉시 동기화됩니다.',
        'on_restart_description' => '동기화 전에 서버가 중지되고 이후 재시작됩니다.',
    ],

    // Schedule integration
    'schedule' => [
        'task_name' => 'Server Sync',
        'create_schedule' => '동기화 일정 생성',
        'select_pair' => '동기화 쌍',
        'select_pair_description' => '이 예약 작업이 실행할 동기화 쌍을 선택하세요.',
        'schedule_name' => '일정 이름',
        'preset' => '간격',
        'preset_hourly' => '매시간',
        'preset_every_6h' => '6시간마다',
        'preset_every_12h' => '12시간마다',
        'preset_daily' => '매일 00:00',
        'preset_daily_3am' => '매일 03:00',
        'mirror_to_partner' => '파트너 서버에 미러링',
        'mirror_description' => '파트너 서버에도 이 일정을 생성하여 두 서버가 함께 중지, 동기화, 재시작됩니다.',
        'created' => '동기화 일정이 성공적으로 생성되었습니다.',
        'created_both' => '두 서버 모두에 동기화 일정이 생성되었습니다.',
    ],

    // File browser
    'file_browser' => [
        'title' => '서버 파일 찾아보기',
        'current_excludes' => '제외된 경로',
        'current_excludes_help' => '이 경로들은 현재 동기화에서 제외되어 있습니다. X를 클릭하여 항목을 제거하거나 아래 브라우저를 사용하여 새 항목을 추가하세요.',
        'navigate' => '폴더 탐색',
        'navigate_placeholder' => '열 폴더를 선택하세요...',
        'back' => '뒤로',
        'exclude_current' => '이 폴더 제외',
        'excluded' => '(제외됨)',
        'current_path' => '현재 경로',
        'directory' => '디렉토리 찾아보기',
        'directory_help' => '디렉토리 경로를 입력하고 Tab을 눌러 내용을 탐색하세요. 예: mods/ 또는 config/',
        'select_files' => '제외할 파일 및 폴더 선택',
        'open_folder' => ':name 열기',
        'save_excludes' => '제외 저장',
        'excludes_updated' => '제외 목록이 성공적으로 업데이트되었습니다.',
    ],

    // User-facing create pair form
    'user_create' => [
        'section_title' => '동기화 쌍 생성',
        'section_description' => ':server의 새 동기화 쌍을 설정합니다. 이 서버에는 :max 슬롯 중 :free 슬롯을 사용할 수 있습니다.',
        'partner_server' => '파트너 서버',
        'partner_server_help' => '동기화할 서버를 선택하세요. 접근 권한이 있고 동기화 슬롯이 사용 가능한 서버만 표시됩니다.',
        'slots_free' => '사용 가능',
    ],
];
