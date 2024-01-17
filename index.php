<?php
session_start();
require_once('functions.php');
require_once('data.php');

// Отримуємо інформацію про сортування з параметрів GET
$sortBy = $_GET['sort'] ?? 'city';
$sortOrder = $_SESSION['sortOrder'] ?? [];

// Перевірка, чи встановлений параметр скидання та чи він встановлений в '1'
if (isset($_GET['reset']) && $_GET['reset'] === '1') {
    // Виклик функції скидання сортування
    resetSorting($sortBy, $sortOrder);
    $_SESSION['sortOrder'] = [];
} else {
    // Виклик функції сортування на основі вибраного стовпця та порядку
    applySort($arr, $sortBy, $sortOrder);
    $_SESSION['sortOrder'] = $sortOrder;
}
require_once('table.php');
?>


