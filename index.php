<?php

require_once('functions.php');
require_once('data.php');


// Отримання інформації про сортування з параметрів GET
$sortBy = $_GET['sort'] ?? '';
$order = $_GET['order'] ?? '';


echo "DEBUG: sort parameter = $sortBy". '<br>';
//// Додайте цей рядок для виведення всього URL у відладкових цілях
echo "DEBUG: Current URL = {$_SERVER['REQUEST_URI']}<br>";


// Перевірка чи існує сортування та встановлення сортування, якщо необхідно
if ($sortBy != '' && in_array($order, ['asc', 'desc'])) {
    applySorting($arr, $sortBy, $order);
} elseif ($sortBy == 'reset') {
    // Якщо sort=reset, скинути сортування
    $sortBy = '';
    $order = '';
}

// Підключення файлу table.php для відображення таблиці
require_once('table.php');
?>


