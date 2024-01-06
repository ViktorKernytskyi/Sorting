<?php

include ('data.php');


$sortBy = isset($_GET['sort']) ? $_GET['sort'] : 'city';
$order = isset($_GET['order']) ? $_GET['order'] : 'asc';


usort($arr, function ($a, $b) use ($sortBy, $order) {
    $result = $a[$sortBy] <=> $b[$sortBy];
    return ($order === 'asc') ? $result : -$result;
});

require ('table.php');

?>
