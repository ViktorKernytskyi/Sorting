<?php
require_once('functions.php');
require_once('data.php');


$sortBy = $_GET['sort'] ?? '';
$order = $_GET['order'] ?? '';
$action = $_GET['action'] ?? '';

switch ($action) {
    case '1':
        $order = 'asc';
        break;
    case '-1':
        $order = 'desc';
        break;
    case '0':
        $sortBy = 'city';
        $order = 'asc';
        break;
}

if ($sortBy && $order) {
    customSort($arr, $sortBy, $order);
}
require_once('table.php');
?>