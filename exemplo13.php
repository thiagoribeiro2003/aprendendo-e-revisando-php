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
    for ( inicialização; condição; operador) <br>
    { <br>
        <em>comandos</em> <br>
    }
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
echo "O valor é";
for ($cont = 10; $cont > 0; $cont--)
{
    echo " $cont,";
}

echo " ...FIM";
?>

</body>
</html>