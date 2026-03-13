<?php

return [
    // Navegación y títulos de página
    'navigation' => 'Sincronización de Servidores',
    'title' => 'Sincronización de Servidores',
    'admin_title' => 'Vista General de Sincronización',
    'admin_description' => 'Administra todos los pares de sincronización de servidores en tu panel.',

    // Direcciones
    'direction' => [
        'main_to_sub' => 'Principal → Secundario',
        'sub_to_main' => 'Secundario → Principal',
        'bidirectional' => 'Bidireccional',
        'label' => 'Dirección de Sincronización',
        'description' => 'Elige en qué dirección se deben sincronizar los archivos.',
    ],

    // Alcance
    'scope' => [
        'full' => 'Directorio Completo',
        'paths' => 'Rutas Seleccionadas',
        'label' => 'Alcance de Sincronización',
        'description' => 'Elige si deseas sincronizar el directorio completo del servidor o solo las rutas seleccionadas.',
    ],

    // Etiquetas del formulario
    'form' => [
        'main_server' => 'Servidor Principal',
        'main_server_description' => 'El servidor principal. En sincronización unidireccional, este es el origen.',
        'sub_server' => 'Servidor Secundario',
        'sub_server_description' => 'El servidor secundario. En sincronización unidireccional, este es el destino.',
        'sync_paths' => 'Rutas de Sincronización',
        'sync_paths_description' => 'Especifica qué directorios o archivos se deben sincronizar (uno por línea). Ejemplo: mods/, config/',
        'sync_paths_placeholder' => "mods/\nconfig/\nplugins/",
        'exclude_paths' => 'Rutas Excluidas',
        'exclude_paths_description' => 'Rutas a excluir de la sincronización (una por línea). Ejemplo: logs/, cache/',
        'exclude_paths_placeholder' => "logs/\ncache/\ntmp/",
        'interval' => 'Intervalo de Sincronización (minutos)',
        'interval_description' => 'Con qué frecuencia se debe ejecutar la sincronización automáticamente.',
        'enabled' => 'Activar Sincronización',
        'enabled_description' => 'Activar o desactivar la sincronización automática para este par.',
    ],

    // Etiquetas de estado
    'status' => [
        'success' => 'Exitoso',
        'failed' => 'Fallido',
        'running' => 'En ejecución',
        'partial' => 'Parcial',
        'pending' => 'Pendiente',
        'disabled' => 'Desactivado',
        'never' => 'Nunca sincronizado',
    ],

    // Acciones
    'actions' => [
        'sync_now' => 'Sincronizar Ahora',
        'create_pair' => 'Crear Par de Sincronización',
        'edit_pair' => 'Editar Par de Sincronización',
        'delete_pair' => 'Eliminar Par de Sincronización',
        'view_logs' => 'Ver Registros',
        'manage' => 'Administrar',
        'confirm_delete' => '¿Estás seguro de que deseas eliminar este par de sincronización? Esta acción no se puede deshacer.',
        'confirm_sync' => '¿Estás seguro de que deseas iniciar una sincronización manual ahora?',
        'browse_excludes' => 'Explorar y Excluir Archivos',
    ],

    // Encabezados de tabla
    'table' => [
        'main_server' => 'Servidor Principal',
        'sub_server' => 'Servidor Secundario',
        'sync_pair' => 'Par de Sincronización',
        'direction' => 'Dirección',
        'scope' => 'Alcance',
        'interval' => 'Intervalo',
        'last_sync' => 'Última Sincronización',
        'status' => 'Estado',
        'actions' => 'Acciones',
        'files_synced' => 'Archivos',
        'bytes_transferred' => 'Tamaño',
        'duration' => 'Duración',
        'error' => 'Error',
        'synced_at' => 'Sincronizado el',
        'sync_mode' => 'Modo de Sincronización',
    ],

    // Mensajes
    'messages' => [
        'sync_started' => 'La sincronización ha sido iniciada.',
        'sync_started_background' => 'La sincronización se inició en segundo plano. Se te notificará cuando se complete.',
        'sync_completed' => 'La sincronización se completó correctamente.',
        'sync_failed' => 'La sincronización falló: :error',
        'sync_failed_title' => 'Error de Sincronización',
        'sync_partial' => 'La sincronización se completó parcialmente',
        'sync_unknown_error' => 'Error desconocido durante la sincronización.',
        'pair_created' => 'El par de sincronización ha sido creado.',
        'pair_updated' => 'El par de sincronización ha sido actualizado.',
        'pair_deleted' => 'El par de sincronización ha sido eliminado.',
        'no_pairs' => 'No hay pares de sincronización configurados para este servidor.',
        'no_pairs_hint' => 'Un administrador puede configurar los pares de sincronización en el panel de administración.',
        'server_offline' => 'El servidor está actualmente fuera de línea o no disponible.',
        'node_offline' => 'El nodo ":node" no está accesible — el servidor ":server" no se puede sincronizar en este momento.',
        'server_conflict' => 'El servidor está en estado de conflicto (transferencia/restauración en progreso).',
        'same_server' => 'El servidor principal y el servidor secundario no pueden ser el mismo.',
        'different_egg' => 'Ambos servidores deben usar el mismo egg (tipo de servidor).',
        'pair_exists' => 'Ya existe un par de sincronización entre estos dos servidores.',
        'limit_reached' => 'El servidor ":server" ha alcanzado el número máximo de pares de sincronización (:max).',
        'sync_disabled_for_server' => 'La sincronización no está habilitada para el servidor ":server" (límite es 0).',
        'interval_too_low' => 'El intervalo de sincronización debe ser de al menos :min minutos.',
        'sync_already_running' => 'Ya hay una sincronización en curso para este par.',
    ],

    // Permisos
    'permissions' => [
        'desc' => 'Permisos para el plugin de Sincronización de Servidores — ver estado, administrar configuración y activar sincronización.',
        'view' => 'Ver estado de sincronización y registros',
        'manage' => 'Editar rutas y configuración de sincronización',
        'trigger' => 'Activar sincronización manual',
    ],

    // Configuración
    'settings' => [
        'enforce_same_egg' => 'Exigir Mismo Egg',
        'enforce_same_egg_description' => 'Cuando está activado, solo se pueden emparejar servidores con el mismo tipo de egg.',
        'max_pairs' => 'Máximo de Pares por Servidor',
        'max_pairs_description' => 'Número máximo de pares de sincronización en los que un servidor puede participar.',
        'default_interval' => 'Intervalo Predeterminado (minutos)',
        'default_interval_description' => 'Intervalo de sincronización predeterminado para nuevos pares.',
        'min_interval' => 'Intervalo Mínimo (minutos)',
        'min_interval_description' => 'Intervalo de sincronización mínimo permitido.',
        'max_file_size' => 'Tamaño Máximo de Archivo (MB)',
        'max_file_size_description' => 'Tamaño máximo por archivo de sincronización. Cuando se excede, los archivos se dividen automáticamente en múltiples lotes.',
        'concurrent_limit' => 'Límite de Sincronización Simultánea',
        'concurrent_limit_description' => 'Número máximo de sincronizaciones que pueden ejecutarse simultáneamente.',
        'log_retention' => 'Retención de Registros',
        'log_retention_description' => 'Cuánto tiempo se conservan los registros de sincronización antes de la limpieza automática.',
        'days' => 'días',
        'saved' => 'Configuración guardada correctamente.',
    ],

    // Detalles de registros
    'log' => [
        'title' => 'Registros de Sincronización',
        'empty' => 'No se encontraron registros de sincronización.',
        'source' => 'Origen',
        'target' => 'Destino',
        'summary' => 'Resumen',
        'summary_synced' => ':files archivos sincronizados (:size) en :duration',
        'summary_no_changes' => 'No se detectaron cambios — todos los archivos están actualizados',
        'summary_failed' => 'Fallido: :error',
        'summary_running' => 'Sincronización en progreso…',
        'synced_files' => 'Archivos Sincronizados',
        'no_file_details' => 'No hay detalles de archivo disponibles',
        'excluded_paths' => 'Rutas Excluidas',
        'no_excludes' => 'No hay exclusiones configuradas',
        'view_details' => 'Ver Detalles',
        'detail_title' => 'Detalles del Registro de Sincronización',
        'detail_sync_info' => 'Información de Sincronización',
        'detail_transfer' => 'Detalles de Transferencia',
    ],

    // Límite de sincronización del servidor (inyectado en el formulario de crear/editar servidor)
    'server_limit' => [
        'title' => 'Límite de Sincronización del Servidor',
        'description' => 'Establece cuántos pares de sincronización puede tener este servidor (como principal o secundario). Establece en 0 para desactivar completamente la sincronización para este servidor.',
        'label' => 'Límite de Pares de Sincronización',
        'helper' => 'Número máximo de pares de sincronización de los que este servidor puede formar parte. 0 = desactivado.',
    ],

    // Modo de sincronización
    'sync_mode' => [
        'label' => 'Modo de Sincronización',
        'description' => 'Cómo se deben aplicar los cambios en los archivos.',
        'live' => 'En Vivo',
        'on_restart' => 'Al Reiniciar',
        'live_description' => 'Los archivos se sincronizan inmediatamente mientras los servidores están en funcionamiento.',
        'on_restart_description' => 'Los servidores se detienen antes de la sincronización y se reinician después.',
    ],

    // Integración con planificaciones
    'schedule' => [
        'task_name' => 'Sincronización de Servidores',
        'create_schedule' => 'Crear Planificación de Sincronización',
        'select_pair' => 'Par de Sincronización',
        'select_pair_description' => 'Selecciona el par de sincronización que esta tarea planificada debe ejecutar.',
        'schedule_name' => 'Nombre de la Planificación',
        'preset' => 'Intervalo',
        'preset_hourly' => 'Cada hora',
        'preset_every_6h' => 'Cada 6 horas',
        'preset_every_12h' => 'Cada 12 horas',
        'preset_daily' => 'Diario a las 00:00',
        'preset_daily_3am' => 'Diario a las 03:00',
        'mirror_to_partner' => 'Duplicar en Servidor Asociado',
        'mirror_description' => 'También crear esta planificación en el servidor asociado, para que ambos servidores se detengan, sincronicen y reinicien juntos.',
        'created' => 'Planificación de sincronización creada correctamente.',
        'created_both' => 'Planificación de sincronización creada en ambos servidores.',
    ],

    // Explorador de archivos
    'file_browser' => [
        'title' => 'Explorar Archivos del Servidor',
        'current_excludes' => 'Rutas Excluidas',
        'current_excludes_help' => 'Estas rutas están actualmente excluidas de la sincronización. Haz clic en X para eliminar entradas, o usa el explorador de abajo para agregar nuevas.',
        'navigate' => 'Navegar Carpetas',
        'navigate_placeholder' => 'Selecciona una carpeta para abrir...',
        'back' => 'Volver',
        'exclude_current' => 'Excluir esta carpeta',
        'excluded' => '(excluido)',
        'current_path' => 'Ruta actual',
        'directory' => 'Explorar Directorio',
        'directory_help' => 'Introduce una ruta de directorio y presiona Tab para explorar su contenido. Ejemplo: mods/ o config/',
        'select_files' => 'Seleccionar Archivos y Carpetas para Excluir',
        'open_folder' => 'Abrir :name',
        'save_excludes' => 'Guardar Exclusiones',
        'excludes_updated' => 'Lista de exclusiones actualizada correctamente.',
    ],

    // Formulario de creación de par del usuario
    'user_create' => [
        'section_title' => 'Crear Par de Sincronización',
        'section_description' => 'Configura un nuevo par de sincronización para :server. Este servidor tiene :free de :max espacios disponibles.',
        'partner_server' => 'Servidor Asociado',
        'partner_server_help' => 'Selecciona el servidor con el que deseas sincronizar. Solo se muestran los servidores a los que tienes acceso y que tienen espacios disponibles.',
        'slots_free' => 'libre(s)',
    ],
];
