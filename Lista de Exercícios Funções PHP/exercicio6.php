<?php

//Crie uma função em linguagem PHP que receba 2 números e retorne o menor valor.

$num1;
$num2;

echo "Digite o primeiro número: ";
$num1 = fgets(STDIN);

echo "Digite o segundo número: ";
$num2 = fgets(STDIN);

verificaMenor($num1, $num2);

function verificaMenor($numero1, $numero2){
    if($numero1 < $numero2){
        echo "$numero1 é menor";
    }
    else if($numero1 == $numero2){
        echo "Números iguais";
    }
    else{
        echo "$numero2 é menor";
    }
}

?>