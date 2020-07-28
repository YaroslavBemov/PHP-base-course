<?php

include "./auth.php";
include "./db.php";
define("IMG_DIR", "./images/");

$id = (int)$_GET['id'];
$sql = "SELECT `id`, `name`, `shortDescription`, `fullDescription`, `img`, `price` FROM `goods` WHERE id = {$id}";
$result = mysqli_query($db, $sql);
$item = mysqli_fetch_assoc($result);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $item['name'] ?></title>
</head>
<body>

<?php
include "./menu.php";
?>

<? if ($result->num_rows != 0): ?>

    <h1><?= $item['name'] ?></h1>
    <div class="container">
        <div class="good">
            <h2><?= $item['name'] ?></h2>
            <img src="<?= IMG_DIR . $item['img'] ?>" alt="<?= $item['name'] ?> image">
            <span>Price: <?= $item['price'] ?></span>
            <button id="buy" data-id="<?= $item['id'] ?>">Buy</button>
            <p><?= $item['fullDescription'] ?></p>
        </div>
    </div>

    <?php
    include "./crudForGood.php";
    ?>

<? else: ?>

    <div class="container">
        <h1>Good not found </h1>
        <a href="./catalog.php">Go to catalog...</a>
    </div>

<? endif; ?>
<script>
    let buy = document.getElementById('buy')

    buy.addEventListener('click', handler)

    function handler() {
        id = buy.dataset.id
        fetch(`./api.php?id=${id}`)
            .then(response => response.json())
            .then(data => document.getElementById('count').innerText = data['count'])
    }
</script>
</body>
</html>
