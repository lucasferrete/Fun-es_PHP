<?php
/* 
Crie um programa que calcula o máximo divisor comum entre dois números usando a recursão.
Observação : Dois números naturais sempre têm divisores comuns. Assim, o máximo divisor
comum entre os dois é o maior de seus divisores.
Exemplificando...os divisores comuns de 12 e 18 são 1,2,3 e 6. Dentre eles, 6 é o maior.
Então, chamamos o 6 de máximo divisor comum de 12 e 18 e indicamos m.d.c.(12,18) = 6
 */

echo "Digite o primeiro número: ";
$numero1 = fgets(STDIN);

echo "Digite o segundo número: ";
$numero2 = fgets(STDIN);

$calcula = calculaMDC($numero1, $numero2);

echo "O MDC entre " . $numero1 . "e " . $numero2 . "é " . $calcula;

function calculaMDC($num1, $num2){
    if($num2 != 0){
       return calculaMDC($num2, $num1 % $num2);
    }
    else {
       return $num1;
    }
}








?>