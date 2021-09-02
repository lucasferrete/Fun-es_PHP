<?php

//Crie uma função que receba um valor e informe se ele é positivo ou não.

echo "Digite um número: ";
$numero = fgets(STDIN);

positivoNegativo($numero);

function positivoNegativo($numero){
    if($numero > 0){
        echo "Positivo";
    }
    else if($numero == 0){
        echo "Neutro";
    }
    else{
        echo "Negativo";
    }

}




?>