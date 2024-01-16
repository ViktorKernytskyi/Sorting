<?php
if (!function_exists('customSort')) {
    function customSort(&$arr, $sortBy, $order) {
        $sortOrder = ($order === 'asc') ? SORT_ASC : SORT_DESC;
        array_multisort(array_column($arr, $sortBy), $sortOrder, $arr);
    }
}

function generateLink($col, $sortBy, $order) {
    $newOrder = ($sortBy === $col) ? (($order === 'asc') ? 'desc' : 'asc') : 'asc';
    return "?sort=$col&order=$newOrder";
}

function applySorting(&$arr, $sortBy, $order) {
    if ($sortBy && $order !== 'reset') {
        customSort($arr, $sortBy, $order);
    }
}

?>