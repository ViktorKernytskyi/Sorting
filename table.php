<?php
include('data.php');
include('functions.php');

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
customSort($arr, $sortBy, $order);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Table Sort</title>
</head>
<body>
<table border="1">
    <thead>
    <tr>
        <th><a href="?sort=city&order=<?= ($sortBy === 'city' && $order === 'asc') ? 'desc' : 'asc'; ?>&action=<?= ($sortBy === 'city' && $order === 'asc') ? '-1' : ($sortBy === 'city' && $order === 'desc' ? '0' : '1'); ?>">City</a></th>
        <th><a href="?sort=name&order=<?= ($sortBy === 'name' && $order === 'asc') ? 'desc' : 'asc'; ?>&action=<?= ($sortBy === 'name' && $order === 'asc') ? '-1' : ($sortBy === 'name' && $order === 'desc' ? '0' : '1'); ?>">Name</a></th>
        <th><a href="?sort=country&order=<?= ($sortBy === 'country' && $order === 'asc') ? 'desc' : 'asc'; ?>&action=<?= ($sortBy === 'country' && $order === 'asc') ? '-1' : ($sortBy === 'country' && $order === 'desc' ? '0' : '1'); ?>">Country</a></th>
        <th><a href="?sort=price&order=<?= ($sortBy === 'price' && $order === 'asc') ? 'desc' : 'asc'; ?>&action=<?= ($sortBy === 'price' && $order === 'asc') ? '-1' : ($sortBy === 'price' && $order === 'desc' ? '0' : '1'); ?>">Price</a></th>
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


