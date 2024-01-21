<?php
require_once('functions.php');

if (!isset($arr)) {
    include('data.php');
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
        <?php foreach ($links as $item) : ?>
        <th>
            <a href="?sort=<?= $item['name'] ?>&order=<?= $item['order'] ?>">
                <?= ucfirst($item['name']) ?>
            </a>
        </th>
    <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($arr as $item) : ?>
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






