<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interpolação de Variáveis</title>
</head>
<body>
<?php
// Interpolação comum usando aspas duplas
$time = "Grêmio";
$titulo = "Campeão da América";
$ano1 = 1983;
$ano2 = 1995;
echo "O $time foi $titulo em $ano1 e $ano2"; 
echo "<br>";
?>

<?php
// Juntando variável com texto
$x = "tri";
echo "Eu sou ${x}color"; // 1ª forma (Colocando a variável entre chaves)
echo "<br>";
echo "Eu sou ". $x ."color"; //2ª forma (Usando concatenação)
echo "<br>";
?>

<?php
//Variáveis criadas durante a execução
$texto = "Porto Alegre";
$futuro_identificador = "cidade"; 
$$futuro_identificador = $texto; // A string "cidade" valor da variável de cima, acabou virando uma variável com o uso dos dois $$
echo "<h2 align=center>";
echo "Minha cidade é $cidade";
echo "<h2>";
echo "<br>";
?>
</body>
</html>