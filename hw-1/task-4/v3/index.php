<?php

$h1 = 'Информация обо мне';
$title = 'Главная страница - страница обо мне';
$year = '2018';

$content = file_get_contents("tmpl-main.tmpl");

$content = str_replace("{{ H1 }}", $h1, $content);
$content = str_replace("{{ TITLE }}", $title, $content);
$content = str_replace("{{ YEAR }}", $year, $content);

echo $content;