<?php

return [
    // Navigation & page titles
    'navigation' => 'Server Sync',
    'title' => 'Sunucu Senkronizasyonu',
    'admin_title' => 'Senkronizasyon Genel Bakış',
    'admin_description' => 'Panelinizde tüm sunucu senkronizasyon çiftlerini yönetin.',

    // Directions
    'direction' => [
        'main_to_sub' => 'Ana → Alt',
        'sub_to_main' => 'Alt → Ana',
        'bidirectional' => 'Çift Yönlü',
        'label' => 'Senkronizasyon Yönü',
        'description' => 'Dosyaların hangi yönde senkronize edileceğini seçin.',
    ],

    // Scope
    'scope' => [
        'full' => 'Tam Dizin',
        'paths' => 'Seçili Yollar',
        'label' => 'Senkronizasyon Kapsamı',
        'description' => 'Sunucu dizininin tamamını mı yoksa yalnızca seçili yolları mı senkronize edeceğinizi seçin.',
    ],

    // Form labels
    'form' => [
        'main_server' => 'Ana Sunucu',
        'main_server_description' => 'Birincil sunucu. Tek yönlü senkronizasyonda bu kaynaktır.',
        'sub_server' => 'Alt Sunucu',
        'sub_server_description' => 'İkincil sunucu. Tek yönlü senkronizasyonda bu hedeftir.',
        'sync_paths' => 'Senkronizasyon Yolları',
        'sync_paths_description' => 'Hangi dizinlerin veya dosyaların senkronize edileceğini belirtin (satır başına bir tane). Örnek: mods/, config/',
        'sync_paths_placeholder' => "mods/\nconfig/\nplugins/",
        'exclude_paths' => 'Hariç Tutulan Yollar',
        'exclude_paths_description' => 'Senkronizasyondan hariç tutulacak yollar (satır başına bir tane). Örnek: logs/, cache/',
        'exclude_paths_placeholder' => "logs/\ncache/\ntmp/",
        'interval' => 'Senkronizasyon Aralığı (dakika)',
        'interval_description' => 'Otomatik senkronizasyonun ne sıklıkta çalışacağı.',
        'enabled' => 'Senkronizasyonu Etkinleştir',
        'enabled_description' => 'Bu çift için otomatik senkronizasyonu etkinleştirin veya devre dışı bırakın.',
    ],

    // Status labels
    'status' => [
        'success' => 'Başarılı',
        'failed' => 'Başarısız',
        'running' => 'Çalışıyor',
        'partial' => 'Kısmi',
        'pending' => 'Beklemede',
        'disabled' => 'Devre Dışı',
        'never' => 'Hiç senkronize edilmedi',
    ],

    // Actions
    'actions' => [
        'sync_now' => 'Şimdi Senkronize Et',
        'create_pair' => 'Senkronizasyon Çifti Oluştur',
        'edit_pair' => 'Senkronizasyon Çiftini Düzenle',
        'delete_pair' => 'Senkronizasyon Çiftini Sil',
        'view_logs' => 'Günlükleri Görüntüle',
        'manage' => 'Yönet',
        'confirm_delete' => 'Bu senkronizasyon çiftini silmek istediğinizden emin misiniz? Bu işlem geri alınamaz.',
        'confirm_sync' => 'Şimdi manuel bir senkronizasyon başlatmak istediğinizden emin misiniz?',
        'browse_excludes' => 'Dosyaları Gözat ve Hariç Tut',
    ],

    // Table headers
    'table' => [
        'main_server' => 'Ana Sunucu',
        'sub_server' => 'Alt Sunucu',
        'sync_pair' => 'Senkronizasyon Çifti',
        'direction' => 'Yön',
        'scope' => 'Kapsam',
        'interval' => 'Aralık',
        'last_sync' => 'Son Senkronizasyon',
        'status' => 'Durum',
        'actions' => 'İşlemler',
        'files_synced' => 'Dosyalar',
        'bytes_transferred' => 'Boyut',
        'duration' => 'Süre',
        'error' => 'Hata',
        'synced_at' => 'Senkronize Edildi',
        'sync_mode' => 'Senkronizasyon Modu',
    ],

    // Messages
    'messages' => [
        'sync_started' => 'Senkronizasyon başlatıldı.',
        'sync_started_background' => 'Senkronizasyon arka planda başlatıldı. Tamamlandığında bilgilendirileceksiniz.',
        'sync_completed' => 'Senkronizasyon başarıyla tamamlandı.',
        'sync_failed' => 'Senkronizasyon başarısız: :error',
        'sync_failed_title' => 'Senkronizasyon Başarısız',
        'sync_partial' => 'Senkronizasyon kısmen tamamlandı',
        'sync_unknown_error' => 'Senkronizasyon sırasında bilinmeyen hata oluştu.',
        'pair_created' => 'Senkronizasyon çifti oluşturuldu.',
        'pair_updated' => 'Senkronizasyon çifti güncellendi.',
        'pair_deleted' => 'Senkronizasyon çifti silindi.',
        'no_pairs' => 'Bu sunucu için yapılandırılmış senkronizasyon çifti yok.',
        'no_pairs_hint' => 'Bir yönetici, yönetim panelinde senkronizasyon çiftleri oluşturabilir.',
        'server_offline' => 'Sunucu şu anda çevrimdışı veya erişilemez durumda.',
        'node_offline' => '":node" düğümüne ulaşılamıyor — ":server" sunucusu şu anda senkronize edilemiyor.',
        'server_conflict' => 'Sunucu çakışma durumunda (aktarım/geri yükleme devam ediyor).',
        'same_server' => 'Ana sunucu ve alt sunucu aynı olamaz.',
        'different_egg' => 'Her iki sunucu da aynı egg\'i (sunucu türü) kullanmalıdır.',
        'pair_exists' => 'Bu iki sunucu arasında zaten bir senkronizasyon çifti mevcut.',
        'limit_reached' => '":server" sunucusu maksimum senkronizasyon çifti sayısına ulaştı (:max).',
        'sync_disabled_for_server' => '":server" sunucusu için Server Sync etkin değil (limit 0).',
        'interval_too_low' => 'Senkronizasyon aralığı en az :min dakika olmalıdır.',
        'sync_already_running' => 'Bu çift için zaten bir senkronizasyon çalışıyor.',
    ],

    // Permissions
    'permissions' => [
        'desc' => 'Server Sync eklentisi için izinler — durumu görüntüle, ayarları yönet ve senkronizasyonu başlat.',
        'view' => 'Senkronizasyon durumunu ve günlükleri görüntüle',
        'manage' => 'Senkronizasyon yollarını ve ayarlarını düzenle',
        'trigger' => 'Manuel senkronizasyon başlat',
    ],

    // Settings
    'settings' => [
        'enforce_same_egg' => 'Aynı Egg\'i Zorla',
        'enforce_same_egg_description' => 'Etkinleştirildiğinde, yalnızca aynı egg türüne sahip sunucular eşleştirilebilir.',
        'max_pairs' => 'Sunucu Başına Maksimum Çift',
        'max_pairs_description' => 'Tek bir sunucunun katılabileceği maksimum senkronizasyon çifti sayısı.',
        'default_interval' => 'Varsayılan Aralık (dakika)',
        'default_interval_description' => 'Yeni çiftler için varsayılan senkronizasyon aralığı.',
        'min_interval' => 'Minimum Aralık (dakika)',
        'min_interval_description' => 'İzin verilen minimum senkronizasyon aralığı.',
        'max_file_size' => 'Maksimum Arşiv Boyutu (MB)',
        'max_file_size_description' => 'Senkronizasyon arşivi başına maksimum boyut. Aşıldığında, dosyalar otomatik olarak birden fazla gruba bölünür.',
        'concurrent_limit' => 'Eşzamanlı Senkronizasyon Limiti',
        'concurrent_limit_description' => 'Aynı anda çalışabilecek maksimum senkronizasyon sayısı.',
        'log_retention' => 'Günlük Saklama Süresi',
        'log_retention_description' => 'Senkronizasyon günlüklerinin otomatik temizlemeden önce ne kadar süre saklanacağı.',
        'days' => 'gün',
        'saved' => 'Ayarlar başarıyla kaydedildi.',
    ],

    // Log details
    'log' => [
        'title' => 'Senkronizasyon Günlükleri',
        'empty' => 'Senkronizasyon günlüğü bulunamadı.',
        'source' => 'Kaynak',
        'target' => 'Hedef',
        'summary' => 'Özet',
        'summary_synced' => ':files dosya senkronize edildi (:size), süre: :duration',
        'summary_no_changes' => 'Değişiklik algılanmadı — tüm dosyalar güncel',
        'summary_failed' => 'Başarısız: :error',
        'summary_running' => 'Senkronizasyon devam ediyor…',
        'synced_files' => 'Senkronize Edilen Dosyalar',
        'no_file_details' => 'Dosya detayı mevcut değil',
        'excluded_paths' => 'Hariç Tutulan Yollar',
        'no_excludes' => 'Hariç tutma yapılandırılmamış',
        'view_details' => 'Detayları Görüntüle',
        'detail_title' => 'Senkronizasyon Günlük Detayları',
        'detail_sync_info' => 'Senkronizasyon Bilgisi',
        'detail_transfer' => 'Aktarım Detayları',
    ],

    // Server Sync Limit (injected into server create/edit form)
    'server_limit' => [
        'title' => 'Server Sync Limiti',
        'description' => 'Bu sunucunun kaç senkronizasyon çiftine sahip olabileceğini ayarlayın (ana veya alt olarak). Server Sync\'i tamamen devre dışı bırakmak için 0 olarak ayarlayın.',
        'label' => 'Senkronizasyon Çifti Limiti',
        'helper' => 'Bu sunucunun parçası olabileceği maksimum senkronizasyon çifti sayısı. 0 = devre dışı.',
    ],

    // Sync Mode
    'sync_mode' => [
        'label' => 'Senkronizasyon Modu',
        'description' => 'Dosya değişikliklerinin nasıl uygulanacağı.',
        'live' => 'Canlı',
        'on_restart' => 'Yeniden Başlatmada',
        'live_description' => 'Dosyalar, sunucular çalışırken anında senkronize edilir.',
        'on_restart_description' => 'Sunucular senkronizasyondan önce durdurulur ve ardından yeniden başlatılır.',
    ],

    // Schedule integration
    'schedule' => [
        'task_name' => 'Server Sync',
        'create_schedule' => 'Senkronizasyon Zamanlaması Oluştur',
        'select_pair' => 'Senkronizasyon Çifti',
        'select_pair_description' => 'Bu zamanlanmış görevin çalıştırması gereken senkronizasyon çiftini seçin.',
        'schedule_name' => 'Zamanlama Adı',
        'preset' => 'Aralık',
        'preset_hourly' => 'Her saat',
        'preset_every_6h' => 'Her 6 saatte',
        'preset_every_12h' => 'Her 12 saatte',
        'preset_daily' => 'Günlük 00:00\'da',
        'preset_daily_3am' => 'Günlük 03:00\'da',
        'mirror_to_partner' => 'Partner Sunucuya Yansıt',
        'mirror_description' => 'Bu zamanlamayı partner sunucuda da oluşturun, böylece her iki sunucu birlikte dursun, senkronize olsun ve yeniden başlasın.',
        'created' => 'Senkronizasyon zamanlaması başarıyla oluşturuldu.',
        'created_both' => 'Senkronizasyon zamanlaması her iki sunucuda da oluşturuldu.',
    ],

    // File browser
    'file_browser' => [
        'title' => 'Sunucu Dosyalarını Gözat',
        'current_excludes' => 'Hariç Tutulan Yollar',
        'current_excludes_help' => 'Bu yollar şu anda senkronizasyondan hariç tutulmuştur. Girişleri kaldırmak için X\'e tıklayın veya yenilerini eklemek için aşağıdaki tarayıcıyı kullanın.',
        'navigate' => 'Klasörleri Gez',
        'navigate_placeholder' => 'Açmak için bir klasör seçin...',
        'back' => 'Geri',
        'exclude_current' => 'Bu klasörü hariç tut',
        'excluded' => '(hariç tutuldu)',
        'current_path' => 'Geçerli yol',
        'directory' => 'Dizin Gözat',
        'directory_help' => 'Bir dizin yolu girin ve içeriğini görmek için Tab\'a basın. Örnek: mods/ veya config/',
        'select_files' => 'Hariç Tutulacak Dosya ve Klasörleri Seçin',
        'open_folder' => ':name Aç',
        'save_excludes' => 'Hariç Tutmaları Kaydet',
        'excludes_updated' => 'Hariç tutma listesi başarıyla güncellendi.',
    ],

    // User-facing create pair form
    'user_create' => [
        'section_title' => 'Senkronizasyon Çifti Oluştur',
        'section_description' => ':server için yeni bir senkronizasyon çifti oluşturun. Bu sunucunun :max senkronizasyon yuvasından :free tanesi kullanılabilir.',
        'partner_server' => 'Partner Sunucu',
        'partner_server_help' => 'Senkronize etmek istediğiniz sunucuyu seçin. Yalnızca erişiminiz olan ve kullanılabilir senkronizasyon yuvaları bulunan sunucular gösterilir.',
        'slots_free' => 'kullanılabilir',
    ],
];
