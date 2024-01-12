<?php

if (!function_exists('customSort')) {
    function customSort(&$arr, $sortBy, $order) {
        $sortOrder = ($order === 'asc') ? SORT_ASC : SORT_DESC;
        array_multisort(array_column($arr, $sortBy), $sortOrder, $arr);
    }
}

?>
