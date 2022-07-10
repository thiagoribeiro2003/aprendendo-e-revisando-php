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

<h2>while (while primeiro verifica e depois executa)</h2>
<h3>while(enquanto)</h3>
<p><strong>Sintaxe do <em>while</em>:</strong></p>
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

<h2>do...while</h2>
<h3>do...while (do...while primeiro executa e depois verifica)</h3>
<p><strong>Sintaxe do <em>do...while</em>:</strong></p>
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

</body>
</html>