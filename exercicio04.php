<?php
/* 
Usando as 3 funções acima, crie um aplicativo que calcula 
as raízes de uma equação do 2o grau:
ax² + bx + c=0. Para ela existir, o coeficiente 'a' deve ser diferente de zero.
Caso o delta seja maior ou igual a zero, as raízes serão reais. 
Caso o delta seja negativo, as reais serão complexas e da forma: x + iy
 */

echo "Digite A: ";
$numero1 = fgets(STDIN);

echo "Digite B: ";
$numero2 = fgets(STDIN);

echo "Digite C: ";
$numero3 = fgets(STDIN);

if($numero1 != 0){
    $delta = calculaDelta($numero1, $numero2, $numero3); 

    if($delta > 0 || $delta == 0){
        calculaRaiz($delta, $numero1, $numero2);
    }
    else{
        echo "Δ: $delta\n";
        echo "Não é possível continuar a operação";
    }
}
else{
    echo "Não foi possível executar a operação";
}

function calculaRaiz($delta, $a, $b){
    $x1 = (-$b + sqrt($delta)) / (2 * $a);
    $x2 = (-$b - sqrt($delta)) / (2 * $a);

    echo number_format((float)$x1, 2, '.', '') . "\n";
    echo number_format((float)$x2, 2, '.', '') . "\n";
}

function calculaDelta($a, $b, $c){
    $delta;

    $delta = ($b * 2) - (4 * $a * $c);
    
    return $delta;
}

?>