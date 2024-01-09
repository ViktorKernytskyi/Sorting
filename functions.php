<?php

function customSort(&$arr, $sortBy, $order) {
    usort($arr, function ($a, $b) use ($sortBy, $order) {
        if ($a[$sortBy] === $b[$sortBy]) return 0;
        return ($order === 'asc') ? ($a[$sortBy] < $b[$sortBy] ? -1 : 1) : ($a[$sortBy] > $b[$sortBy] ? -1 : 1);
    });
}

?>
