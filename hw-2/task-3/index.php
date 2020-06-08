<?php

// 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return. В делении проверьте деление на 0 и верните текст ошибки.

$a = rand(-15, 15);
$b = rand(-15, 15);

echo "a = {$a}, b = {$b}<br>";

echo 'Сумма чисел: ' . getSum($a, $b) . '<br>';
echo 'Разница чисел: ' . getDiff($a, $b) . '<br>';
echo 'Произведение чисел: ' . getMultiplier($a, $b) . '<br>';
echo 'Отношение чисел: ' . getSeparation($a, $b) . '<br>';

/**
 * Складывает два числа
 * @param {number} a число
 * @param {number} b число
 * @return {number} Результат сложения двух чисел
 */
function getSum($a, $b) {
    return $a + $b;
};
  
  /**
   * Вычитает из первого числа второе
   * @param {number} a число, из которого вычитает
   * @param {number} b число, которое вычитает
   * @return {number} Результат вычитания
   */
function getDiff($a, $b) {
    return $a - $b;
};
  
  /**
   * Умножает два числа
   * @param {number} a число
   * @param {number} b число
   * @return {number} Результат умножения
   */
function getMultiplier($a, $b) {
    return $a * $b;
};
  
  /**
   * Делит первое число на второе
   * @param {number} a число, которое делит
   * @param {number} b число, на которое делит
   * @return {number} Результат деления
   */
function getSeparation($a, $b) {
    if ($b == 0) {
        echo 'Warning!<br>';
        return 0;
    } else {
        return $a / $b;
    }; 
};
