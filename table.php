<?php
include ('data.php');

$sortBy = isset($_GET['sort']) ? $_GET['sort'] : 'city';
$order = isset($_GET['order']) ? $_GET['order'] : 'asc';

if ($sortBy === $_GET['sort'] && $order === 'asc') {
    $order = 'desc';
} else {
    $order = 'asc';
}

if (isset($_GET['reset'])) {
    $sortBy = 'city'; // Значення за замовчуванням для сортування
    $order = 'asc'; // Значення за замовчуванням для напрямку сортування
}
usort($arr, function ($a, $b) use ($sortBy, $order) {
    $result = $a[$sortBy] <=> $b[$sortBy];
    return ($order === 'asc') ? $result : -$result;
});



?>

<!DOCTYPE html>
<html>
<head>
    <title>Table Sort</title>
</head>
<body>
<h3>таблиця продуктів</h3>
<table border="1">
    <thead>

    <tr>
        <th><a href="?sort=city&order=<?= $order; ?>">City</a></th>
        <th><a href="?sort=name&order=<?= $order; ?>">Name</a></th>
        <th><a href="?sort=country&order=<?= $order; ?>">Country</a></th>
        <th><a href="?sort=price&order=<?= $order; ?>">Price</a></th>
        <th><a href="?reset">Reset</a></th>
    </tr>
    </thead>
    <tbody>


    <?php
    foreach ($arr as $item) : ?>
        <tr>
            <td><?= $item['city']; ?></td>
            <td><?= $item['name']; ?></td>
            <td><?= $item['country']; ?></td>
            <td><?= $item['price']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>


