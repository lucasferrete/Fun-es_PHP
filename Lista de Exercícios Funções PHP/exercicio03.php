<?php
/* 
Crie uma função que receba três valores, 'a', 'b' e 'c', 
que são os coeficientes de uma equação do segundo grau 
e retorne o valor do delta, que é dado por 'b² - 4ac’
 */

echo "Digite A: ";
$numero1 = fgets(STDIN);

echo "Digite B: ";
$numero2 = fgets(STDIN);

echo "Digite C: ";
$numero3 = fgets(STDIN);

$delta = calculaDelta($numero1, $numero2, $numero3);

echo "Δ: $delta";

function calculaDelta($a, $b, $c){
    $delta;

    $delta = ($b * 2) - (4 * $a * $c);
    
    return $delta;
}

?>