<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
<h1>Operadores</h1> 
<h2>Tipos de Operadores</h2>
<ul>
    <li>Operadores aritméticos</li>
    <li>Operadores Binários</li>
    <li>Operadores de comparação</li>
    <li>Operadores de atribuição</li>
    <li>Operadores lógicos</li>
    <li>Operador ternário</li>
</ul>

<?php
// Pré e Pós-incremento
$a = 1;
$b = 3;
$c = 5;
$res1 = ++$b - $a;
$res2 = $c-- + $a;
$res3 = --$a + $c++;
echo "a = $a<br> b = $b<br> c = $c<br><br>";
echo "res1 = $res1<br> 
      res2 = $res2<br>
      res3 = $res3<br>";
echo "<hr>";
?>

<?php
//Operadores Binários
$num = 14;
$deslocado = $num >> 1;  // >> desloca 1 bit para direita
echo $deslocado;
?>

</body>
</html>