<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programação Orientada a Objetos</title>
</head>
<body>
<h1>Sintaxe:</h1>
    <?php 
    echo "function nome_funcao(arg1, arg2, arg3..., argn) { <br>
    comandos <br>
    [ return (expressão) ] <br>
    } <br>" 
    ?>   
    <br>

<h2>Criando uma função e incluindo uma chamada para ela no programa principal</h2>
<p>Exemplo criando uma função que soma três valores:</p>
    <?php
    function somaValor($valor1, $valor2, $valor3){
    $soma = $valor1 + $valor2 + $valor3;
    echo "A soma dos valores $valor1, $valor2 e $valor3 <br>";
    echo "É $soma";
    }

    $n1 = 5;
    $n2 = 5;
    $n3 = 8;
    somaValor($n1, $n2, $n3);  
    echo "<br>"; 
    ?>



</body>
</html>