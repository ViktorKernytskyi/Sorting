
<?php


include 'data.php';

function sortByColumn($data, $sortKey) {
    usort($data, function ($a, $b) use ($sortKey) {
        return strcmp($a[$sortKey], $b[$sortKey]);
    });
    return $data;
}

if (isset($_GET['sort'])) {
    $sortKey = $_GET['sort'];
    $arr = sortByColumn($arr, $sortKey);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>таблиця продуктів</title>
</head>
<body>
<div class="container">
    <div class="col-md-auto">
        <h5>таблиця продуктів</h5>
        <table border="1" cellspacing="1">

            <tr>
                <th style="border: 1px solid black; padding: 5px; text-align: center;"><a href="?sort=city">City</a></th>
                <th style="border: 1px solid black; padding: 5px; text-align: center;"><a href="?sort=name">Name</a></th>
                <th style="border: 1px solid black; padding: 5px; text-align: center;"><a href="?sort=country">Country</a></th>
                <th style="border: 1px solid black; padding: 5px; text-align: center;"><a href="?sort=price">Price</a></th>
            </tr>
            <?php

            foreach ($arr as $item) {
                echo '<tr>';
                echo '<td style="border: 1px solid black; padding: 5px; text-align: center;">' . $item['city'] . '</td>';
                echo '<td style="border: 1px solid black; padding: 5px; text-align: center;">' . $item['name'] . '</td>';
                echo '<td style="border: 1px solid black; padding: 5px; text-align: center;">' . $item['country'] . '</td>';
                echo '<td style="border: 1px solid black; padding: 5px; text-align: center;">' . $item['price'] . '</td>';
                echo '</tr>';
            }
            ?>

            </tr>


        </table>
</body>
</html>



