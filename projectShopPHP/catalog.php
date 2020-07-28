<?php
include "./db.php";
include "./auth.php";

define("IMG_DIR", "./images/");

$sql = "SELECT * FROM `goods`";
$result = mysqli_query($db, $sql);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalog</title>
</head>
<body>
<?php
include "./menu.php";
?>
<h1>Catalog page</h1>

<div class="container">

    <? if($result->num_rows != 0): ?>
    <? foreach ($result as $item): ?>

    <div class="product" style="outline: solid 2px black">
        <h2><?=$item['name']?></h2>
        <a href="./good.php?id=<?= $item['id'] ?>">
            <img src="<?= IMG_DIR . $item['img'] ?>" alt="<?= $item['name'] ?> image" style="width: 200px">
        </a>
        <p><?=$item['shortDescription']?></p>
        <span><b>Price: </b><?=$item['price']?></span>
    </div>

    <? endforeach; ?>
    <? endif; ?>

</div>

</body>
</html>
