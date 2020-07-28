<?php
session_start();
include "./db.php";

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];
    $session = session_id();

    $sql = "INSERT INTO `basket`(`good_id`, `session_id`, `count`) VALUES ('{$id}', '{$session}', '1')";
    $result = mysqli_query($db, $sql);

    $data['count'] = 222;
    echo json_encode($data);
}