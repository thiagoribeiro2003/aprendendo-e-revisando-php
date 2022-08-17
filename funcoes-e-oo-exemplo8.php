<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação Orientada a Objetos</title>
</head>
<body>
    <h1>Passagem de parâmetros</h1>
    <h2>Exemplo de uma passagem de parâmetro:</h2>
<?php 
function futebol($time, $titulo = "Mundial"){
    echo "O $time é $titulo<br>";
}

futebol("Flamengo", "Campeão Carioca");
futebol("São Paulo");
futebol("Palmeiras", "Campeão da Libertadores");
futebol("Grêmio");
echo "<hr>";
?>
</body>
</html>