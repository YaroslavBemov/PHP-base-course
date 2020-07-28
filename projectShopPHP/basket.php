<?php
include "./auth.php";
include "./db.php";

define("IMG_DIR", "./images/");

$session = session_id();
$sql = "SELECT `basket`.`id` AS basket_id, `goods`.`img`, `goods`.`id` AS good_id, `goods`.`name`, `goods`.`shortDescription`, `goods`.`price`, `basket`.`count` FROM `basket`, `goods` WHERE `basket`.`good_id` = `goods`.`id` AND `session_id` = '{$session}'";
$result = mysqli_query($db, $sql);
$total = 0;
foreach ($result as $item) {
    $total += $item['price'];
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basket</title>
</head>
<body>
<?php
include "./menu.php";
?>
<h1>Basket page</h1>

<? if ($result->num_rows != 0): ?>
    <? foreach ($result as $item): ?>

        <div class="product" style="outline: solid 2px black">
            <h2><?= $item['name'] ?></h2>
            <a href="./good.php?id=<?= $item['id'] ?>">
                <img src="<?= IMG_DIR . $item['img'] ?>" alt="<?= $item['name'] ?> image" style="width: 200px">
            </a>
            <p><?= $item['shortDescription'] ?></p>
            <span><b>Price: </b><?= $item['price'] ?></span>
        </div>
        <p>Count: <?= $item['count'] ?></p>

    <? endforeach; ?>
<p>Total: <?= $total ?></p>
<? endif; ?>

</body>
</html>

