<?php
include "./db.php";

$buttonText = "Send";
$action = "add";

if ($_GET['action'] == 'add') {
    $name = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['name'])));
    $feedback = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['feedback'])));
    $sql = "INSERT INTO `feedgood`(`name`, `feedback`) VALUES ('{$name}','{$feedback}')";
    $result = mysqli_query($db, $sql);
    header("Location: /crud.php?message=ok");
}

if ($_GET['action'] == 'edit') {
    $buttonText = "Update";
    $action = "update";

    $id = (int)$_GET['id'];
    $result = mysqli_query($db, "SELECT * FROM `feedgood` WHERE id = {$id}");
    $row = mysqli_fetch_assoc($result);
}

if ($_GET['action'] == 'update') {
    $id = (int)$_POST['id'];
    $name = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['name'])));
    $feedback = strip_tags(htmlspecialchars(mysqli_real_escape_string($db, $_POST['feedback'])));
$sql = "UPDATE `feedgood` SET `name`= '{$name}', `feedback`= '{$feedback}' WHERE `feedback`.`id` = {$id}";
    $result = mysqli_query($db, $sql);
    header("Location: /crud.php?message=edit");
}

if ($_GET['action'] == 'delete') {
    $id = (int)$_GET['id'];
    $sql = "DELETE FROM `feedgood` WHERE `feedback`.`id` = {$id}";
    $result = mysqli_query($db, $sql);
    header("Location: /crud.php?message=delete");
}

$result = mysqli_query($db, "SELECT * FROM `feedgood` WHERE id = {$id} ORDER BY id DESC");

if (isset($_GET['message'])) {
    switch ($_GET['message']) {
        case 'ok':
            $message = "Feedback save successful";
            break;
        case 'edit':
            $message = "Edit feedback successful";
            break;
        case 'delete':
            $message = "Delete feedback successful";
            break;
        default:
            $message = "";
            break;
    }
}

?>

<?=$message?><br>
<form method="post" action="/crud.php?action=<?=$action?>">
    <input hidden type="text" name="id" value="<?=$row['id']?>"><br>
    <input type="text" name="name" placeholder="Name" value="<?=$row['name'] ?? ""?>"><br>
    <textarea name="feedback" placeholder="Feedback"><?=$row['feedback'] ?? ""?></textarea><br>
    <input type="submit" name="submit" value="<?=$buttonText?>">
</form>

<?foreach ($result as $item):?>
    <b><?=$item['name']?>:</b> <?=$item['feedback']?>
    <a href="/crud.php?action=edit&id=<?=$item['id']?>">[edit]</a>
    <a href="/crud.php?action=delete&id=<?=$item['id']?>">[x]</a>
    <br>
<?endforeach;?>