<?php

//Crie uma função em linguagem PHP que receba 3 números e retorne o menor valor, use a função da questão 5.

$num1;
$num2;
$num3;

echo "Digite 1° número: ";
$num1 = fgets(STDIN);

echo "Digite 2° número: ";
$num2 = fgets(STDIN);

echo "Digite 3° número: ";
$num3 = fgets(STDIN);

verificaMenor($num1, $num2, $num3);

function verificaMenor($numero1, $numero2, $numero3){
    if($numero1 < $numero2 && $numero1 < $numero3){
        echo "$numero1 é menor";
    }
    else if($numero2 < $numero1 && $numero2 < $numero3){
        echo "$numero2 é menor";
    }
    else if($numero3 < $numero1 && $numero3 < $numero2){
        echo "$numero3 é menor";
    }

}


?>