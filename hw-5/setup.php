<!--Для загрузки в базу данных информации о изображениях из папки uploads-->
<?php
define("ROOT", $_SERVER['DOCUMENT_ROOT']);
define("IMG_DIR", ROOT . "/uploads");

include "db.php";

$result = mysqli_query($db,"SELECT id FROM images");

var_dump($result -> num_rows);

if (!$result -> num_rows) {
    echo "Table is empty!";
    $scanDir = scandir(IMG_DIR);
    $scanDir = array_splice($scanDir, 2);
    var_dump($scanDir);
//    INSERT INTO images(`filename`) VALUES ('01.jpg'), ('02.jpg')
    mysqli_query($db, "INSERT INTO images(`filename`) VALUES ('" . implode("'),('", $scanDir) . "')");
} else {
    echo "Table is here";
}