<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão de variáveis</title>
</head>
<body>
<?php
$string = "5";
$numero = 3.25;
$texto = "3 vezes campeão";
$resultado = (int) $numero + $string;

echo $resultado;
echo "<br>";

// Transformando número do tipo float(número com virgula/ponto) em int(número inteiro)
$x = 50;
$y = 2.85;
$soma = (int) ($x + $y);
echo $soma;
?>
</body>
</html>