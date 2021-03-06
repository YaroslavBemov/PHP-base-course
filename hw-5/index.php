<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .container {
            display: flex;
            flex-wrap: wrap;
            max-width: 1140px;
            margin: 0 auto;
        }

        .container img {
            width: 100%;
            min-height: 100%;
            object-fit: cover;
        }

        .container .item {
            flex: 1 1 150px;
        }
    </style>
    <title>Gallery</title>
</head>
<body>
<?php
include "menu.php";
?>

<h1>Галерея</h1>
<div class="container">
    <?php
    include "showGallery.php";
    echo showGallery('uploads');
    ?>
</div>

<h2>Загрузка изображений</h2>
<?php
include "uploadForm.php";
?>

</body>
</html>