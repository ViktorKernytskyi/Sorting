<?php

if (!function_exists('customSort')) {
    function customSort(&$arr, $sortBy, $order) {
        $sortOrder = ($order === 'asc') ? SORT_ASC : SORT_DESC;
        array_multisort(array_column($arr, $sortBy), $sortOrder, $arr);
    }
}


function generateLink($col, $sortBy, $order) {
    $sortOrder = $sortBy === $col ? ($order === 'asc' ? 'desc' : 'asc') : 'asc';
    $action = $sortBy === $col && $order !== '' ? ($order === 'asc' ? '-1' : '0') : '1';
    return "?sort=$col&order=$sortOrder&action=$action";
}


?>
