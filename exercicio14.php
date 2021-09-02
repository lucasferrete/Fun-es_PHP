<?php
/* 
Crie um programa em PHP que conte os dígitos de um determinado número usando recursão.
Observação: se o usuário inserir o número 250, a saída esperada deve ser : o número
digitado tem 3 dígitos.
 */

$numero;

echo "Digite um número: ";
$numero = fgets(STDIN);

$numero = (Int)$numero;

contarDigitos($numero);

function contarDigitos($num){
    $tamanho = strlen($num);
    echo "O número possui $tamanho digitos";
}

?>