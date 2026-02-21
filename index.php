<?php
session_start();

// ====================== 9 ЯЗЫКОВ ======================
$translations = [
    'ru' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'login_title' => 'Вход — iFile',
        'password' => 'Пароль',
        'open_manager' => 'Открыть менеджер',
        'new_folder' => 'Новая папка',
        'new_file' => 'Новый файл',
        'upload' => 'Загрузить',
        'logout' => 'Выход',
        'space' => 'Место',
        'home' => 'Главная',
        'select_all' => 'Выделить всё',
        'copy' => 'Копировать',
        'paste' => 'Вставить',
        'cut' => 'Вырезать',
        'save' => 'Сохранить',
        'cancel' => 'Отмена',
        'file_saved' => '✅ Файл успешно сохранён',
        'copied' => '📋 Текст скопирован',
        'cut_text' => '✂️ Текст вырезан',
        'pasted' => '📋 Вставлено',
        'help_title' => 'Справка',
        'help_text' => "iFile — удобный файловый менеджер для iPhone 16 Pro Max и всех мобильных.\n\n• Нажми Главная — вернуться в корень\n• Нажми папку — открыть\n• Нажми файл — редактировать\n• Кнопка в шапке — множественный выбор",
        'footer' => 'iFile v1.0 Multilang • '
    ],
    'uk' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'login_title' => 'Вхід — iFile',
        'password' => 'Пароль',
        'open_manager' => 'Відкрити менеджер',
        'new_folder' => 'Нова папка',
        'new_file' => 'Новий файл',
        'upload' => 'Завантажити',
        'logout' => 'Вихід',
        'space' => 'Місце',
        'home' => 'Головна',
        'select_all' => 'Виділити все',
        'copy' => 'Копіювати',
        'paste' => 'Вставити',
        'cut' => 'Вирізати',
        'save' => 'Зберегти',
        'cancel' => 'Скасувати',
        'file_saved' => '✅ Файл успішно збережено',
        'copied' => '📋 Текст скопійовано',
        'cut_text' => '✂️ Текст вирізано',
        'pasted' => '📋 Вставлено',
        'help_title' => 'Довідка',
        'help_text' => "iFile — зручний файловий менеджер для iPhone.\n\n• Головна — повернутися в корінь\n• Натисни папку — відкрити\n• Натисни файл — редагувати",
        'footer' => 'iFile v1.0 Multilang • '
    ],
    'en' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'login_title' => 'Login — iFile',
        'password' => 'Password',
        'open_manager' => 'Open Manager',
        'new_folder' => 'New Folder',
        'new_file' => 'New File',
        'upload' => 'Upload',
        'logout' => 'Logout',
        'space' => 'Space',
        'home' => 'Home',
        'select_all' => 'Select All',
        'copy' => 'Copy',
        'paste' => 'Paste',
        'cut' => 'Cut',
        'save' => 'Save',
        'cancel' => 'Cancel',
        'file_saved' => '✅ File saved',
        'copied' => '📋 Text copied',
        'cut_text' => '✂️ Text cut',
        'pasted' => '📋 Pasted',
        'help_title' => 'Help',
        'help_text' => "iFile — convenient file manager for iPhone 16 Pro Max.\n\n• Home button — go to root\n• Tap folder to open\n• Tap file to edit",
        'footer' => 'iFile v1.0 Multilang • '
    ],
    'de' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'login_title' => 'Anmelden — iFile',
        'password' => 'Passwort',
        'open_manager' => 'Manager öffnen',
        'new_folder' => 'Neuer Ordner',
        'new_file' => 'Neue Datei',
        'upload' => 'Hochladen',
        'logout' => 'Abmelden',
        'space' => 'Speicher',
        'home' => 'Start',
        'select_all' => 'Alles auswählen',
        'copy' => 'Kopieren',
        'paste' => 'Einfügen',
        'cut' => 'Ausschneiden',
        'save' => 'Speichern',
        'cancel' => 'Abbrechen',
        'file_saved' => '✅ Datei gespeichert',
        'copied' => '📋 Text kopiert',
        'cut_text' => '✂️ Text ausgeschnitten',
        'pasted' => '📋 Eingefügt',
        'help_title' => 'Hilfe',
        'help_text' => "iFile — bequemer Dateimanager für iPhone.\n\n• Home-Taste — zum Root\n• Ordner antippen\n• Datei antippen zum Bearbeiten",
        'footer' => 'iFile v1.0 Multilang • '
    ],
    'pl' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'login_title' => 'Logowanie — iFile',
        'password' => 'Hasło',
        'open_manager' => 'Otwórz menedżer',
        'new_folder' => 'Nowy folder',
        'new_file' => 'Nowy plik',
        'upload' => 'Prześlij',
        'logout' => 'Wyloguj',
        'space' => 'Miejsce',
        'home' => 'Główna',
        'select_all' => 'Zaznacz wszystko',
        'copy' => 'Kopiuj',
        'paste' => 'Wklej',
        'cut' => 'Wytnij',
        'save' => 'Zapisz',
        'cancel' => 'Anuluj',
        'file_saved' => '✅ Plik zapisany',
        'copied' => '📋 Tekst skopiowany',
        'cut_text' => '✂️ Tekst wycięty',
        'pasted' => '📋 Wklejono',
        'help_title' => 'Pomoc',
        'help_text' => "iFile — wygodny menedżer plików dla iPhone.\n\n• Przycisk Główna — powrót do root\n• Dotknij folderu\n• Dotknij pliku by edytować",
        'footer' => 'iFile v1.0 Multilang • '
    ],
    'lt' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'login_title' => 'Prisijungimas — iFile',
        'password' => 'Slaptažodis',
        'open_manager' => 'Atidaryti tvarkyklę',
        'new_folder' => 'Naujas aplankas',
        'new_file' => 'Naujas failas',
        'upload' => 'Įkelti',
        'logout' => 'Atsijungti',
        'space' => 'Vieta',
        'home' => 'Pagrindinis',
        'select_all' => 'Pasirinkti visus',
        'copy' => 'Kopijuoti',
        'paste' => 'Įklijuoti',
        'cut' => 'Iškirpti',
        'save' => 'Išsaugoti',
        'cancel' => 'Atšaukti',
        'file_saved' => '✅ Failas išsaugotas',
        'copied' => '📋 Tekstas nukopijuotas',
        'cut_text' => '✂️ Tekstas iškirstas',
        'pasted' => '📋 Įklijuota',
        'help_title' => 'Pagalba',
        'help_text' => "iFile — patogus failų tvarkytuvas iPhone.\n\n• Mygtukas Pagrindinis — grįžti į šaknį\n• Bakstelėkite aplanką\n• Bakstelėkite failą redaguoti",
        'footer' => 'iFile v1.0 Multilang • '
    ],
    'no' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'login_title' => 'Logg inn — iFile',
        'password' => 'Passord',
        'open_manager' => 'Åpne filbehandler',
        'new_folder' => 'Ny mappe',
        'new_file' => 'Ny fil',
        'upload' => 'Last opp',
        'logout' => 'Logg ut',
        'space' => 'Lagringsplass',
        'home' => 'Hjem',
        'select_all' => 'Velg alle',
        'copy' => 'Kopier',
        'paste' => 'Lim inn',
        'cut' => 'Klipp ut',
        'save' => 'Lagre',
        'cancel' => 'Avbryt',
        'file_saved' => '✅ Fil lagret',
        'copied' => '📋 Tekst kopiert',
        'cut_text' => '✂️ Tekst klippet ut',
        'pasted' => '📋 Limt inn',
        'help_title' => 'Hjelp',
        'help_text' => "iFile — praktisk filbehandler for iPhone.\n\n• Hjem-knapp — tilbake til rot\n• Trykk på mappe\n• Trykk på fil for å redigere",
        'footer' => 'iFile v1.0 Multilang • '
    ],
    'sv' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'login_title' => 'Logga in — iFile',
        'password' => 'Lösenord',
        'open_manager' => 'Öppna filhanterare',
        'new_folder' => 'Ny mapp',
        'new_file' => 'Ny fil',
        'upload' => 'Ladda upp',
        'logout' => 'Logga ut',
        'space' => 'Utrymme',
        'home' => 'Hem',
        'select_all' => 'Markera alla',
        'copy' => 'Kopiera',
        'paste' => 'Klistra in',
        'cut' => 'Klipp ut',
        'save' => 'Spara',
        'cancel' => 'Avbryt',
        'file_saved' => '✅ Fil sparad',
        'copied' => '📋 Text kopierad',
        'cut_text' => '✂️ Text klippt ut',
        'pasted' => '📋 Klistrat in',
        'help_title' => 'Hjälp',
        'help_text' => "iFile — bekväm filhanterare för iPhone.\n\n• Hem-knappen — tillbaka till rot\n• Tryck på mapp\n• Tryck på fil för att redigera",
        'footer' => 'iFile v1.0 Multilang • '
    ],
    'ka' => [
        'app_name' => 'iFile',
        'version' => '1.0',
        'login_title' => 'შესვლა — iFile',
        'password' => 'პაროლი',
        'open_manager' => 'გახსენი მმართველი',
        'new_folder' => 'ახალი საქაღალდე',
        'new_file' => 'ახალი ფაილი',
        'upload' => 'ატვირთვა',
        'logout' => 'გამოსვლა',
        'space' => 'ადგილი',
        'home' => 'მთავარი',
        'select_all' => 'ყველაფერი აირჩიე',
        'copy' => 'კოპირება',
        'paste' => 'ჩასმა',
        'cut' => 'ამოჭრა',
        'save' => 'შენახვა',
        'cancel' => 'გაუქმება',
        'file_saved' => '✅ ფაილი შენახულია',
        'copied' => '📋 ტექსტი კოპირებულია',
        'cut_text' => '✂️ ტექსტი ამოჭრილია',
        'pasted' => '📋 ჩასმულია',
        'help_title' => 'დახმარება',
        'help_text' => "iFile — მოსახერხებელი ფაილების მმართველი iPhone-ისთვის.\n\n• ღილაკი მთავარი — დაბრუნდება ძირში\n• დააჭირეთ საქაღალდეს\n• დააჭირეთ ფაილს რედაქტირებისთვის",
        'footer' => 'iFile v1.0 Multilang • '
    ]
];

