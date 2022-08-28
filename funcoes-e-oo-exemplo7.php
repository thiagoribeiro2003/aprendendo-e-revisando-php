<<<<<<< HEAD
<?php
=======
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Passagem de parâmetro</title>
</head>
<body>
<h1>Passagem de parâmetro e passagem de parâmetro por valor</h1>
<h2></h2>
<?php 
>>>>>>> 2efab2dbd0705fd94c88f7c2c59419fc6258370f
function dobro($valor){
    $valor = 2 * $valor;
}

function duplica(&$valor){
    $valor = 2 * $valor;
}

$valor = 5;
<<<<<<< HEAD
dobro($valor);
echo $valor. "<br>";
duplica($valor);
echo $valor;
=======

dobro($valor);
echo $valor. "<br>";

duplica($valor);
echo $valor;
?>

    
</body>
</html>
>>>>>>> 2efab2dbd0705fd94c88f7c2c59419fc6258370f
