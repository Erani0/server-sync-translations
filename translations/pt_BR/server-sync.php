<?php

return [
    // Navigation & page titles
    'navigation' => 'Server Sync',
    'title' => 'Sincronização de Servidores',
    'admin_title' => 'Visão Geral de Sincronização',
    'admin_description' => 'Gerencie todos os pares de sincronização de servidores no seu painel.',

    // Directions
    'direction' => [
        'main_to_sub' => 'Principal → Secundário',
        'sub_to_main' => 'Secundário → Principal',
        'bidirectional' => 'Bidirecional',
        'label' => 'Direção da Sincronização',
        'description' => 'Escolha em qual direção os arquivos devem ser sincronizados.',
    ],

    // Scope
    'scope' => [
        'full' => 'Diretório Completo',
        'paths' => 'Caminhos Selecionados',
        'label' => 'Escopo da Sincronização',
        'description' => 'Escolha se deseja sincronizar o diretório inteiro do servidor ou apenas os caminhos selecionados.',
    ],

    // Form labels
    'form' => [
        'main_server' => 'Servidor Principal',
        'main_server_description' => 'O servidor primário. Na sincronização unidirecional, este é a origem.',
        'sub_server' => 'Servidor Secundário',
        'sub_server_description' => 'O servidor secundário. Na sincronização unidirecional, este é o destino.',
        'sync_paths' => 'Caminhos de Sincronização',
        'sync_paths_description' => 'Especifique quais diretórios ou arquivos sincronizar (um por linha). Exemplo: mods/, config/',
        'sync_paths_placeholder' => "mods/\nconfig/\nplugins/",
        'exclude_paths' => 'Caminhos Excluídos',
        'exclude_paths_description' => 'Caminhos a serem excluídos da sincronização (um por linha). Exemplo: logs/, cache/',
        'exclude_paths_placeholder' => "logs/\ncache/\ntmp/",
        'interval' => 'Intervalo de Sincronização (minutos)',
        'interval_description' => 'Com que frequência a sincronização deve ser executada automaticamente.',
        'enabled' => 'Ativar Sincronização',
        'enabled_description' => 'Ativar ou desativar a sincronização automática para este par.',
    ],

    // Status labels
    'status' => [
        'success' => 'Sucesso',
        'failed' => 'Falhou',
        'running' => 'Em Execução',
        'partial' => 'Parcial',
        'pending' => 'Pendente',
        'disabled' => 'Desativado',
        'never' => 'Nunca sincronizado',
    ],

    // Actions
    'actions' => [
        'sync_now' => 'Sincronizar Agora',
        'create_pair' => 'Criar Par de Sincronização',
        'edit_pair' => 'Editar Par de Sincronização',
        'delete_pair' => 'Excluir Par de Sincronização',
        'view_logs' => 'Ver Registros',
        'manage' => 'Gerenciar',
        'confirm_delete' => 'Tem certeza de que deseja excluir este par de sincronização? Esta ação não pode ser desfeita.',
        'confirm_sync' => 'Tem certeza de que deseja iniciar uma sincronização manual agora?',
        'browse_excludes' => 'Navegar e Excluir Arquivos',
    ],

    // Table headers
    'table' => [
        'main_server' => 'Servidor Principal',
        'sub_server' => 'Servidor Secundário',
        'sync_pair' => 'Par de Sincronização',
        'direction' => 'Direção',
        'scope' => 'Escopo',
        'interval' => 'Intervalo',
        'last_sync' => 'Última Sincronização',
        'status' => 'Status',
        'actions' => 'Ações',
        'files_synced' => 'Arquivos',
        'bytes_transferred' => 'Tamanho',
        'duration' => 'Duração',
        'error' => 'Erro',
        'synced_at' => 'Sincronizado Em',
        'sync_mode' => 'Modo de Sincronização',
    ],

    // Messages
    'messages' => [
        'sync_started' => 'A sincronização foi iniciada.',
        'sync_started_background' => 'Sincronização iniciada em segundo plano. Você será notificado quando for concluída.',
        'sync_completed' => 'Sincronização concluída com sucesso.',
        'sync_failed' => 'Sincronização falhou: :error',
        'sync_failed_title' => 'Sincronização Falhou',
        'sync_partial' => 'Sincronização concluída parcialmente',
        'sync_unknown_error' => 'Erro desconhecido durante a sincronização.',
        'pair_created' => 'Par de sincronização criado.',
        'pair_updated' => 'Par de sincronização atualizado.',
        'pair_deleted' => 'Par de sincronização excluído.',
        'no_pairs' => 'Nenhum par de sincronização configurado para este servidor.',
        'no_pairs_hint' => 'Um administrador pode configurar pares de sincronização no painel de administração.',
        'server_offline' => 'O servidor está atualmente offline ou indisponível.',
        'node_offline' => 'O nó ":node" está inacessível — o servidor ":server" não pode ser sincronizado agora.',
        'server_conflict' => 'O servidor está em estado de conflito (transferência/restauração em andamento).',
        'same_server' => 'O servidor principal e o servidor secundário não podem ser o mesmo.',
        'different_egg' => 'Ambos os servidores devem usar o mesmo egg (tipo de servidor).',
        'pair_exists' => 'Um par de sincronização entre esses dois servidores já existe.',
        'limit_reached' => 'O servidor ":server" atingiu o número máximo de pares de sincronização (:max).',
        'sync_disabled_for_server' => 'O Server Sync não está habilitado para o servidor ":server" (o limite é 0).',
        'interval_too_low' => 'O intervalo de sincronização deve ser de pelo menos :min minutos.',
        'sync_already_running' => 'Uma sincronização já está em execução para este par.',
    ],

    // Permissions
    'permissions' => [
        'desc' => 'Permissões para o plugin Server Sync — visualizar status, gerenciar configurações e iniciar sincronização.',
        'view' => 'Visualizar status e registros de sincronização',
        'manage' => 'Editar caminhos e configurações de sincronização',
        'trigger' => 'Iniciar sincronização manual',
    ],

    // Settings
    'settings' => [
        'enforce_same_egg' => 'Forçar Mesmo Egg',
        'enforce_same_egg_description' => 'Quando ativado, apenas servidores com o mesmo tipo de egg podem ser pareados.',
        'max_pairs' => 'Máximo de Pares por Servidor',
        'max_pairs_description' => 'Número máximo de pares de sincronização em que um único servidor pode participar.',
        'default_interval' => 'Intervalo Padrão (minutos)',
        'default_interval_description' => 'Intervalo de sincronização padrão para novos pares.',
        'min_interval' => 'Intervalo Mínimo (minutos)',
        'min_interval_description' => 'Intervalo de sincronização mínimo permitido.',
        'max_file_size' => 'Tamanho Máximo do Arquivo (MB)',
        'max_file_size_description' => 'Tamanho máximo por arquivo de sincronização. Quando excedido, os arquivos são automaticamente divididos em vários lotes.',
        'concurrent_limit' => 'Limite de Sincronizações Simultâneas',
        'concurrent_limit_description' => 'Número máximo de sincronizações que podem ser executadas simultaneamente.',
        'log_retention' => 'Retenção de Registros',
        'log_retention_description' => 'Por quanto tempo os registros de sincronização são mantidos antes da limpeza automática.',
        'days' => 'dias',
        'saved' => 'Configurações salvas com sucesso.',
    ],

    // Log details
    'log' => [
        'title' => 'Registros de Sincronização',
        'empty' => 'Nenhum registro de sincronização encontrado.',
        'source' => 'Origem',
        'target' => 'Destino',
        'summary' => 'Resumo',
        'summary_synced' => ':files arquivos sincronizados (:size) em :duration',
        'summary_no_changes' => 'Nenhuma alteração detectada — todos os arquivos estão atualizados',
        'summary_failed' => 'Falhou: :error',
        'summary_running' => 'Sincronização em andamento…',
        'synced_files' => 'Arquivos Sincronizados',
        'no_file_details' => 'Nenhum detalhe de arquivo disponível',
        'excluded_paths' => 'Caminhos Excluídos',
        'no_excludes' => 'Nenhuma exclusão configurada',
        'view_details' => 'Ver Detalhes',
        'detail_title' => 'Detalhes do Registro de Sincronização',
        'detail_sync_info' => 'Info de Sincronização',
        'detail_transfer' => 'Detalhes de Transferência',
    ],

    // Server Sync Limit (injected into server create/edit form)
    'server_limit' => [
        'title' => 'Limite do Server Sync',
        'description' => 'Defina quantos pares de sincronização este servidor pode ter (como principal ou secundário). Defina como 0 para desativar completamente o Server Sync para este servidor.',
        'label' => 'Limite de Pares de Sincronização',
        'helper' => 'Número máximo de pares de sincronização dos quais este servidor pode participar. 0 = desativado.',
    ],

    // Sync Mode
    'sync_mode' => [
        'label' => 'Modo de Sincronização',
        'description' => 'Como as alterações de arquivos devem ser aplicadas.',
        'live' => 'Live',
        'on_restart' => 'Ao Reiniciar',
        'live_description' => 'Os arquivos são sincronizados imediatamente enquanto os servidores estão em execução.',
        'on_restart_description' => 'Os servidores são parados antes da sincronização e reiniciados depois.',
    ],

    // Schedule integration
    'schedule' => [
        'task_name' => 'Server Sync',
        'create_schedule' => 'Criar Agendamento de Sincronização',
        'select_pair' => 'Par de Sincronização',
        'select_pair_description' => 'Selecione o par de sincronização que esta tarefa agendada deve executar.',
        'schedule_name' => 'Nome do Agendamento',
        'preset' => 'Intervalo',
        'preset_hourly' => 'A cada hora',
        'preset_every_6h' => 'A cada 6 horas',
        'preset_every_12h' => 'A cada 12 horas',
        'preset_daily' => 'Diariamente às 00:00',
        'preset_daily_3am' => 'Diariamente às 03:00',
        'mirror_to_partner' => 'Espelhar no Servidor Parceiro',
        'mirror_description' => 'Também criar este agendamento no servidor parceiro, para que ambos os servidores parem, sincronizem e reiniciem juntos.',
        'created' => 'Agendamento de sincronização criado com sucesso.',
        'created_both' => 'Agendamento de sincronização criado em ambos os servidores.',
    ],

    // File browser
    'file_browser' => [
        'title' => 'Navegar Arquivos do Servidor',
        'current_excludes' => 'Caminhos Excluídos',
        'current_excludes_help' => 'Esses caminhos estão atualmente excluídos da sincronização. Clique em X para remover entradas, ou use o navegador abaixo para adicionar novas.',
        'navigate' => 'Navegar Pastas',
        'navigate_placeholder' => 'Selecione uma pasta para abrir...',
        'back' => 'Voltar',
        'exclude_current' => 'Excluir esta pasta',
        'excluded' => '(excluído)',
        'current_path' => 'Caminho atual',
        'directory' => 'Navegar Diretório',
        'directory_help' => 'Insira um caminho de diretório e pressione Tab para navegar seu conteúdo. Exemplo: mods/ ou config/',
        'select_files' => 'Selecionar Arquivos e Pastas para Excluir',
        'open_folder' => 'Abrir :name',
        'save_excludes' => 'Salvar Exclusões',
        'excludes_updated' => 'Lista de exclusões atualizada com sucesso.',
    ],

    // User-facing create pair form
    'user_create' => [
        'section_title' => 'Criar Par de Sincronização',
        'section_description' => 'Configure um novo par de sincronização para :server. Este servidor tem :free de :max slots de sincronização disponíveis.',
        'partner_server' => 'Servidor Parceiro',
        'partner_server_help' => 'Selecione o servidor com o qual deseja sincronizar. Apenas servidores aos quais você tem acesso com slots de sincronização disponíveis são mostrados.',
        'slots_free' => 'disponíveis',
    ],
];
