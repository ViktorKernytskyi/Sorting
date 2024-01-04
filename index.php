<?php

include 'data.php';

// Якщо GET-параметр "sort" передано, сортуємо дані за вибраним ключем
if (isset($_GET['sort'])) {
    $sortKey = $_GET['sort'];

    // Функція сортування для асоціативного масиву за ключем
    usort($arr, function ($a, $b) use ($sortKey) {
        return strcmp($a[$sortKey], $b[$sortKey]);
    });
}


require 'table.php';

?>
