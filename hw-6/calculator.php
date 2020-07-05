<?php

$operand1 = (int)$_GET['operand1'];
$operand2 = (int)$_GET['operand2'];
$operation = (string)$_GET['operation'];

switch ($operation) {
    case "add":
        $result = $operand1 + $operand2;
        break;
    case "sub":
        $result = $operand1 - $operand2;
        break;
    case "multi":
        $result = $operand1 * $operand2;
        break;
    case "div":
        $result = $operand1 / $operand2;
        break;
}

$response['result'] = $result;

echo json_encode($response);
