<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aspas e caractere de controle</title>
</head>
<body>
<?php
// (\) barra invertida é um caractere de controle e indica que o caractere faz parte do texto
echo  'Welcome to the John\'s Page';
echo '<hr>';


// sem o br nao vai mostrar a exibição da quebra de linha no browser(navegador).
echo '<p>isto é um teste
Estou aprendendo a escrever textos com aspas simples!</p>';
echo '<hr>';


// So irá mostrar a quebra de linha no browser de tiver uma tag <br>
echo 'Isto é um teste';
echo '<br>';
echo 'Coloquei uma quebra de linha';
echo '<br>';
echo '<hr>';


$palavra = "teste";
$frase = "Isso é um $palavra";
echo $frase;
echo '<hr>';


echo "Colocando \"aspas duplas\" dentro de aspas duplas";
?>
</body>
</html>