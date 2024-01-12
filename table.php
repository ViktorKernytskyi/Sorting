<?php
include('data.php');
include('functions.php');


$sortBy = $_GET['sort'] ?? '';
$order = $_GET['order'] ?? '';

switch ($_GET['action'] ?? '') {
    case '1':
        $order = 'asc';
        break;
    case '-1':
        $order = 'desc';
        break;
    case '0':
        $sortBy = 'city';
        $order = 'asc';
        break;
}

if ($sortBy && $order) {
    customSort($arr, $sortBy, $order);
}
function generateLink($col) {
    global $sortBy, $order;
    $sortOrder = $sortBy === $col ? ($order === 'asc' ? 'desc' : 'asc') : 'asc';
    $action = $sortBy === $col && $order !== '' ? ($order === 'asc' ? '-1' : '0') : '1';
    return "?sort=$col&order=$sortOrder&action=$action";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Table Sort</title>
</head>
<body>
<h3>Таблиця продуктів</h3>
<table border="1">
    <thead>
    <tr>
        <?php foreach (['city', 'name', 'country', 'price'] as $col) : ?>
            <th><a href="<?= generateLink($col) ?>"><?= ucfirst($col) ?></a></th>
        <?php endforeach; ?>
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


