<?php

//Crie uma função em linguagem PHP chamado Dado() que retorna, através de sorteio, um número de 1 até 6.

function Dado(){
    $dado = rand(1, 6);
    return $dado;
}

echo "O número sorteado foi " . Dado();

?>