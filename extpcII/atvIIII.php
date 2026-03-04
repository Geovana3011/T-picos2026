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
    background-color:Violet;
    text-align:center;
    font-family:Times New Roman;
    font-size: 30px;
}
</style>

<?php

$alunos = [
    ["nome" => "Ana", "nota" => 8],
    ["nome" => "Bruno", "nota" => 6],
    ["nome" => "Carlos", "nota" => 9]
];

$soma = 0;

foreach ($alunos as $aluno) {
    $soma += $aluno["nota"];
}

$media = $soma / count($alunos);

echo "Média da turma: " . round($media, 2) . "<br><br>";

$maiorNota = 0;
$melhorAluno = "";

foreach ($alunos as $aluno) {
    if ($aluno["nota"] > $maiorNota) {
        $maiorNota = $aluno["nota"];
        $melhorAluno = $aluno["nome"];
    }
}

echo "Maior nota: " . $maiorNota . "<br>";
echo "Melhor aluno: " . $melhorAluno;

?>
</body>

</html>