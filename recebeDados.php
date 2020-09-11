<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];



$soma = $num1 + $num2;
$subtracao = $num1 - $num2;
$multiplicacao = $num1 * $num2; 
$divisao = $num1 / $num2; 

echo "Resultado da soma: $soma<br>";
echo "Resultado da subtração: $subtracao<br>";
echo "Resultado da multiplicação: $multiplicacao<br>"; 
echo "Resultado da divisão: $divisao"; 