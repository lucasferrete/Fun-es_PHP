<?php
/* 
Faça uma rotina recursiva para calcular a somatória de todos os número de 1 a N (N será lido do teclado).
Observação: se N é igual a 5 por exemplo, A somatória dos números será igual a 15, ou seja,
1+2+3+4+5 = 15
 */

$numero;

echo "Digite valor a ser lido: ";
$numero = fgets(STDIN);

echo somatorio($numero);

function somatorio($numero){
    $soma = 0;

    for($i = 1; $i <= $numero; $i++){
        $soma += $i;
    }
    return $soma;
}


?>