<?php

if (isset($_POST['load'])) {

    $tmpFilePath = $_FILES["userfile"]["tmp_name"];
    $tmpFileName = $_FILES["userfile"]["name"];
    $tmpFileSize = $_FILES["userfile"]["size"];
    $tmpFileType = $_FILES["userfile"]["type"];
    $uploadPath = "uploads/" . $tmpFileName;
    $fileMaxSize = 1000000;
    $fileValidType = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];

    if ($tmpFileSize > $fileMaxSize) {
        echo "Превышен допустимый размер файла <br>";
    } elseif (!in_array($tmpFileType, $fileValidType)) {
        echo "Недопустимый тип файла <br>";
    } elseif (move_uploaded_file($tmpFilePath, $uploadPath)) {
        header("Location: /");
    } else {
        echo "Ошибка<br>";
    }
}
