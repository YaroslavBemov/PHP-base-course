<?php

function showGallery($directory)
{
    $htmlString = "";

    include "db.php";
    $result = mysqli_query($db, "SELECT * FROM `images` ORDER BY likes DESC");

    if ($result->num_rows != 0) {
        foreach ($result as $item) {
            $htmlString .= "
            <div class=\"item\">
                <p>Likes: {$item['likes']}</p>
                <a href=\"image.php?id={$item['id']}\">
                    <img src=\"$directory/{$item['filename']}\" alt=\"alt\">
                </a>
            </div>
        ";
        }
    } else {
        $htmlString = "Gallery is empty";
    }

    return $htmlString;
}
