<?php

// 2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
// 0 – ноль.
// 1 – нечетное число.
// 2 – четное число.
// 3 – нечетное число.
// …
// 10 – четное число.


$i = 0;

do {
    if ($i == 0) {
        echo $i . " – ноль." . "<br>";
    } elseif ($i & 1) {
        echo $i . " - нечетное число." . "<br>";
    } else {
        echo $i . " - четное число." . "<br>";
    }
    $i++;
} while ($i <= 10);
