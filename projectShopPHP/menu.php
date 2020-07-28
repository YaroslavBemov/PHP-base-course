<?php

include "./db.php";

$session = session_id();
$sql = "SELECT COUNT(id) AS count FROM `basket` WHERE `session_id` = '{$session}'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_assoc($result);
$count = $row['count'];

?>

<a href="/">Main page</a>
<a href="catalog.php">Catalog</a>
<a href="feedback.php">Feedback</a>
<a href="basket.php">Basket (<span id="count"><?= $count ?></span>)</a>

<? if (isset($_SESSION['login'])): ?>

<a href="private.php?user=<?= $user ?>">Private area(<?= $user ?>)</a>
<a href="?logout">Logout</a>

<? endif; ?>