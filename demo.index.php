<?php
session_start();

// ====================== ПОВНІ ПЕРЕКЛАДИ НА ВСІ 9 МОВ ======================
$translations = [
    'ru' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'meta_title' => 'iFile — Красивый файловый менеджер для iPhone 16 Pro Max',
        'meta_description' => 'Мощный и невероятно красивый файловый менеджер для iPhone, Android и любых устройств. Многоязычный, бесплатный, с редактором кода.',
        'meta_keywords' => 'ifile, файловый менеджер, iphone file manager, php file manager, мобильный файловый менеджер',
        'hero_title' => 'iFile',
        'hero_subtitle' => 'Самый красивый и мощный файловый менеджер для iPhone 16 Pro Max',
        'hero_button' => 'Открыть iFile прямо сейчас',
        'demo_button' => 'Спробувати демо онлайн',
        'hero_github' => 'GitHub',
        'features_title' => 'Почему миллионы выбирают iFile',
        'feature1_title' => 'Мгновенный доступ',
        'feature1_desc' => 'Открывайте папки и файлы за доли секунды',
        'feature2_title' => 'Встроенный редактор',
        'feature2_desc' => 'Редактируйте PHP, JS, HTML, CSS прямо в браузере',
        'feature3_title' => 'Многоязычный интерфейс',
        'feature3_desc' => '9 языков: русский, украинский, английский и другие',
        'feature4_title' => 'Множественный выбор',
        'feature4_desc' => 'Удаляйте, копируйте и перемещайте десятки файлов сразу',
        'feature5_title' => 'Красивые иконки',
        'feature5_desc' => 'Автоматическое определение типа файла (PDF, ZIP, JPG, DOCX и др.)',
        'feature6_title' => 'Полностью адаптивный',
        'feature6_desc' => 'Идеально работает на iPhone, iPad, Android и ПК',
        'screenshots_title' => 'Как это выглядит',
        'download_title' => 'Готовы попробовать?',
        'download_button' => 'Запустить iFile бесплатно',
        'github_button' => 'Открыть на GitHub',
        'footer_text' => 'iFile v1.0 • Сделано с ❤️ для мобильных пользователей',
        'back' => 'Назад'
    ],
    'uk' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'meta_title' => 'iFile — Найкращий файловий менеджер для iPhone 16 Pro Max',
        'meta_description' => 'Потужний та неймовірно красивий файловий менеджер для iPhone, Android та всіх пристроїв. Багатомовний, безкоштовний, з редактором коду.',
        'meta_keywords' => 'ifile, файловий менеджер, iphone file manager, php файловий менеджер',
        'hero_title' => 'iFile',
        'hero_subtitle' => 'Найкрасивіший та найпотужніший файловий менеджер для iPhone 16 Pro Max',
        'hero_button' => 'Відкрити iFile зараз',
        'demo_button' => 'Спробувати демо онлайн',
        'hero_github' => 'GitHub',
        'features_title' => 'Чому мільйони обирають iFile',
        'feature1_title' => 'Миттєвий доступ',
        'feature1_desc' => 'Відкривайте папки та файли за частки секунди',
        'feature2_title' => 'Вбудований редактор',
        'feature2_desc' => 'Редагуйте PHP, JS, HTML, CSS прямо в браузері',
        'feature3_title' => 'Багатомовний інтерфейс',
        'feature3_desc' => '9 мов: українська, російська, англійська та інші',
        'feature4_title' => 'Множинний вибір',
        'feature4_desc' => 'Видаляйте та копіюйте десятки файлів одночасно',
        'feature5_title' => 'Красиві іконки',
        'feature5_desc' => 'Автоматичне розпізнавання форматів (PDF, ZIP, JPG, DOCX)',
        'feature6_title' => 'Повністю адаптивний',
        'feature6_desc' => 'Ідеально працює на iPhone, iPad, Android та ПК',
        'screenshots_title' => 'Як це виглядає',
        'download_title' => 'Готові спробувати?',
        'download_button' => 'Запустити iFile безкоштовно',
        'github_button' => 'Відкрити на GitHub',
        'footer_text' => 'iFile v1.0 • Зроблено з ❤️ для мобільних користувачів',
        'back' => 'Назад'
    ],
    'en' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'meta_title' => 'iFile — Beautiful File Manager for iPhone 16 Pro Max',
        'meta_description' => 'Powerful, fast and stunning file manager for iPhone, Android and any device.',
        'meta_keywords' => 'ifile, file manager, iphone file manager, php file manager',
        'hero_title' => 'iFile',
        'hero_subtitle' => 'The most beautiful and powerful file manager for iPhone 16 Pro Max',
        'hero_button' => 'Open iFile Now',
        'demo_button' => 'Try Demo Online',
        'hero_github' => 'GitHub',
        'features_title' => 'Why millions choose iFile',
        'feature1_title' => 'Instant Access',
        'feature1_desc' => 'Open folders and files in a split second',
        'feature2_title' => 'Built-in Editor',
        'feature2_desc' => 'Edit PHP, JS, HTML, CSS directly in browser',
        'feature3_title' => '9 Languages',
        'feature3_desc' => 'Russian, Ukrainian, English and 6 more',
        'feature4_title' => 'Multi-select',
        'feature4_desc' => 'Delete, copy and move dozens of files at once',
        'feature5_title' => 'Smart Icons',
        'feature5_desc' => 'Auto-detect PDF, ZIP, JPG, DOCX, PHP and more',
        'feature6_title' => 'Fully Responsive',
        'feature6_desc' => 'Perfect on iPhone, iPad, Android and Desktop',
        'screenshots_title' => 'See it in action',
        'download_title' => 'Ready to try?',
        'download_button' => 'Launch iFile Free',
        'github_button' => 'View on GitHub',
        'footer_text' => 'iFile v1.0 • Made with ❤️ for mobile users',
        'back' => 'Back'
    ],
    'de' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'meta_title' => 'iFile — Schöner Dateimanager für iPhone 16 Pro Max',
        'meta_description' => 'Leistungsstarker und wunderschöner Dateimanager für iPhone und alle Geräte.',
        'meta_keywords' => 'ifile, dateimanager',
        'hero_title' => 'iFile',
        'hero_subtitle' => 'Der schönste Dateimanager für iPhone 16 Pro Max',
        'hero_button' => 'iFile jetzt öffnen',
        'demo_button' => 'Demo online testen',
        'hero_github' => 'GitHub',
        'features_title' => 'Warum Millionen iFile wählen',
        'feature1_title' => 'Sofortiger Zugriff',
        'feature1_desc' => 'Öffnen Sie Ordner in Sekunden',
        'feature2_title' => 'Integrierter Editor',
        'feature2_desc' => 'Code direkt im Browser bearbeiten',
        'feature3_title' => '9 Sprachen',
        'feature3_desc' => 'Deutsch, Englisch und mehr',
        'feature4_title' => 'Mehrfachauswahl',
        'feature4_desc' => 'Viele Dateien gleichzeitig verwalten',
        'feature5_title' => 'Schöne Icons',
        'feature5_desc' => 'Automatische Format-Erkennung',
        'feature6_title' => 'Voll responsiv',
        'feature6_desc' => 'Perfekt auf jedem Gerät',
        'screenshots_title' => 'So sieht es aus',
        'download_title' => 'Bereit zum Ausprobieren?',
        'download_button' => 'iFile kostenlos starten',
        'github_button' => 'Auf GitHub ansehen',
        'footer_text' => 'iFile v1.0 • Mit ❤️ gemacht',
        'back' => 'Zurück'
    ],
    'pl' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'meta_title' => 'iFile — Najpiękniejszy menedżer plików',
        'meta_description' => 'Potężny menedżer plików dla iPhone i wszystkich urządzeń.',
        'meta_keywords' => 'ifile, menedżer plików',
        'hero_title' => 'iFile',
        'hero_subtitle' => 'Najpiękniejszy menedżer plików dla iPhone',
        'hero_button' => 'Otwórz iFile teraz',
        'demo_button' => 'Wypróbuj demo online',
        'hero_github' => 'GitHub',
        'features_title' => 'Dlaczego miliony wybierają iFile',
        'feature1_title' => 'Błyskawiczny dostęp',
        'feature1_desc' => 'Otwieraj foldery w mgnieniu oka',
        'feature2_title' => 'Wbudowany edytor',
        'feature2_desc' => 'Edytuj kod w przeglądarce',
        'feature3_title' => '9 języków',
        'feature3_desc' => 'Polski, angielski i więcej',
        'feature4_title' => 'Wybór wielokrotny',
        'feature4_desc' => 'Zarządzaj wieloma plikami',
        'feature5_title' => 'Piękne ikony',
        'feature5_desc' => 'Automatyczne rozpoznawanie formatów',
        'feature6_title' => 'W pełni responsywny',
        'feature6_desc' => 'Działa idealnie wszędzie',
        'screenshots_title' => 'Jak to wygląda',
        'download_title' => 'Gotowy do wypróbowania?',
        'download_button' => 'Uruchom iFile za darmo',
        'github_button' => 'Zobacz na GitHub',
        'footer_text' => 'iFile v1.0 • Zrobione z ❤️',
        'back' => 'Wstecz'
    ],
    'lt' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'meta_title' => 'iFile — Gražiausias failų tvarkytuvas',
        'meta_description' => 'Galingas failų tvarkytuvas visiems įrenginiams.',
        'meta_keywords' => 'ifile, failų tvarkytuvas',
        'hero_title' => 'iFile',
        'hero_subtitle' => 'Gražiausias failų tvarkytuvas iPhone',
        'hero_button' => 'Atidaryti iFile dabar',
        'demo_button' => 'Išbandyti demo online',
        'hero_github' => 'GitHub',
        'features_title' => 'Kodėl milijonai renkasi iFile',
        'feature1_title' => 'Momentinis prieiga',
        'feature1_desc' => 'Atidarykite aplankus akimirksniu',
        'feature2_title' => 'Integruotas redaktorius',
        'feature2_desc' => 'Redaguokite kodą naršyklėje',
        'feature3_title' => '9 kalbos',
        'feature3_desc' => 'Lietuvių, anglų ir kt.',
        'feature4_title' => 'Daugybinis pasirinkimas',
        'feature4_desc' => 'Tvarkykite daug failų iš karto',
        'feature5_title' => 'Gražios piktogramos',
        'feature5_desc' => 'Automatinis formatų atpažinimas',
        'feature6_title' => 'Pilnai pritaikomas',
        'feature6_desc' => 'Veikia tobulai visuose įrenginiuose',
        'screenshots_title' => 'Kaip tai atrodo',
        'download_title' => 'Pasiruošę išbandyti?',
        'download_button' => 'Paleisti iFile nemokamai',
        'github_button' => 'Žiūrėti GitHub',
        'footer_text' => 'iFile v1.0 • Sukurta su ❤️',
        'back' => 'Atgal'
    ],
    'no' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'meta_title' => 'iFile — Vakker filbehandler for iPhone',
        'meta_description' => 'Kraftig filbehandler for alle enheter.',
        'meta_keywords' => 'ifile, filbehandler',
        'hero_title' => 'iFile',
        'hero_subtitle' => 'Den vakreste filbehandleren',
        'hero_button' => 'Åpne iFile nå',
        'demo_button' => 'Prøv demo online',
        'hero_github' => 'GitHub',
        'features_title' => 'Hvorfor millioner velger iFile',
        'feature1_title' => 'Lynrask tilgang',
        'feature1_desc' => 'Åpne mapper på et blunk',
        'feature2_title' => 'Innebygd editor',
        'feature2_desc' => 'Rediger kode i nettleseren',
        'feature3_title' => '9 språk',
        'feature3_desc' => 'Norsk, engelsk og flere',
        'feature4_title' => 'Flervalg',
        'feature4_desc' => 'Administrer mange filer samtidig',
        'feature5_title' => 'Fine ikoner',
        'feature5_desc' => 'Automatisk filtype-gjenkjenning',
        'feature6_title' => 'Helt responsiv',
        'feature6_desc' => 'Perfekt på alle enheter',
        'screenshots_title' => 'Slik ser det ut',
        'download_title' => 'Klar til å prøve?',
        'download_button' => 'Start iFile gratis',
        'github_button' => 'Se på GitHub',
        'footer_text' => 'iFile v1.0 • Laget med ❤️',
        'back' => 'Tilbake'
    ],
    'sv' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'meta_title' => 'iFile — Vackraste filhanteraren',
        'meta_description' => 'Kraftfull filhanterare för alla enheter.',
        'meta_keywords' => 'ifile, filhanterare',
        'hero_title' => 'iFile',
        'hero_subtitle' => 'Den vackraste filhanteraren',
        'hero_button' => 'Öppna iFile nu',
        'demo_button' => 'Testa demo online',
        'hero_github' => 'GitHub',
        'features_title' => 'Varför miljoner väljer iFile',
        'feature1_title' => 'Blixtsnabb åtkomst',
        'feature1_desc' => 'Öppna mappar på en sekund',
        'feature2_title' => 'Inbyggd editor',
        'feature2_desc' => 'Redigera kod direkt i webbläsaren',
        'feature3_title' => '9 språk',
        'feature3_desc' => 'Svenska, engelska och fler',
        'feature4_title' => 'Flera filer',
        'feature4_desc' => 'Hantera många filer samtidigt',
        'feature5_title' => 'Snygga ikoner',
        'feature5_desc' => 'Automatisk filtyp-detektering',
        'feature6_title' => 'Helt responsiv',
        'feature6_desc' => 'Fungerar perfekt överallt',
        'screenshots_title' => 'Så här ser det ut',
        'download_title' => 'Redo att testa?',
        'download_button' => 'Starta iFile gratis',
        'github_button' => 'Visa på GitHub',
        'footer_text' => 'iFile v1.0 • Skapad med ❤️',
        'back' => 'Tillbaka'
    ],
    'ka' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'meta_title' => 'iFile — ულამაზესი ფაილების მმართველი',
        'meta_description' => 'ძლიერი ფაილების მმართველი ყველა მოწყობილობისთვის.',
        'meta_keywords' => 'ifile, ფაილების მმართველი',
        'hero_title' => 'iFile',
        'hero_subtitle' => 'ყველაზე ულამაზესი ფაილების მმართველი',
        'hero_button' => 'გახსენი iFile ახლა',
        'demo_button' => 'სცადე დემო ონლაინ',
        'hero_github' => 'GitHub',
        'features_title' => 'რატომ ირჩევენ მილიონები iFile-ს',
        'feature1_title' => 'მყისიერი წვდომა',
        'feature1_desc' => 'გახსენით საქაღალდეები წამებში',
        'feature2_title' => 'ჩაშენებული რედაქტორი',
        'feature2_desc' => 'რედაქტირება ბრაუზერში',
        'feature3_title' => '9 ენა',
        'feature3_desc' => 'ქართული, რუსული, ინგლისური',
        'feature4_title' => 'მრავალჯერადი არჩევა',
        'feature4_desc' => 'მართეთ ათობით ფაილი ერთდროულად',
        'feature5_title' => 'ლამაზი ხატულები',
        'feature5_desc' => 'ავტომატური ფორმატების ამოცნობა',
        'feature6_title' => 'სრულიად ადაპტირებული',
        'feature6_desc' => 'იდეალურად მუშაობს ყველგან',
        'screenshots_title' => 'როგორ გამოიყურება',
        'download_title' => 'მზად ხართ?',
        'download_button' => 'გაუშვით iFile უფასოდ',
        'github_button' => 'ნახეთ GitHub-ზე',
        'footer_text' => 'iFile v1.0 • შექმნილია ❤️-ით',
        'back' => 'უკან'
    ]
];

