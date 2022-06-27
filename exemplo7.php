<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>functions</title>
</head>
<body>
<!-- Tornando variavel global para modificar ela dentro da função e alterar o seu valor na variavel principal -->
<?php
$num = 5000;
function testa_escopo1() 
{
    global $num;
    $num += 5;
    echo $num. "<br>";
}
echo $num. "<br>";
testa_escopo1();
?>

<?php
$numero = 5000;
function testa_escopo2()
{
    echo $GLOBALS["numero"]. "<br>";
    $GLOBALS["numero"]++;
}
testa_escopo2();
echo $numero
?>
</body>
</html>