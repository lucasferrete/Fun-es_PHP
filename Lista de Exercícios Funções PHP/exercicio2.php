<?php

//Crie uma função que receba um valor e diga se é nulo ou não.

echo "Digite um número: ";
$numero = fgets(STDIN);

verificaValor($numero);

function verificaValor($numero){
    if($numero == 0){
        echo "Valor nulo";
    }
    else{
        echo "Valor não é nulo";
    }
}



?>