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
    <tr>
<!--        --><?php echo "<br>" ."3 - "; var_dump( $links) ."<br>" ;?>
        <?php foreach ($links as $link) : ?>
            <?php echo "<br>" ."4 - "; var_dump( $link);?>
            <th>
                <a href="?sort=<?= $link['name'] ?>&order=<?= $link['order'] ?>">

                    <?= ucfirst($link['name']) ?>
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






