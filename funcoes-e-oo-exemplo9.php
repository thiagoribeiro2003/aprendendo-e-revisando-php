<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
<h1>Passagem de parâmetro</h1>
<h2>Exemplo sobre passagem de parâmetro:</h2>
<?php
function nada( $b, $c, $a = 10){
    echo "\$a vale $a<br>
        \$b vale $b<br>
        \$c vale $c";
}
nada(1,5);
?>

    
</body>
</html>