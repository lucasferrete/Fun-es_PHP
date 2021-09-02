<?php

//Crie uma função em linguagem PHP que receba 2 números e retorne o maior valor.

$num1;
$num2;

echo "Digite o primeiro número: ";
$num1 = fgets(STDIN);

echo "Digite o segundo número: ";
$num2 = fgets(STDIN);

verificaMaior($num1, $num2);

function verificaMaior($numero1, $numero2){
    if($numero1 > $numero2){
        echo "$numero1 é maior";
    }
    else if($numero1 == $numero2){
        echo "Números iguais";
    }
    else{
        echo "$numero2 é maior";
    }
}

?>