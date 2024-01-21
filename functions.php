<?php
require_once('data.php');
 //Застосування сортування до масиву
function applySorting(&$array, $sortBy, $order)
{
    // Логіка сортування (адаптуйте згідно зі структурою ваших даних)
    usort($array, function ($a, $b) use ($sortBy, $order) {
        if ($order === 'asc') {
            return $a[$sortBy] <=> $b[$sortBy];
        } elseif ($order === 'desc') {
            return $b[$sortBy] <=> $a[$sortBy];
        }
        return 0;
    });
}

?>

