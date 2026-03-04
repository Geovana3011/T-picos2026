<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
body{
    background-color:Purple;
    text-align:center;
    font-family:Times New Roman;
    font-size:30px;
    color:white;
}
</style>

<?php

$numeros = [10, 20, 30, 40, 50];

unset($numeros[2]);

foreach ($numeros as $num) {
    echo $num . "<br>";
}

?>
</body>
</html>