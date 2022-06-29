<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>
<body>
    <style>
    body {font-size: 25px; font-family: arial; }
    </style>
<h1>Operadores</h1> 
<h2>Tipos de Operadores</h2>
<ul>
    <li>Operadores aritméticos</li>
    <li>Operadores Binários</li>
    <li>Operadores de comparação</li>
    <li>Operadores de atribuição</li>
    <li>Operadores lógicos</li>
    <li>Operador ternário</li>
    <br>
</ul>
<hr>


<h2>Pré e Pós-incremento</h2>
<ul>
    <li><strong>-oper</strong> (Troca o sinal do operando).</li>
    <li><strong>++oper</strong> (Pré-incremento. Primeiro incrementa o valor do operando e depois realiza a operação).</li>
    <li><strong>--oper</strong> (Pré-decremento. Primeiro decrementa o valor do operando e depois realiza a operação).</li>
    <li><strong>oper++</strong> (Pós-incremento. Primeiro realiza a operação e depois incrementa o operando).</li>
    <li><strong>oper--</strong> (Pós-decremento. Primeiro realiza a operação e depois decrementa o operando).</li>
</ul>

<?php
// Pré e Pós-incremento
$a = 1;
$b = 3;
$c = 5;
$res1 = ++$b - $a;
$res2 = $c-- + $a;
$res3 = --$a + $c++;
echo "a = $a<br> b = $b<br> c = $c<br><br>";
echo "res1 = $res1<br> 
      res2 = $res2<br>
      res3 = $res3<br>";
?>




<h2>Operadores Aritméticos</h2>
<ul>
    <li><strong>+</strong> (Adição).</li>
    <li><strong>-</strong> (Subtração).</li>
    <li><strong>*</strong> (Multiplicação).</li>
    <li><strong>/</strong> (Divisão).</li>
    <li><strong>%</strong> (Resto da divisão).</li>
</ul>

<?php 
// Operadores Aritméticos
?>





<h2>Operadores Binários</h2>
<ul>
    <li><strong>~op1</strong> (Inverte os bits de op1).</li>
    <li><strong>op1 & op2</strong> (Operação E(AND) bit a bit).</li>
    <li><strong>op1 | op2</strong> (Operação OU(OR) bit a bit).</li>
    <li><strong>op1 ^ op2</strong> (Operação OU exclusivo (XOR)).</li>
    <li><strong>op1 >> n</strong> (Desloca op1 n bits à direita).</li>
    <li><strong>op1 << n</strong> (Desloca op1 n bits à esquerda).</li>
</ul>

<?php
//Operadores Binários

//Exemplo 1 
$num = 14;
$deslocado = $num >> 1;  // >> desloca 1 bit para direita
echo $deslocado;
echo "<br>";

//Exemplo 2
$num = 15;
$resultado1 = $num >> 1;
$resultado2 = $num <<2;
echo $resultado1;
echo "<br>";
echo $resultado2;
?>


<h2>Operadores de Comparação</h2>
<ul>
<li><strong>op1 == op2</strong> (Verdadeiro se op1 <strong>for igual a</strong> op2).</li>
<li><strong>op1 === op2</strong> (Verdadeiro se op1 for <strong>idêntico a</strong> op2).</li>
<li><strong>op1 >= op2</strong> (Verdadeiro se op1 for <strong>maior ou igual a</strong> op2).</li>
<li><strong>op1 <= op2</strong> (Verdadeiro se op1 for <strong>menor ou igual a</strong> op2).</li>
<li><strong>op1 != op2</strong> (Verdadeiro se op1 for <strong>diferente de</strong> op2).</li>
<li><strong>op1 <> op2</strong> (Também serve para <strong>representar diferença</strong>).</li>
<li><strong>op1 > op2</strong> (Verdadeiro se op1 <strong>for maior que</strong> op2).</li>
<li><strong>op1 < op2</strong> (Verdadeiro se op1 for <strong>menor que</strong> op2).</li>
</ul>
<?php
//Operadores de comparação
?>


<h2>Operadores de Atribuição</h2>
<ul>
    <li><strong>op1 = op2</strong> (op1 recebe o valor de op2).</li>
    <li><strong>op1 += op2</strong> (Equivale a op1 = op1 + op2).</li>
    <li><strong>op1 -= op2</strong> (Equivale a op1 = op1 - op2).</li>
    <li><strong>op1 *= op2</strong> (Equivale a op1 = op1 * op2).</li>
    <li><strong>op1 /= op2</strong> (Equivale a op1 = op1 / op2).</li>
    <li><strong>op1 .= op2</strong> (Concatenação: equivale a op1 = op1.op2.).</li>
    <li><strong>op1 %= op2</strong> (Equivale a op1 = op1 % op2).</li>
    <li><strong>op1 <<= op2</strong> (Equivale a op1 = op1 << op2).</li>
    <li><strong>op1 >>= op2</strong> (Equivale a op1 = op1 >> op2).</li>
    <li><strong>op1 &= op2</strong> (Equivale a op1 = op1 & op2).</li>
    <li><strong>op1 |= op2</strong> (Equivale a op1 = op1 | op2).</li>
    <li><strong>op1 ^= op2</strong>< (Equivale a op1 = op1 ^ op2).</li>
</ul>

<?php
//Operadores de atribuição

$soma = 0;
$valor1 = 10;
$valor2 = 20;
$valor3 = 30;
$soma += $valor1; // 0 + 10 = 10 ($soma fica com 10)
$soma += $valor2; // 10 + 20 = 30 ($soma fica com 30)
$soma *= $valor3; // 30 * 30 = 900 ($soma fica com 900);
$soma %= 100; // 900 % 100 = 0 ($soma fica com 0);
echo $soma;
?>


<h2>Operadores Lógicos</h2>
<ul>
    <li><strong>!op1</strong> (Verdadeiro se op1 for falso).</li>
    <li><strong>op1 AND op2</strong> (Verdadeiro se op1 E op2 forem Verdadeiros).</li>
    <li><strong>op1 OR op2</strong> (Verdadeiro se op1 OU op2 forem verdadeiros).</li>
    <li><strong>op1 XOR op2</strong> (Verdadeiro se só op1 ou só op2 for verdadeiro).</li>
    <li><strong>op1 && op2 </strong> (Verdadeiro se op1 E op2 forem verdadeiros).</li>
    <li><strong>op1 || op2</strong> (Verdadeiro se op1 OU op2 forem verdadeiros).</li>

</ul>

<?php
// Operador Lógico

$nome = "Thiago";
$email = "thiago123";
$cpf = "";

if (empty($nome) OR empty($email) OR empty($cpf)) {
    echo "Você deve preencher os campos nome, email, e CPF!";
}


// Faz parte do operador ternário
$frequencia = 0.70;
$nota = 4;
?>


<h2>Operador Ternário</h2>
<ul>
    
<li><strong>cond ? exp1 : exp2</strong> (Uma forma abreviada de usar o comando condicional <strong>if</strong>).</li>
     <li> Exemplo: </li>
</ul>
<p><?=$nota = ($frequencia >= 0.75) ? ($nota+2) : ($nota-2)?></p>
<?php
echo $nota;?>
</table>
</body>
</html>