if (isset($_GET['lang'])) { $_SESSION['lang'] = $_GET['lang']; header("Location: readme.php"); exit; }
$lang = $_SESSION['lang'] ?? 'uk';

function t($key) {
    global $translations, $lang;
    return $translations[$lang][$key] ?? $translations['en'][$key] ?? $key;
}
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= htmlspecialchars(t('meta_description')) ?>">
    <meta name="keywords" content="<?= htmlspecialchars(t('meta_keywords')) ?>">
    <title><?= t('meta_title') ?></title>
    <meta property="og:title" content="<?= t('meta_title') ?>">
    <meta property="og:description" content="<?= htmlspecialchars(t('meta_description')) ?>">
    <meta property="og:image" content="https://edukvam.com/git/ifile/ifile.jpg">

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;family=Space+Grotesk:wght@500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&family=Space+Grotesk:wght@500;600;700&display=swap');
        body { font-family: 'Inter', system_ui, sans-serif; }
        .hero-font { font-family: 'Space Grotesk', sans-serif; }
        .glass { background: rgba(255,255,255,0.07); backdrop-filter: blur(24px); }
        .screenshot { transition: all 0.5s cubic-bezier(0.4,0,0.2,1); }
        .screenshot:hover { transform: scale(1.06) rotate(2deg); }
    </style>