function t($key) {
    global $translations;
    $lang = $_SESSION['lang'] ?? 'ru';
    return $translations[$lang][$key] ?? $translations['ru'][$key] ?? $key;
}

// ====================== CSP ======================
header("Content-Security-Policy: default-src 'self' 'unsafe-inline' 'unsafe-eval'; script-src 'self' 'unsafe-inline' 'unsafe-eval'; style-src 'self' 'unsafe-inline';");

// ====================== ЛОГИН ======================
$PASSWORD = "admin123"; // ← ИЗМЕНИ СРАЗУ!
$TITLE = t('app_name');

if (isset($_GET['logout'])) { session_destroy(); header("Location: ifile.php"); exit; }
if (isset($_POST['login'])) { if ($_POST['password'] === $PASSWORD) $_SESSION['logged_in'] = true; }

if (!isset($_SESSION['logged_in'])) {
    echo '<!DOCTYPE html><html lang="'.($_SESSION['lang']??'ru').'"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>'.t('login_title').'</title>';
    echo '<script src="https://cdn.tailwindcss.com"></script><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />';
    echo '</head><body class="bg-zinc-950 text-white min-h-screen flex items-center justify-center p-6">';
    echo '<div class="w-full max-w-[380px] text-center"><span class="material-symbols-outlined text-[130px] text-blue-500">folder_open</span>';
    echo '<h1 class="text-5xl font-bold tracking-tight mt-4">'.$TITLE.'</h1><p class="text-zinc-400 mt-2">v'.t('version').'</p>';
    echo '<form method="POST" class="mt-10"><input type="password" name="password" placeholder="'.t('password').'" class="w-full bg-zinc-900 border border-zinc-700 rounded-3xl px-8 py-6 text-2xl text-center outline-none">';
    echo '<button type="submit" name="login" class="mt-6 w-full bg-blue-600 hover:bg-blue-500 active:scale-95 py-6 rounded-3xl text-2xl font-semibold">'.t('open_manager').'</button></form></div></body></html>';
    exit;
}

