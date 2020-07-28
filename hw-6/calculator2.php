<?php
$operand1 = (int)$_GET['operand1'];
$operand2 = (int)$_GET['operand2'];
var_dump($operand1, $operand2);

if (isset($_GET['operation'])) {
    switch ($_GET['operation']) {
        case '+':
            $result = $operand1 + $operand2;
            break;
        case '-':
            $result = $operand1 - $operand2;
            break;
        case '*':
            $result = $operand1 * $operand2;
            break;
        case '/':
            $result = $operand2 === 0 ? 0 : $operand1 / $operand2;
            break;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="">
    <input type="text" name="operand1"><br>
    <input type="text" name="operand2"><br>
    <input type="submit" name="operation" value="+">
    <input type="submit" name="operation" value="-">
    <input type="submit" name="operation" value="*">
    <input type="submit" name="operation" value="/">
    <p>Result:</p>
    <input type="text" name="result" value="<?= $result ?>">
</form>
</body>
</html>