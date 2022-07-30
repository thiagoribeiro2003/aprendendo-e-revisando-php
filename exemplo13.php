
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estruturas de controle (Repetição)</title>
</head>
<body>
<h1>Comandos de Repetição</h1> 
<hr>

<h2>while - enquanto (while primeiro verifica e depois executa)</h2>
<h3><strong>Sintaxe do <em>while</em>:</strong></h3>
<p>
    while(<em>exp</em>) <br>
    { <br>
    <em>comandos</em> <br>
    } 
</p>

<p><strong>Exemplo (while):</strong></p>
<?php
$count = 1;
while($count<=100)
{
    echo "O valor atual do contador é $count(while) <br>";
    $count++;
} 
?>
<hr>


 
<h2>do...while (do...while primeiro executa e depois verifica)</h2>
<h3>Sintaxe do <em>do...while</em>:</h3>
<p>
    do <br>
    { <br>
        <em>comandos</em> <br>
    } while (<em>exp</em>);
</p>

<p><strong>Exemplo (do...while):</strong></p>
<?php
$numero = 1;
do 
{
    echo "O número é $numero(do...while) <br>";
    $numero++;
} while ($numero<4);
?>
<hr>


<h2>for</h2>
<h3>Sintaxe do <em> for</em>:</h3>
<p>
    for (inicialização; condição; operador) <br>
    { <br>
        <em>comandos</em> <br>
    } <br> <br>

    ou <br><br>

    for(inicialização; condição; operador): <br>
       <em>comandos</em> <br>
    endfor;
</p>

<p><strong>Exemplo <em>(for)</em>:</strong></p>
<?php
// fazendo um incremento
for ($num = 1; $num < 20; $num++)
{
echo " $num,";
}
echo "<br>"
?>


<?php
// fazendo um decremento
echo "Estou fazendo uma contagem regressiva";
for ($cont = 10; $cont > 0; $cont--)
{
    echo " $cont,";
}

echo " ...FIM<br>";
?>


<?php
// for de um array bidimensional
$vetor[0][0] = "elemento00";
$vetor[0][1] = "elemento01";
$vetor[1][0] = "elemento10";
$vetor[1][1] = "elemento11";
for($i = 0; $i<2; $i++)
{
    for($k = 0; $k<2; $k++)
    {
        echo "O elemento da posição $i,$k é ";
        echo $vetor [$i][$k]. "<br>";
    }
}  
?>


<?php
// for utilizando mais de uma váriavel no parâmetro de inicialização
for ($i = 0, $k = 10; $i < 11, $k > 0; $i++, $k--)
{
    echo "\$i vale $i e \$k vale $k";
    if($i==$k){
        echo " (os valores são iguais!)";
    }
    echo "<br>"; 
}
echo "<hr>"; 
?>


<h2>foreach - para cada</h2>
<h3>Sintaxe do <em>foreach</em>: </h3>
<p>
    foreach (<em>$nome_array</em> as <em>$elemento</em>) <br>
    {<br>
        comandos <br>
    }<br> <br>

    ou <br><br>

    foreach (<em>$nome_array</em> as <em>$chave => $valor</em>) <br>
    {<br>
        comandos <br>
    }
</p>

<p><strong>Exemplo <em>(foreach)</em></strong>:</p>
<?php
$vetor = array (1, 2, 3, 4);
foreach ($vetor as $v)
{
    print "O valor atual do vetor é $v. <br>";
}


echo "<br>";


$a = array ("um" => 1, "dois" => 2, "tres" => 3);
foreach($a as $chave => $valor)
{
    print "\$a[$chave] => $valor. <br>";
}
?>


<hr>
<p>De um ate 10 com <strong>for</strong>:</p>
<?php
for ($numero = 1; $numero<11; $numero++)
{
    echo " $numero";
}
echo "<br>";
echo "<hr>";
?>

<p>De um ate 10 com <strong>while</strong>:</p>
<?php
$numero = 1;
while ($numero<11)
{
    echo $numero++;
}
echo "<br>";
echo "<hr>";
?>

<p>De 1 até 10 com <strong>do...while</strong>:</p>
<?php
$numero = 1;
do {
    echo $numero++;
} while($numero<11);

echo "<br>";
echo "<hr>";
?>

<h1>Controlando o Fluxo de Execução</h1>
<hr>

<h2>break - parar</h2>
<p><strong>Exemplo usando o comando <em>break</em>:</strong></p>
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

    echo " $i";
}

// phpinfo();

 

?>
</body>
</html>