// ====================== ЯЗЫК ======================
if (isset($_GET['lang'])) { $_SESSION['lang'] = $_GET['lang']; header("Location: ifile.php"); exit; }
$lang = $_SESSION['lang'] ?? 'ru';

// ====================== AJAX ======================
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    header('Content-Type: application/json');
    $action = $_POST['action'];
    $rel = $_POST['relpath'] ?? '';
    $base = realpath(__DIR__);
    $target = realpath($base . ($rel ? '/' . $rel : ''));
    if (!$target || strpos($target, $base) !== 0) {
        echo json_encode(['success' => false, 'msg' => 'Доступ запрещён']);
        exit;
    }
    switch ($action) {
        case 'list':
            $items = [];
            foreach (scandir($target) as $f) {
                if ($f === '.' || $f === '..') continue;
                $p = $target . '/' . $f;
                $items[] = ['name' => $f, 'dir' => is_dir($p), 'size' => is_dir($p) ? 0 : filesize($p), 'ext' => strtolower(pathinfo($f, PATHINFO_EXTENSION))];
            }
            usort($items, fn($a, $b) => $b['dir'] <=> $a['dir'] ?: strcasecmp($a['name'], $b['name']));
            echo json_encode(['success' => true, 'items' => $items]);
            break;
        case 'getfile':
            $content = file_exists($target) ? file_get_contents($target) : '';
            echo json_encode(['success' => true, 'content' => $content]);
            break;
        case 'save':
            if (file_put_contents($target, $_POST['content'] ?? '') !== false) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false, 'msg' => 'Ошибка записи']);
            }
            break;
        case 'mkdir':
            $name = trim($_POST['name'] ?? '');
            if ($name) mkdir($target . '/' . $name, 0755, true);
            echo json_encode(['success' => true]);
            break;
        case 'mkfile':
            $name = trim($_POST['name'] ?? '');
            if ($name) file_put_contents($target . '/' . $name, '');
            echo json_encode(['success' => true]);
            break;
        case 'rename':
            $old = $_POST['old'] ?? '';
            $new = trim($_POST['new'] ?? '');
            if ($old && $new) rename($target . '/' . $old, $target . '/' . $new);
            echo json_encode(['success' => true]);
            break;
        case 'delete':
            $name = $_POST['name'] ?? '';
            if ($name) {
                $p = $target . '/' . $name;
                if (is_dir($p)) {
                    function rrmdir($dir) {
                        foreach (scandir($dir) as $f) if ($f !== '.' && $f !== '..') { $fp = $dir . '/' . $f; is_dir($fp) ? rrmdir($fp) : unlink($fp); }
                        rmdir($dir);
                    }
                    rrmdir($p);
                } else unlink($p);
            }
            echo json_encode(['success' => true]);
            break;
        case 'upload':
            $count = 0;
            if (isset($_FILES['files'])) {
                foreach ($_FILES['files']['tmp_name'] as $k => $tmp) {
                    if ($tmp && $_FILES['files']['error'][$k] === 0) {
                        $dest = $target . '/' . basename($_FILES['files']['name'][$k]);
                        if (move_uploaded_file($tmp, $dest)) $count++;
                    }
                }
            }
            echo json_encode(['success' => true, 'uploaded' => $count]);
            break;
    }
    exit;
}

