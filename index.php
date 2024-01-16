<?php
require_once('functions.php');
require_once('data.php');

$sortBy = $_GET['sort'] ?? '';
$order = $_GET['order'] ?? '';

// Скидання сортування
if (isset($_GET['reset'])) {
    $sortBy = 'city';
    $order = '';
}

applySorting($arr, $sortBy, $order);

require_once('table.php');
?>

