<?php 
/*7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты

0 часов	минут	10 часов минут 20 часов минут	30 минут  40 минут
1 час	минута	11 часов минут 21 час	минута	31 минута 41 минута
2 часа	минуты	12 часов минут 22 часа	минуты	32 минуты 42 минуты
3 часа	минуты	13 часов минут 23 часа	минуты	33 минуты 43 минуты
4 часа	минуты	14 часов минут 24 часа	минуты	34 минуты 44 минуты
5 часов	минут	15 часов минут 25		минут	35 минут  45 минут
6 часов	минут	16 часов минут 26		минут	36 минут  46 минут 
7 часов минут	17 часов минут 27		минут	37 минут  47 минут
8 часов	минут	18 часов минут 28		минут	38 минут  48 минут 
9 часов минут	19 часов минут 29		минут	39 минут  49 минут
*/

/**
 * Возвращает окончание в зависимости от переданного значения
 * 
 * getEnding(4, ' часов ', ' час ', ' часа ');
 * return ' часа '
 * 
 * getEnding(5, ' минут', ' минута', ' минуты');
 * return ' минут'
 * 
 * @param int $var Первый параметр функции
 * @param string $ending_0 Второй параметр
 * @param string $ending_1 Третий параметр
 * @param string $ending_2 Четвертый параметр
 * @return string
 */
function getEnding(int $var, string $ending_0, string $ending_1, string $ending_2) {
    if ($var >= 5 AND $var <= 20 OR $var == 0) return $ending_0;
    $var = $var % 10;
    if ($var == 1) return $ending_1;
    if ($var >= 2 AND $var <= 4) return $ending_2;
    return $ending_0;
};

$h = date('H');
$m = date('i');

echo $h . getEnding($h, ' часов ', ' час ', ' часа ') . 
    $m . getEnding($m, ' минут', ' минута', ' минуты');

echo '<br>';
echo 22 . getEnding(22, ' часов ', ' час ', ' часа ') . 
    15 . getEnding(15, ' минут', ' минута', ' минуты');
        
echo '<br>';
echo 21 . getEnding(21, ' часов ', ' час ', ' часа ') . 
    43 . getEnding(43, ' минут', ' минута', ' минуты');