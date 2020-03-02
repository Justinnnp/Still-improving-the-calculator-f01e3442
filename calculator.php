<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
<form action="" method="post">
    <div class="label">
        <label> 
            <input type="number" name="first"> First number
        </label>
    </div>
    <div class="label">
        <label> 
            <input type="number" name="second"> Second number
            <output name="output">
        </label>
    </div>
    <?php

    $numberOne = $_POST['first'] ?? null;
    $numberTwo = $_POST['second'] ?? null;

    $total = $_POST['output'] ?? null;

    $math = $_POST['reken'] ?? null;

    
    switch ($math) {
    case "add":
            echo $total = $numberOne + $numberTwo;
            break;
    case "substract":
            echo $total = $numberOne - $numberTwo;
            break;
    case "multiply":
            echo $total = $numberOne * $numberTwo;
            break;
    case "divide":
            echo $total = $numberOne / $numberTwo;
            break;
    case "modulo":
            echo $total = $numberOne % $numberTwo;
            break;
    }
    ?>
    <input value="add" type="submit" name="reken">
    <input value="substract" type="submit" name="reken">
    <input value="multiply" type="submit" name="reken">
    <input value="divide" type="submit" name="reken">
    <input value="modulo" type="submit" name="reken">
</form>
</body>
</html>