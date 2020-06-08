<?php

// 2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15. При желании сделайте это задание через рекурсию.

$a = rand(0, 15);

echo "a = $a<br>";

function printNumberFromTo($start, $end = 15) {
    if ($start > $end) return null;
    print "$start<br>";
    return printNumberFromTo($start + 1);
};

printNumberFromTo($a);
