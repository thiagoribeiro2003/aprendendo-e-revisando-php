<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de controle</title>
</head>
<body>
   <h1>Comandos Condicionais</h1>

<?php
$prova1 = 7;
$prova2 = 5;
$nota = ($prova1 + $prova2)/2;

// Não tem diferença usar COM ou SEM chaves (Mas com chaves {} é mais utilizado no mercado)

if ($nota < 3)
    $desempenho = "Péssimo";
elseif ($nota < 5)
    $desempenho = "Ruim";
elseif ($nota < 7)
    $desempenho = "Médio";
elseif ($nota < 9)
    $desempenho = "Bom";
else 
    $desempenho = "Excelente";

echo "O seu desempenho foi $desempenho <hr>";
?>

<?php 
$nota = 0;
if ($nota == 10)
{
echo "Parabéns <br>";
    echo "Você tirou a nota máxima";
} else { echo "Você não tirou a nota máxima";}
?>

</body>
</html>