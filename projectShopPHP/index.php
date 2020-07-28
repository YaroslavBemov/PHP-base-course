<?php
include "./auth.php";
$session = session_id();
var_dump($session);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main page</title>
</head>
<body>

<?php include "./menu.php" ?>
<h1>Shop main page</h1>

<? if ($allow): ?>

    Welcome, <?= $user ?>!

<? else: ?>

    <form method="post">
        <label>Login
            <input type="text" name="login"><br>
        </label>
        <label>Password
            <input type="password" name="password"><br>
        </label>
        <label>Remember?
            <input type="checkbox" name="save">
        </label>
        <br>
        <input type="submit" name="send" value="Send">
    </form>

<? endif; ?>

</body>
</html>
