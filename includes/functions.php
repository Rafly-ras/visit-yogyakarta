<?php
session_start();

// Set default language
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'id';
}

// Change language if requested
if (isset($_GET['lang']) && in_array($_GET['lang'], ['id', 'en'])) {
    $_SESSION['lang'] = $_GET['lang'];
    $current_url = strtok($_SERVER["REQUEST_URI"], '?');
    header("Location: " . $current_url);
    exit;
}

$lang = $_SESSION['lang'];

// Helper to load translation
function load_translation($lang) {
    $file = __DIR__ . '/../data/translations/' . $lang . '.json';
    if (file_exists($file)) {
        return json_decode(file_get_contents($file), true);
    }
    return [];
}

$t = load_translation($lang);

// Helper function to get text safely
function __($key, $t) {
    return isset($t[$key]) ? $t[$key] : $key;
}
?>
