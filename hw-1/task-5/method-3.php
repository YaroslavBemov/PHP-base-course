<?php

$a = 1;
$b = 2;

$a ^= $b ^= $a ^= $b;

echo "a = {$a}, b = {$b}";