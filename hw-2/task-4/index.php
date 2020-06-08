<?php

// 4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

$a = rand(-15, 15);
$b = rand(-15, 15);
$c = rand(0, 3);

echo "a = {$a}, b = {$b}<br>";

$result = mathOperation($a, $b, $c);

echo "Variable 'd': {$c}" . getOperationName($c) . "<br>";
echo "Результат операции" . getOperationName($c) . ": {$result}";

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 0:
            return getSum($arg1, $arg2);
        case 1:
            return getDiff($arg1, $arg2);
        case 2:
            return getMultiplier($arg1, $arg2);
        case 3:
            return getSeparation($arg1, $arg2);
        default:
            break;
    }
};

function getOperationName($params) {
    switch ($params) {
        case 0:
            return ' сложение';
        case 1:
            return ' вычитание';
        case 2:
            return ' умножение';
        case 3:
            return ' деление';
        default:
            break;
    }
};

function getSeparation($a, $b) {
    if ($b == 0) {
        echo 'Warning!<br>';
        return 0;
    } else {
        return $a / $b;
    }; 
};

function getMultiplier($a, $b) {
    return $a * $b;
};

function getDiff($a, $b) {
    return $a - $b;
};

function getSum($a, $b) {
    return $a + $b;
};