</head>
<body class="bg-zinc-950 text-white overflow-x-hidden">

    <!-- NAVBAR -->
    <nav class="fixed top-0 inset-x-0 z-50 glass border-b border-white/10">
        <div class="max-w-7xl mx-auto px-6 py-5 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <span class="material-symbols-outlined text-4xl text-blue-500">folder_open</span>
                <span class="text-3xl font-bold tracking-tighter hero-font"><?= t('app_name') ?></span>
            </div>
            <div class="flex items-center gap-8">
                <a href="https://github.com/Ruslan-Bilohash/iFile" target="_blank" class="flex items-center gap-2 text-lg hover:text-blue-400 transition">
                    <span class="material-symbols-outlined">code</span> <?= t('hero_github') ?>
                </a>
                <select onchange="location='readme.php?lang='+this.value" class="bg-zinc-900 border border-white/20 rounded-3xl px-6 py-3 text-lg">
                    <option value="uk" <?= $lang=='uk'?'selected':'' ?>>🇺🇦 Українська</option>
                    <option value="ru" <?= $lang=='ru'?'selected':'' ?>>🇷🇺 Русский</option>
                    <option value="en" <?= $lang=='en'?'selected':'' ?>>🇬🇧 English</option>
                    <option value="de" <?= $lang=='de'?'selected':'' ?>>🇩🇪 Deutsch</option>
                    <option value="pl" <?= $lang=='pl'?'selected':'' ?>>🇵🇱 Polski</option>
                    <option value="lt" <?= $lang=='lt'?'selected':'' ?>>🇱🇹 Lietuvių</option>
                    <option value="no" <?= $lang=='no'?'selected':'' ?>>🇳🇴 Norsk</option>
                    <option value="sv" <?= $lang=='sv'?'selected':'' ?>>🇸🇪 Svenska</option>
                    <option value="ka" <?= $lang=='ka'?'selected':'' ?>>🇬🇪 ქართული</option>
                </select>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <section class="min-h-screen pt-28 flex items-center relative overflow-hidden">
        <div class="absolute inset-0 bg-[radial-gradient(at_50%_30%,rgba(59,130,246,0.18),transparent_70%)]"></div>
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <div class="inline-flex items-center gap-3 bg-white/5 border border-white/10 rounded-full px-6 py-2 text-sm">
                    <span class="text-emerald-400">●</span> v<?= t('version') ?> — Free &amp; Open Source
                </div>
                <h1 class="text-7xl md:text-8xl font-black tracking-tighter leading-none hero-font"><?= t('hero_title') ?></h1>
                <p class="text-3xl text-zinc-400 max-w-lg"><?= t('hero_subtitle') ?></p>

                <div class="flex flex-wrap gap-5">
                    <a href="https://edukvam.com/git/ifile/ifile.php" target="_blank" class="bg-gradient-to-r from-cyan-500 to-blue-600 text-white font-semibold text-2xl px-12 py-7 rounded-3xl hover:scale-105 active:scale-95 transition flex items-center gap-4">
                        <span class="material-symbols-outlined text-4xl">play_arrow</span>
                        <?= t('demo_button') ?>
                    </a>
                    <a href="https://github.com/Ruslan-Bilohash/iFile" target="_blank" class="border border-white/30 hover:border-white/70 font-medium text-2xl px-10 py-7 rounded-3xl transition flex items-center gap-4">
                        <span class="material-symbols-outlined">code</span> <?= t('hero_github') ?>
                    </a>
                </div>
                <p class="text-zinc-500 text-sm">Пароль для входу: <span class="font-mono bg-zinc-900 px-3 py-1 rounded-xl">12345</span></p>
            </div>

            <div class="relative mx-auto md:mx-0">
                <img src="https://edukvam.com/git/ifile/ifile.jpg" alt="iFile on iPhone" class="w-[380px] rounded-[60px] shadow-2xl border-8 border-zinc-900">
                <div class="absolute -top-6 -right-6 bg-blue-600 text-white text-xs font-bold px-6 py-2 rounded-3xl shadow-xl">iPhone 16 Pro Max</div>
            </div>
        </div>
    </section>

    <!-- FEATURES -->
    <section class="py-24 bg-zinc-900">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-5xl font-bold text-center mb-16"><?= t('features_title') ?></h2>
            <div class="grid md:grid-cols-3 gap-8">
                <?php for($i=1; $i<=6; $i++): ?>
                <div class="bg-zinc-950 border border-white/10 rounded-3xl p-10 hover:border-blue-500/30 transition group">
                    <div class="w-16 h-16 bg-blue-500/10 rounded-2xl flex items-center justify-center mb-8 group-hover:scale-110 transition">
                        <span class="material-symbols-outlined text-5xl text-blue-400">flash_on</span>
                    </div>
                    <h3 class="text-3xl font-semibold mb-4"><?= t('feature'.$i.'_title') ?></h3>
                    <p class="text-zinc-400 text-lg"><?= t('feature'.$i.'_desc') ?></p>
                </div>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <!-- SCREENSHOTS -->
    <section class="py-24">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-5xl font-bold text-center mb-16"><?= t('screenshots_title') ?></h2>
            <div class="grid md:grid-cols-4 gap-6">
                <img src="https://edukvam.com/git/ifile/ifile.jpg" class="screenshot rounded-3xl shadow-2xl" alt="Screenshot 1">
                <img src="https://edukvam.com/git/ifile/ifile2.jpg" class="screenshot rounded-3xl shadow-2xl" alt="Screenshot 2">
                <img src="https://edukvam.com/git/ifile/ifile3.jpg" class="screenshot rounded-3xl shadow-2xl" alt="Screenshot 3">
   
            </div>
        </div>
    </section>

    <!-- DOWNLOAD CTA -->
    <section class="py-32 bg-gradient-to-b from-transparent via-blue-950 to-transparent">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-6xl font-black tracking-tighter mb-6"><?= t('download_title') ?></h2>
            <a href="https://edukvam.com/git/ifile/ifile.php" target="_blank" class="inline-block bg-gradient-to-r from-blue-600 to-cyan-500 text-3xl font-bold px-20 py-9 rounded-3xl hover:scale-105 transition shadow-2xl">
                <?= t('download_button') ?>
            </a>
            <p class="mt-10 text-zinc-500">v<?= t('version') ?> • 100% free • no registration</p>
        </div>
    </section>

    <!-- FOOTER -->
    <footer class="bg-black py-20 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row justify-between items-center gap-8">
            <div>
                <div class="flex items-center gap-3">
                    <span class="material-symbols-outlined text-4xl text-blue-500">folder_open</span>
                    <span class="text-3xl font-bold tracking-tighter"><?= t('app_name') ?></span>
                </div>
                <p class="text-zinc-500 mt-3"><?= t('footer_text') ?></p>
            </div>
            <div class="flex gap-8 text-sm">
                <a href="https://github.com/Ruslan-Bilohash/iFile" target="_blank" class="hover:text-white transition"><?= t('github_button') ?></a>
                <a href="#" class="hover:text-white transition">Privacy</a>
                <a href="mailto:rbilohash@gmail.com" class="hover:text-white transition">Support</a>
            </div>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({ behavior: 'smooth' });
            });
        });
    </script>
</body>
</html>
