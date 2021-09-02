<?php
/* 
Use a função da questão passado e lance o dado 1 milhão de vezes. 
Conte quantas vezes cada número saiu. A probabilidade deu certo? 
Ou seja, a porcentagem dos números foi parecida?
 */
Dado();

function Dado(){
    $lado1 = 0;
    $lado2 = 0;
    $lado3 = 0;
    $lado4 = 0;
    $lado5 = 0;
    $lado6 = 0;
    $sorteio;

    for($i = 1; $i <= 1000000; $i++){
        $sorteio = rand(1, 6);
        if($sorteio == 1){
            $lado1++;
        }
        else if($sorteio == 2){
            $lado2++;
        }
        else if($sorteio == 3){
            $lado3++;
        }
        else if($sorteio == 4){
            $lado4++;
        }
        else if($sorteio == 5){
            $lado5++;
        }
        else if($sorteio == 6){
            $lado6++;
        }
    }

    echo "Número 1: $lado1\n";
    echo "Porcentagem: " . ($lado1 / 1000000.0)*100 ."%\n";
    echo "Número 2: $lado2\n";
    echo "Porcentagem: " . ($lado2 / 1000000.0)*100 ."%\n";
    echo "Número 3: $lado3\n";
    echo "Porcentagem: " . ($lado3 / 1000000.0)*100 ."%\n";
    echo "Número 4: $lado4\n";
    echo "Porcentagem: " . ($lado4 / 1000000.0)*100 ."%\n";
    echo "Número 5: $lado5\n";
    echo "Porcentagem: " . ($lado5 / 1000000.0)*100 ."%\n";
    echo "Número 6: $lado6\n";
    echo "Porcentagem: " . ($lado6 / 1000000.0)*100 ."%\n";
    echo "Total: " . $lado1 + $lado2 + $lado3 + $lado4 + $lado5 + $lado6 . "\n";
    echo "Total: " . ($lado1 / 1000000.0)*100 + ($lado2 / 1000000.0)*100 + ($lado3 / 1000000.0)*100 + ($lado4 / 1000000.0)*100 + ($lado5 / 1000000.0)*100 + ($lado6 / 1000000.0)*100 . "%\n";
}


?>