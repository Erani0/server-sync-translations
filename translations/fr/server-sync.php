<?php

return [
    // Navigation et titres de pages
    'navigation' => 'Synchronisation Serveur',
    'title' => 'Synchronisation des Serveurs',
    'admin_title' => 'Vue d\'ensemble de la Synchronisation',
    'admin_description' => 'Gérer toutes les paires de synchronisation de serveurs de votre panel.',

    // Directions
    'direction' => [
        'main_to_sub' => 'Principal → Secondaire',
        'sub_to_main' => 'Secondaire → Principal',
        'bidirectional' => 'Bidirectionnel',
        'label' => 'Direction de Synchronisation',
        'description' => 'Choisissez dans quelle direction les fichiers doivent être synchronisés.',
    ],

    // Portée
    'scope' => [
        'full' => 'Répertoire Complet',
        'paths' => 'Chemins Sélectionnés',
        'label' => 'Portée de Synchronisation',
        'description' => 'Choisissez de synchroniser le répertoire entier du serveur ou seulement les chemins sélectionnés.',
    ],

    // Libellés du formulaire
    'form' => [
        'main_server' => 'Serveur Principal',
        'main_server_description' => 'Le serveur principal. En synchronisation unidirectionnelle, c\'est la source.',
        'sub_server' => 'Serveur Secondaire',
        'sub_server_description' => 'Le serveur secondaire. En synchronisation unidirectionnelle, c\'est la cible.',
        'sync_paths' => 'Chemins de Synchronisation',
        'sync_paths_description' => 'Spécifiez les répertoires ou fichiers à synchroniser (un par ligne). Exemple : mods/, config/',
        'sync_paths_placeholder' => "mods/\nconfig/\nplugins/",
        'exclude_paths' => 'Chemins Exclus',
        'exclude_paths_description' => 'Chemins à exclure de la synchronisation (un par ligne). Exemple : logs/, cache/',
        'exclude_paths_placeholder' => "logs/\ncache/\ntmp/",
        'interval' => 'Intervalle de Synchronisation (minutes)',
        'interval_description' => 'Fréquence d\'exécution automatique de la synchronisation.',
        'enabled' => 'Activer la Synchronisation',
        'enabled_description' => 'Activer ou désactiver la synchronisation automatique pour cette paire.',
    ],

    // Libellés de statut
    'status' => [
        'success' => 'Réussi',
        'failed' => 'Échoué',
        'running' => 'En cours',
        'partial' => 'Partiel',
        'pending' => 'En attente',
        'disabled' => 'Désactivé',
        'never' => 'Jamais synchronisé',
    ],

    // Actions
    'actions' => [
        'sync_now' => 'Synchroniser Maintenant',
        'create_pair' => 'Créer une Paire de Synchronisation',
        'edit_pair' => 'Modifier la Paire de Synchronisation',
        'delete_pair' => 'Supprimer la Paire de Synchronisation',
        'view_logs' => 'Voir les Journaux',
        'manage' => 'Gérer',
        'confirm_delete' => 'Êtes-vous sûr de vouloir supprimer cette paire de synchronisation ? Cette action est irréversible.',
        'confirm_sync' => 'Êtes-vous sûr de vouloir déclencher une synchronisation manuelle maintenant ?',
        'browse_excludes' => 'Parcourir et Exclure des Fichiers',
    ],

    // En-têtes de tableau
    'table' => [
        'main_server' => 'Serveur Principal',
        'sub_server' => 'Serveur Secondaire',
        'sync_pair' => 'Paire de Synchronisation',
        'direction' => 'Direction',
        'scope' => 'Portée',
        'interval' => 'Intervalle',
        'last_sync' => 'Dernière Synchronisation',
        'status' => 'Statut',
        'actions' => 'Actions',
        'files_synced' => 'Fichiers',
        'bytes_transferred' => 'Taille',
        'duration' => 'Durée',
        'error' => 'Erreur',
        'synced_at' => 'Synchronisé le',
        'sync_mode' => 'Mode de Synchronisation',
    ],

    // Messages
    'messages' => [
        'sync_started' => 'La synchronisation a été démarrée.',
        'sync_started_background' => 'La synchronisation a démarré en arrière-plan. Vous serez notifié une fois terminée.',
        'sync_completed' => 'La synchronisation a été effectuée avec succès.',
        'sync_failed' => 'La synchronisation a échoué : :error',
        'sync_failed_title' => 'Échec de la Synchronisation',
        'sync_partial' => 'La synchronisation a été partiellement effectuée',
        'sync_unknown_error' => 'Erreur inconnue lors de la synchronisation.',
        'pair_created' => 'La paire de synchronisation a été créée.',
        'pair_updated' => 'La paire de synchronisation a été mise à jour.',
        'pair_deleted' => 'La paire de synchronisation a été supprimée.',
        'no_pairs' => 'Aucune paire de synchronisation configurée pour ce serveur.',
        'no_pairs_hint' => 'Un administrateur peut configurer les paires de synchronisation dans le panneau d\'administration.',
        'server_offline' => 'Le serveur est actuellement hors ligne ou indisponible.',
        'node_offline' => 'Le nœud ":node" est injoignable — le serveur ":server" ne peut pas être synchronisé pour le moment.',
        'server_conflict' => 'Le serveur est en état de conflit (transfert/restauration en cours).',
        'same_server' => 'Le serveur principal et le serveur secondaire ne peuvent pas être identiques.',
        'different_egg' => 'Les deux serveurs doivent utiliser le même egg (type de serveur).',
        'pair_exists' => 'Une paire de synchronisation entre ces deux serveurs existe déjà.',
        'limit_reached' => 'Le serveur ":server" a atteint le nombre maximum de paires de synchronisation (:max).',
        'sync_disabled_for_server' => 'La synchronisation n\'est pas activée pour le serveur ":server" (limite à 0).',
        'interval_too_low' => 'L\'intervalle de synchronisation doit être d\'au moins :min minutes.',
        'sync_already_running' => 'Une synchronisation est déjà en cours pour cette paire.',
    ],

    // Permissions
    'permissions' => [
        'desc' => 'Permissions pour le plugin Server Sync — afficher le statut, gérer les paramètres et déclencher la synchronisation.',
        'view' => 'Voir le statut de synchronisation et les journaux',
        'manage' => 'Modifier les chemins et paramètres de synchronisation',
        'trigger' => 'Déclencher une synchronisation manuelle',
    ],

    // Paramètres
    'settings' => [
        'enforce_same_egg' => 'Exiger le Même Egg',
        'enforce_same_egg_description' => 'Lorsqu\'activé, seuls les serveurs du même type d\'egg peuvent être associés.',
        'max_pairs' => 'Maximum de Paires par Serveur',
        'max_pairs_description' => 'Nombre maximum de paires de synchronisation auxquelles un serveur peut participer.',
        'default_interval' => 'Intervalle par Défaut (minutes)',
        'default_interval_description' => 'Intervalle de synchronisation par défaut pour les nouvelles paires.',
        'min_interval' => 'Intervalle Minimum (minutes)',
        'min_interval_description' => 'Intervalle de synchronisation minimum autorisé.',
        'max_file_size' => 'Taille Max d\'Archive (Mo)',
        'max_file_size_description' => 'Taille maximale par archive de synchronisation. En cas de dépassement, les fichiers sont automatiquement répartis en plusieurs lots.',
        'concurrent_limit' => 'Limite de Synchronisation Simultanée',
        'concurrent_limit_description' => 'Nombre maximum de synchronisations pouvant s\'exécuter simultanément.',
        'log_retention' => 'Conservation des Journaux',
        'log_retention_description' => 'Durée de conservation des journaux de synchronisation avant le nettoyage automatique.',
        'days' => 'jours',
        'saved' => 'Paramètres enregistrés avec succès.',
    ],

    // Détails des journaux
    'log' => [
        'title' => 'Journaux de Synchronisation',
        'empty' => 'Aucun journal de synchronisation trouvé.',
        'source' => 'Source',
        'target' => 'Cible',
        'summary' => 'Résumé',
        'summary_synced' => ':files fichiers synchronisés (:size) en :duration',
        'summary_no_changes' => 'Aucun changement détecté — tous les fichiers sont à jour',
        'summary_failed' => 'Échoué : :error',
        'summary_running' => 'Synchronisation en cours…',
        'synced_files' => 'Fichiers Synchronisés',
        'no_file_details' => 'Aucun détail de fichier disponible',
        'excluded_paths' => 'Chemins Exclus',
        'no_excludes' => 'Aucune exclusion configurée',
        'view_details' => 'Voir les Détails',
        'detail_title' => 'Détails du Journal de Synchronisation',
        'detail_sync_info' => 'Informations de Synchronisation',
        'detail_transfer' => 'Détails du Transfert',
    ],

    // Limite de synchronisation du serveur (injectée dans le formulaire de création/modification)
    'server_limit' => [
        'title' => 'Limite de Synchronisation du Serveur',
        'description' => 'Définissez le nombre de paires de synchronisation auxquelles ce serveur peut participer (en tant que principal ou secondaire). Définissez à 0 pour désactiver complètement la synchronisation pour ce serveur.',
        'label' => 'Limite de Paires de Synchronisation',
        'helper' => 'Nombre maximum de paires de synchronisation dont ce serveur peut faire partie. 0 = désactivé.',
    ],

    // Mode de Synchronisation
    'sync_mode' => [
        'label' => 'Mode de Synchronisation',
        'description' => 'Comment les modifications de fichiers doivent être appliquées.',
        'live' => 'En Direct',
        'on_restart' => 'Au Redémarrage',
        'live_description' => 'Les fichiers sont synchronisés immédiatement pendant que les serveurs fonctionnent.',
        'on_restart_description' => 'Les serveurs sont arrêtés avant la synchronisation et redémarrés ensuite.',
    ],

    // Intégration des planifications
    'schedule' => [
        'task_name' => 'Synchronisation Serveur',
        'create_schedule' => 'Créer une Planification de Synchronisation',
        'select_pair' => 'Paire de Synchronisation',
        'select_pair_description' => 'Sélectionnez la paire de synchronisation que cette tâche planifiée doit exécuter.',
        'schedule_name' => 'Nom de la Planification',
        'preset' => 'Intervalle',
        'preset_hourly' => 'Toutes les heures',
        'preset_every_6h' => 'Toutes les 6 heures',
        'preset_every_12h' => 'Toutes les 12 heures',
        'preset_daily' => 'Quotidien à 00:00',
        'preset_daily_3am' => 'Quotidien à 03:00',
        'mirror_to_partner' => 'Miroir vers le Serveur Partenaire',
        'mirror_description' => 'Créer également cette planification sur le serveur partenaire, afin que les deux serveurs s\'arrêtent, se synchronisent et redémarrent ensemble.',
        'created' => 'Planification de synchronisation créée avec succès.',
        'created_both' => 'Planification de synchronisation créée sur les deux serveurs.',
    ],

    // Navigateur de fichiers
    'file_browser' => [
        'title' => 'Parcourir les Fichiers du Serveur',
        'current_excludes' => 'Chemins Exclus',
        'current_excludes_help' => 'Ces chemins sont actuellement exclus de la synchronisation. Cliquez sur X pour supprimer des entrées, ou utilisez le navigateur ci-dessous pour en ajouter.',
        'navigate' => 'Parcourir les Dossiers',
        'navigate_placeholder' => 'Sélectionnez un dossier à ouvrir...',
        'back' => 'Retour',
        'exclude_current' => 'Exclure ce dossier',
        'excluded' => '(exclu)',
        'current_path' => 'Chemin actuel',
        'directory' => 'Parcourir le Répertoire',
        'directory_help' => 'Entrez un chemin de répertoire et appuyez sur Tab pour parcourir son contenu. Exemple : mods/ ou config/',
        'select_files' => 'Sélectionner les Fichiers et Dossiers à Exclure',
        'open_folder' => 'Ouvrir :name',
        'save_excludes' => 'Enregistrer les Exclusions',
        'excludes_updated' => 'Liste d\'exclusions mise à jour avec succès.',
    ],

    // Formulaire de création de paire côté utilisateur
    'user_create' => [
        'section_title' => 'Créer une Paire de Synchronisation',
        'section_description' => 'Configurer une nouvelle paire de synchronisation pour :server. Ce serveur dispose de :free emplacements sur :max disponibles.',
        'partner_server' => 'Serveur Partenaire',
        'partner_server_help' => 'Sélectionnez le serveur avec lequel vous souhaitez synchroniser. Seuls les serveurs auxquels vous avez accès et qui ont des emplacements disponibles sont affichés.',
        'slots_free' => 'libre(s)',
    ],
];
