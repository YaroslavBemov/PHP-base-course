<?php
//1. Создать форму-калькулятор с операциями: сложение, вычитание, умножение, деление. Не забыть обработать деление на ноль! Выбор операции можно осуществлять с помощью тега <select>.
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<input type="text" id="operand1">
<select id="operation">
    <option value="add">+</option>
    <option value="sub">-</option>
    <option value="multi">*</option>
    <option value="div">/</option>
</select>
<input type="text" id="operand2">
<input type="submit" value="=" id="submit-btn">
<input type="text" id="result">

<script>
    window.onload = function () {
        window.addEventListener('click', ev => {
            ev.preventDefault()

            let operand1 = document.getElementById('operand1').value
            let operand2 = document.getElementById('operand2').value
            let operation = document.getElementById('operation').value
            let submitBtn = document.getElementById('submit-btn')
            let result = document.getElementById('result')
            let url = `./calculator.php?operand1=${operand1}&operand2=${operand2}&operation=${operation}`

            if (ev.target === submitBtn) {
                fetch(url)
                    .then(response => response.json())
                    .then(data => result.value = data.result)
            }
        })
    }
</script>

</body>
</html>