// ====================== DISK USAGE ======================
$total_space = disk_total_space(__DIR__);
$free_space = disk_free_space(__DIR__);
$used_percent = $total_space ? round((($total_space - $free_space) / $total_space) * 100, 1) : 0;
$used_gb = round(($total_space - $free_space) / 1024 / 1024 / 1024, 2);
$total_gb = round($total_space / 1024 / 1024 / 1024, 2);
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <title><?= t('app_name') ?> — iPhone 16 Pro Max</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {font-family: 'Inter', system-ui, sans-serif;}
        .safe-top { padding-top: max(1.25rem, env(safe-area-inset-top)); }
        .safe-bottom { padding-bottom: max(1.25rem, env(safe-area-inset-bottom)); }
        .list-item {display:flex;align-items:center;padding:14px 18px;background:#18181b;border-bottom:1px solid #27272a;min-height:72px;transition:background 0.2s;}
        .list-item:active {background:#27272a;}
        #editorTA {font-family:ui-monospace,"SF Mono",Menlo,Consolas,monospace;font-size:21px;line-height:1.65;background:#05050a;color:#ffffff;padding:25px 18px;width:100%;height:100%;border:none;outline:none;resize:none;caret-color:#22d3ee;}
        #toast {position:fixed;bottom:120px;left:50%;transform:translateX(-50%);padding:14px 26px;border-radius:9999px;font-size:15px;font-weight:600;z-index:99999;box-shadow:0 25px 50px -12px rgb(0 0 0 / 0.4);transition:all 0.3s cubic-bezier(0.4,0,0.2,1);opacity:0;pointer-events:none;}
    </style>
</head>
<body class="bg-zinc-950 text-zinc-100 min-h-screen pb-20">

    <!-- ==================== УЛУЧШЕННАЯ АДАПТИВНАЯ ШАПКА ==================== -->
    <header class="fixed top-0 inset-x-0 bg-zinc-900 border-b border-zinc-700 z-50 safe-top">
        <div class="px-5 py-3 flex items-center justify-between">
            <!-- Главная слева (большая удобная кнопка) -->
            <button onclick="goHome()" class="flex items-center gap-2 text-blue-400 active:scale-95 transition">
                <span class="material-symbols-outlined text-4xl">home</span>
                <span class="font-medium text-lg"><?= t('home') ?></span>
            </button>

            <!-- Центр: название + версия -->
            <div class="text-center">
                <div class="font-bold text-2xl tracking-tighter flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-blue-500 text-3xl">folder_open</span>
                    <?= t('app_name') ?>
                </div>
                <div class="text-[10px] text-zinc-500 -mt-1">v<?= t('version') ?> Multilang</div>
            </div>

            <!-- Правая часть -->
            <div class="flex items-center gap-5">
                <!-- Язык -->
                <select onchange="location='ifile.php?lang='+this.value" class="bg-zinc-800 border border-zinc-700 rounded-2xl px-4 py-2 text-lg">
                    <option value="ru" <?= $lang=='ru'?'selected':'' ?>>🇷🇺</option>
                    <option value="uk" <?= $lang=='uk'?'selected':'' ?>>🇺🇦</option>
                    <option value="en" <?= $lang=='en'?'selected':'' ?>>🇬🇧</option>
                    <option value="de" <?= $lang=='de'?'selected':'' ?>>🇩🇪</option>
                    <option value="pl" <?= $lang=='pl'?'selected':'' ?>>🇵🇱</option>
                    <option value="lt" <?= $lang=='lt'?'selected':'' ?>>🇱🇹</option>
                    <option value="no" <?= $lang=='no'?'selected':'' ?>>🇳🇴</option>
                    <option value="sv" <?= $lang=='sv'?'selected':'' ?>>🇸🇪</option>
                    <option value="ka" <?= $lang=='ka'?'selected':'' ?>>🇬🇪</option>
                </select>
                <!-- Выход -->
                <a href="?logout=1" class="material-symbols-outlined text-4xl text-red-400 active:scale-95 transition"><?= t('logout') ?></a>
            </div>
        </div>

        <!-- Вторая строка: путь + место -->
        <div class="px-5 pb-3 text-xs flex justify-between items-center text-zinc-400 border-t border-zinc-800">
            <div id="path" class="font-medium truncate max-w-[55%]">/</div>
            <div><?= t('space') ?> <span class="text-white font-medium"><?= $used_percent ?>%</span> • <?= $used_gb ?> / <?= $total_gb ?> GiB</div>
        </div>
    </header>

    <div class="pt-28 px-4">
        <!-- Кнопки создания -->
        <div class="flex gap-3 mb-6">
            <button onclick="newFolder()" class="flex-1 bg-zinc-900 hover:bg-zinc-800 active:bg-zinc-700 transition py-5 rounded-3xl flex items-center justify-center gap-3 text-lg font-medium">
                <span class="material-symbols-outlined text-2xl">create_new_folder</span><?= t('new_folder') ?>
            </button>
            <button onclick="newFile()" class="flex-1 bg-zinc-900 hover:bg-zinc-800 active:bg-zinc-700 transition py-5 rounded-3xl flex items-center justify-center gap-3 text-lg font-medium">
                <span class="material-symbols-outlined text-2xl">note_add</span><?= t('new_file') ?>
            </button>
        </div>
        <div id="grid" class="flex flex-col"></div>
    </div>

    <!-- РЕДАКТОР -->
    <div id="editorModal" class="hidden fixed inset-0 bg-zinc-950 z-[999] flex flex-col">
        <div class="bg-zinc-900 border-b border-zinc-700 px-5 py-4 flex items-center justify-between">
            <button onclick="closeEditor()" class="material-symbols-outlined text-4xl">arrow_back</button>
            <div id="fileTitle" class="font-semibold text-lg text-center flex-1 truncate px-4"></div>
            <div class="flex items-center gap-6 text-3xl">
                <button onclick="selectAllEditor()" class="material-symbols-outlined">select_all</button>
                <button onclick="copyEditor()" class="material-symbols-outlined">content_copy</button>
                <button onclick="pasteEditor()" class="material-symbols-outlined">content_paste</button>
                <button onclick="cutEditor()" class="material-symbols-outlined">content_cut</button>
                <button onclick="saveEditor()" class="material-symbols-outlined text-green-400">save</button>
                <button onclick="closeEditor()" class="material-symbols-outlined text-red-400">close</button>
            </div>
        </div>
        <textarea id="editorTA" spellcheck="false" class="flex-1"></textarea>
    </div>

    <!-- Множественный выбор -->
    <div id="multiBar" class="hidden fixed bottom-0 inset-x-0 bg-zinc-900 border-t border-zinc-700 p-4 flex items-center justify-between z-[100] safe-bottom">
        <button onclick="deleteSelected()" class="bg-red-600 hover:bg-red-500 px-8 py-5 rounded-3xl font-semibold flex-1">Удалить выбранное (<span id="selCount">0</span>)</button>
        <button onclick="toggleMultiSelect()" class="ml-4 text-zinc-400 font-medium px-6 py-5"><?= t('cancel') ?></button>
    </div>

    <!-- ФУТЕР с версией и ссылкой на GitHub -->
    <footer class="fixed bottom-0 inset-x-0 bg-zinc-900 border-t border-zinc-700 text-center py-3 text-xs text-zinc-500 safe-bottom">
        <?= t('footer') ?><a href="https://github.com/Ruslan-Bilohash/iFile" target="_blank" class="underline hover:text-white">GitHub</a>
    </footer>

    <div id="toast"></div>

    <script>
        let currentPath = "";
        let editingFile = "";
        let multiMode = false;
        let selected = new Set();
        let currentTA = null;

        async function api(action, extra = {}) {
            const fd = new FormData();
            fd.append('action', action);
            fd.append('relpath', extra.relpath || currentPath);
            Object.keys(extra).forEach(k => { if (k !== 'relpath') fd.append(k, extra[k]); });
            const res = await fetch(window.location.href, {method: 'POST', body: fd});
            return res.json();
        }

        function getFileVisual(item) {
            if (item.dir) return {icon: 'folder', color: 'text-amber-400', badge: ''};
            const ext = item.ext;
            const map = {'php': {icon: 'php', color: 'text-purple-500', badge: 'PHP'}, 'js': {icon: 'javascript', color: 'text-yellow-400', badge: 'JS'}, 'html': {icon: 'html', color: 'text-orange-400', badge: 'HTML'}, 'css': {icon: 'css', color: 'text-blue-400', badge: 'CSS'}, 'json': {icon: 'data_object', color: 'text-emerald-400', badge: 'JSON'}, 'sql': {icon: 'database', color: 'text-pink-400', badge: 'SQL'}, 'txt': {icon: 'description', color: 'text-zinc-400', badge: 'TXT'}};
            return map[ext] || {icon: 'insert_drive_file', color: 'text-sky-400', badge: ext.toUpperCase() || 'FILE'};
        }

        function showToast(msg) {
            const t = document.getElementById('toast');
            t.textContent = msg;
            t.className = 'fixed bottom-24 left-1/2 -translate-x-1/2 px-8 py-4 rounded-3xl text-base font-semibold bg-emerald-600 shadow-2xl transition-all';
            t.style.opacity = '1';
            setTimeout(() => t.style.opacity = '0', 2200);
        }

        async function loadFiles() {
            document.getElementById('path').textContent = currentPath ? '/' + currentPath : '/';
            const data = await api('list');
            const grid = document.getElementById('grid');
            grid.innerHTML = '';
            data.items.forEach(item => {
                const vis = getFileVisual(item);
                const row = document.createElement('div');
                row.className = `list-item`;
                row.innerHTML = `
                    <input type="checkbox" ${multiMode ? '' : 'style="display:none"'} class="multi-check w-6 h-6 accent-blue-500 rounded-2xl mr-3" data-name="${item.name}" onchange="toggleSelect(this)">
                    <span class="material-symbols-outlined ${vis.color} text-[46px] flex-shrink-0">${vis.icon}</span>
                    <div class="flex-1 min-w-0 px-4">
                        <p class="font-medium text-[16.5px] leading-tight break-all">${item.name}</p>
                    </div>
                    <div class="flex items-center gap-3 text-right flex-shrink-0">
                        ${vis.badge ? `<div class="bg-black/70 text-[10px] font-bold tracking-widest px-3 py-1 rounded-2xl">${vis.badge}</div>` : ''}
                        ${!item.dir ? `<div class="text-xs text-zinc-400 font-medium whitespace-nowrap w-20 text-right">${(item.size/1024).toFixed(1)} KB</div>` : ''}
                    </div>
                `;
                row.onclick = (e) => {
                    if (e.target.type === 'checkbox') return;
                    if (multiMode) {
                        const cb = row.querySelector('.multi-check');
                        cb.checked = !cb.checked;
                        toggleSelect(cb);
                    } else if (item.dir) {
                        currentPath = currentPath ? currentPath + '/' + item.name : item.name;
                        loadFiles();
                    } else {
                        openEditor(item.name);
                    }
                };
                grid.appendChild(row);
            });
        }

        function toggleMultiSelect() {
            multiMode = !multiMode;
            selected.clear();
            document.getElementById('multiBar').classList.toggle('hidden', !multiMode);
            loadFiles();
        }

        function toggleSelect(cb) {
            const name = cb.dataset.name;
            if (cb.checked) selected.add(name); else selected.delete(name);
            document.getElementById('selCount').textContent = selected.size;
        }

        function deleteSelected() {
            if (selected.size === 0) return;
            if (!confirm(`Удалить ${selected.size} файлов?`)) return;
            let done = 0;
            selected.forEach(name => {
                api('delete', {name}).then(() => {
                    done++;
                    if (done === selected.size) {
                        showToast(`${selected.size} файлов ${t('deleted')}`);
                        selected.clear();
                        toggleMultiSelect();
                        loadFiles();
                    }
                });
            });
        }

        async function openEditor(filename) {
            editingFile = currentPath ? currentPath + '/' + filename : filename;
            const data = await api('getfile', {relpath: editingFile});
            document.getElementById('editorModal').classList.remove('hidden');
            document.getElementById('fileTitle').textContent = filename;
            currentTA = document.getElementById('editorTA');
            currentTA.value = data.content || '';
            currentTA.focus();
        }

        function closeEditor() {
            document.getElementById('editorModal').classList.add('hidden');
        }

        async function saveEditor() {
            if (!currentTA) return;
            const res = await api('save', {relpath: editingFile, content: currentTA.value});
            if (res.success) showToast(t('file_saved'));
            else showToast("❌ " + (res.msg || 'Ошибка'));
        }

        function selectAllEditor() { if (currentTA) { currentTA.select(); showToast(t('select_all')); }}
        function copyEditor() { if (currentTA) { navigator.clipboard.writeText(currentTA.value); showToast(t('copied')); }}
        function cutEditor() { if (currentTA) { navigator.clipboard.writeText(currentTA.value); currentTA.value = ''; showToast(t('cut_text')); }}
        async function pasteEditor() {
            if (currentTA) {
                const text = await navigator.clipboard.readText();
                const start = currentTA.selectionStart;
                currentTA.value = currentTA.value.substring(0, start) + text + currentTA.value.substring(currentTA.selectionEnd);
                currentTA.selectionStart = currentTA.selectionEnd = start + text.length;
                showToast(t('pasted'));
            }
        }

        function newFolder() {
            const name = prompt("Название новой папки:");
            if (name) api('mkdir', {name}).then(() => loadFiles());
        }
        function newFile() {
            const name = prompt("Имя нового файла (с расширением):");
            if (name) api('mkfile', {name}).then(() => loadFiles());
        }
        function uploadFiles() {
            const input = document.createElement('input');
            input.type = 'file';
            input.multiple = true;
            input.onchange = async () => {
                const fd = new FormData();
                fd.append('action', 'upload');
                fd.append('relpath', currentPath);
                for (let file of input.files) fd.append('files[]', file);
                const res = await fetch(window.location.href, {method:'POST', body: fd});
                if (res.ok) {
                    showToast(`✅ Загружено ${input.files.length} файлов`);
                    loadFiles();
                }
            };
            input.click();
        }
        function goHome() {
            currentPath = "";
            loadFiles();
        }

        // Запуск
        loadFiles();
    </script>
</body>
</html>
