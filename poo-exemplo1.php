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
    echo "$valor1 + $valor2 + $valor3 = $soma";
    }

    $n1 = 5;
    $n2 = 5;
    $n3 = 8;
    somaValor($n1, $n2, $n3);  
    echo "<br>"; 
    ?>

<h2>Utilizando o comando return em uma função</h2>
<p>Exemplo criando função que deixa uma string toda em maiusculo incluindo caracteres com acento:</p>
    <?php
    function maiusculo($string){
        $string = strtoupper ($string);
        $string = str_replace ("á", "Á", $string);
        $string = str_replace ("é", "É", $string);
        $string = str_replace ("í", "Í", $string);
        $string = str_replace ("ó", "Ó", $string);
        $string = str_replace ("ú", "Ú", $string);
        $string = str_replace ("â", "Â", $string);
        $string = str_replace ("ê", "Ê", $string);
        $string = str_replace ("ô", "Ô", $string);
        $string = str_replace ("î", "I", $string);
        $string = str_replace ("û", "Û", $string);
        $string = str_replace ("ã", "Ã", $string);
        $string = str_replace ("õ", "Õ", $string);
        $string = str_replace ("ç", "Ç", $string);
        $string = str_replace ("à", "À", $string);
        return $string;
    }
    $nome = "thiago";
    $nomeM = maiusculo($nome);
    echo "Meu nome é $nomeM";
    ?>
</body>
</html>