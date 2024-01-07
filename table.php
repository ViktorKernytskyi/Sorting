<?php
include('data.php');

$sortBy = isset($_GET['sort']) ? $_GET['sort'] : 'city';
$order = isset($_GET['order']) ? $_GET['order'] : 'asc';

$action = isset($_GET['action']) ? $_GET['action'] : '';

if ($action === '1') {
    $order = 'asc'; // 1 - сортувати за зростанням
} elseif ($action === '-1') {
    $order = 'desc'; // -1 - сортувати за спаданням
} elseif ($action === '0') {
    $sortBy = 'city';
    $order = 'asc'; // 0 - скидання сортування
} else {
    if ($sortBy === $_GET['sort'] && $order === 'asc') {
        $order = 'desc'; // зміна на спадання
    } elseif ($sortBy === $_GET['sort'] && $order === 'desc') {
        $order = 'asc'; // зміна на зростання
    } else {
        $order = 'asc'; // скидання сортування
        $sortBy = 'city';
    }
}

usort($arr, function ($a, $b) use ($sortBy, $order) {
    if ($a[$sortBy] === $b[$sortBy]) return 0;
    return ($order === 'asc') ? ($a[$sortBy] < $b[$sortBy] ? -1 : 1) : ($a[$sortBy] > $b[$sortBy] ? -1 : 1);
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


