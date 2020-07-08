<?php

$a = rand(-15, 15);
$b = rand(-15, 15);

echo "a = {$a}, b = {$b}<br>";

if ($a >= 0 && $b >= 0) {
    $c = $a - $b;

    echo "a - b = {$c}";

} elseif ($a < 0 && $b < 0) {
    $c = $a * $b;

    echo "a * b = {$c}";

} else {
    $c = $a + $b;

    echo "a + b = {$c}";
    
};
