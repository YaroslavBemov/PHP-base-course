<?php

function showImage($directory, $id)
{
    $htmlString = "";
    $message = "";

    include "db.php";
    mysqli_query($db, "UPDATE `images` SET likes = likes + 1 WHERE id = {$id}");
    $result = mysqli_query($db, "SELECT * FROM `images` WHERE id = {$id}");

    if ($result->num_rows != 0) {
        $item = mysqli_fetch_assoc($result);
    } else {
        $message = "No image";
    }

    if (empty($message)) {
        $htmlString .= "
            <div class=\"item\">
                    <p>Likes: {$item['likes']}</p>
                    <img src=\"$directory/{$item['filename']}\" alt=\"alt\">
            </div>
        ";
    } else {
        $htmlString = $message;
    }

    return $htmlString;
}