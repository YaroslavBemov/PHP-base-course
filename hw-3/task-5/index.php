<?php

// 5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку

function spaceReplace (string $string) {
    $string = str_replace(" ", "_", $string);
    return $string;
}

echo spaceReplace('he llo');
