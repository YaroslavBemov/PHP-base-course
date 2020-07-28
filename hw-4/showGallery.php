<?php
function showGallery($directory)
{
    $htmlString = '';
    $scnDir = scandir($directory);

    foreach ($scnDir as $key => $value) {
        if (!in_array($value, ['.', '..'])) {
            $htmlString .= "
            <div class=\"item\">
                <a href=\"./{$directory}/{$value}\" target=\"_blank\">
                    <img src=\"./{$directory}/{$value}\" alt=\"alt\">
                </a>
            </div>
        ";
        }

    }

    return $htmlString;
}
