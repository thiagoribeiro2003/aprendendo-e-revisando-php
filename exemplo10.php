<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos de Variáveis</title>
</head>
<body>
<h1>Tipos de Variáveis</h1>

<?php
// Numéricas
$numero = 10;
$x = 5;
$numero_hexa = 0x0b; // valor em hexadecimal
$y = 15.002;
$a = 200.3;
?> 

<?php
// Alfanuméricas(strings)

$nome = 'Claudiomar';
$profissao = "Pedreiro";
$texto = "Boa tarde! 
Seja bem-vindo ao meu site!";
echo (nl2br($texto)); // quebrando linha no php usando (nl2br)
echo "<hr>";
?>

<?php
// Array(variáveis escalares) 

// array com índice númerico
$vetor[0] = 30; 
$vetor[1] = 40;
$vetor[2] = 50;
$vetor[15] = 60;
echo $vetor[0];
echo "<hr>";


// array com índice de texto (chave associativa)
$vetor["time"] = "Grêmio";
$vetor["titulo"] = "Campeão da Ámerica";
$vetor["ano"] = 1995;
echo $vetor["ano"];
echo "<hr>";


// matrizes = arrays multidimensionais
// $clube["RS"] ["PortoAlegre"] = "Grêmio";
// $clube["MG"] ["NovaLima"] = "Vila Nova";
// $clube["SP"] ["SaoPaulo"] = "São Paulo";


// array com mais de duas dimensões
$vetor = array (10,50,100, 150, 200);
echo $vetor[2] . "<br>";

$vet = array (1, 2, 3, "nome"=>"joaquim");
echo $vet[0]. "<br>";
echo $vet["nome"];

?>
</body>
</html>