<?php

include ('data.php');


$sortBy = isset($_GET['sort']) ? $_GET['sort'] : 'city';
$order = isset($_GET['order']) ? $_GET['order'] : 'asc';


usort($arr, function ($a, $b) use ($sortBy, $order) {
    if ($a[$sortBy] === $b[$sortBy]) return 0;
    return ($order === 'asc') ? ($a[$sortBy] < $b[$sortBy] ? -1 : 1) : ($a[$sortBy] > $b[$sortBy] ? -1 : 1);
});
require ('table.php');

?>
