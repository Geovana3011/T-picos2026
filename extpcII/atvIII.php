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
    background-color:HotPink;
    text-align:center;
    font-family:Times New Roman;
    font-size: 30px;
}
</style>

<?php

$produto = [
    "Produto" => "Notebook",
    "Preço" => 2600,
    "Estoque" => 17
];

foreach ($produto as $chave => $valor) {
    echo $chave . ": " . $valor . "<br>";
}

?>
</body>
</html>