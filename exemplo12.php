<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de controle</title>
</head>
<body>
    <style> h2,p{font-size: 30px}</style>
   <h1>Comandos Condicionais</h1>

<h2>If</h2>
<p><strong>if(se), elseif(senão se) e else(senão)</strong></p>
<p>
    if (exp1) {  <br>
        bloco1 <br>
    } elseif (exp2) { <br>
        bloco2 <br>
    } else { <br>
    bloco3 <br>
    }
</p>
<?php
$prova1 = 7;
$prova2 = 5;
$nota = ($prova1 + $prova2)/2;

// Não tem diferença usar COM ou SEM chaves (Mas com chaves {} é mais utilizado no mercado)

if ($nota < 3) {
    $desempenho = "Péssimo";
} elseif ($nota < 5) {
    $desempenho = "Ruim";
} elseif ($nota < 7) {
    $desempenho = "Médio";
} elseif ($nota < 9) {
    $desempenho = "Bom";
} else {
    $desempenho = "Excelente";
}
echo "<p>O seu desempenho foi $desempenho </p><br>";
?>

<?php 
$nota = 10;
if($nota == 10) {
    echo "<p>Parabéns <br>";
    echo "<p>Você tirou a nota máxima</p>";
} else { 
    echo "<p>Você não tirou a nota máxima</p>";
}
?>

<p><strong>Sintaxe alternativa usando o endif</strong></p>
<?php
// if ():
//     bloco1
// elseif ():
//     bloco2
// else: 
//     bloco3
// endif;
?>
<hr>


<h2>Switch</h2>
<p>Utilizando <strong>If</strong> e <strong>Switch</strong> na mesma coisa</p>

<p>Exemplo:</p>
<?php
// if
$numero = 0;
if ($numero == 0) {
    echo "<p>Número vale 0 (if)</p>";
} elseif ($numero == 1) {
    echo "<p>Número vale 1 (if)</p>";
} elseif ($numero == 2) {
    echo "<p>Número vale 2 (if)</p>";
} else {
    echo"<p>O número não é 1, 2 e 3 (IF)</p> <br>";
}


// Switch
$numero = 2;
switch ($numero)
{
    case 0:
        echo "<p>número vale 0 (switch)</p>";
        break;
    case 1:
        echo "<p>número vale 1 (switch)</p>";
        break;
    case 2:
        echo "<p>número vale 2 (switch)</p>";
        break;
     default:
         echo "<p>O número não é 1, 2 e 3 (SWITCH)</p> <br>";
         break;
}

?>

<?php
$opcao = "simmm";

switch($opcao)
{
    case 's':
        echo "<p>Você escolheu a opção Sim</p>";
        break;
    case 'n':
        echo "<p>Você escolheu a opção Não (switch)</p>";
        break;
    default: 
        echo "<p>Resposta inválida</p>"; 
}
// A opção DEFAULT tem a mesma função da opção else no comando IF, se todas as expressões anteriores retornarem falso, será executado o bloco de comando que aparece após o default, seu uso não é obrigatório no comando switch
?>
</body>
</html>