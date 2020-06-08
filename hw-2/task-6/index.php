<?php

// 6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень. При желании сделайте это через замыкание.

$a = rand(0, 99);
$b = rand(0, 10);

echo "a = {$a}, b = {$b}<br>";

function power($val, $pow) {
    if ($pow == 0) return 1;
    if ($pow == 1) return $val;
    if ($pow == 2) return $val * $val;
    return $val * power($val, $pow - 1);
};

echo power($a, $b);