<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controlando o Fluxo de execução</title>
</head>
<body>
<h1>Controlando o Fluxo de Execução</h1>
<hr>

<h2>break - parar</h2>
<p><strong>Exemplo usando o comando <em>break</em></strong>:</p>
<?php
$k = 1;
while($k<20){
    if($k == "sair"){
        break;
    }
    echo " $k,";
    $k++;
}
?>

<p><strong>Exemplo usando o comando <em>break</em> com um argumento numérico opcional:</strong></p>
<?php
for ($i=0, $k=0; $i<10, $k<20; $i++, $k++)
{
    if($i == 10){
        
        echo " Encerrando o primeiro while...<br>";
        break;
        echo "Essa linha não vai ser impressa!!! ";
    } elseif ($i == 15){
        echo " Encerrando os dois whiles...";
        break;
    }

    echo " $i ";
}
echo "<hr>";
?>

<h2>Continue</h2>
<p><strong>Exemplo usando o comando <em>continue</em></strong>:</p>
<?php
$vetor = array(1, 3, 5, 8, 11, 12, 15, 20, 22, 24, 26, 28);
for($i = 0; $i<sizeof($vetor); $i++){
    if($vetor[$i] % 2 != 0) // é ímpar
    {continue;}else{}
    $num_par = $vetor[$i];
    echo "O número $num_par é par. <br>";
}
?>

</body>
</html>