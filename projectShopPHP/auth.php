<?php
session_start();
include "./db.php";

$allow = false;

//function getDb() {
//    static $db = "";
//    if (empty($db)) {
//        $db = mysqli_connect("localhost", "test", 123456, "geekbrains");
//    }
//
//    return $db;
//}

function isAuth(): bool {
    if (isset($_COOKIE['hash'])) {
        $hash = $_COOKIE['hash'];
//        $db = getDb();
        $sql = "SELECT * FROM users WHERE hash = '{$hash}'";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);
        $user = $row['login'];
        if (!empty($user)) {
            $_SESSION['login'] = $user;
        }
    }

    return isset($_SESSION['login']);
}

function auth(string $login, string $password): bool {
//    $db = getDb();
    $login = mysqli_real_escape_string($db, strip_tags(stripslashes($login)));
    $result = mysqli_query($db, "SELECT * FROM users WHERE login = '{$login}'");
    $row = mysqli_fetch_assoc($result);

    if (password_verify($password, $row['password'])) {
        $_SESSION['login'] = $login;
        $_SESSION['id'] = $row['id'];
        return true;
    } else {
        return false;
    }
}

function getUser(): string {
    return $_SESSION['login'];
}

if (isset($_POST['send'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    if (!auth($login, $password)) {
        die("Login or password is invalid.");
    } elseif (isset($_POST['save'])) {
        $hash = uniqid(rand(), true);
//        $db = getDb();
        $id = mysqli_real_escape_string($db, strip_tags(stripslashes($_SESSION['id'])));
        $sql = "UPDATE `users` SET `hash` = '{$hash}' WHERE `users`.`id` = {$id}";
        $result = mysqli_query($db, $sql);
        setcookie("hash", $hash, time() + 3600);
        $allow = true;
        $user = getUser();
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    setcookie("hash", "", time() - 3600, "/");
    header("location: /");
    exit();
}

if (isAuth()) {
    $allow = true;
    $user = getUser();
}

?>