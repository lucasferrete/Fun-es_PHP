<?php
 
$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];

calculaMediaTresNotas($nota1, $nota2, $nota3);
calculaMaioresNotas($nota1, $nota2, $nota3);
calculaMaiorMenorNotas($nota1, $nota2, $nota3);

function calculaMediaTresNotas($nota1, $nota2, $nota3){
    $mediaNotas = ($nota1 + $nota2 + $nota3) / 3;
    echo "Média das três notas: " . number_format((float)$mediaNotas, 1, '.', '') . "<br>";
}

function calculaMaioresNotas($nota1, $nota2, $nota3){
    $PmaiorNota = 0;
    $SmaiorNota = 0;
    $mediaDuasNotas = 0;

if($nota1 > $nota2 && $nota1 > $nota3){
    $PmaiorNota = $nota1;
    $nota1 = 0;
}
else if($nota2 > $nota1 && $nota2 > $nota3){
    $PmaiorNota = $nota2;
    $nota2 = 0;
}
else if($nota3 > $nota1 && $nota3 > $nota2){
    $PmaiorNota = $nota3;
    $nota3 = 0;
}

if($nota1 > $nota2 && $nota1 > $nota3){
    $SmaiorNota = $nota1;
}
else if($nota2 > $nota1 && $nota2 > $nota3){
    $SmaiorNota = $nota2;
}
else if($nota3 > $nota1 && $nota3 > $nota2){
    $SmaiorNota = $nota3;
}

$mediaDuasNotas = ($PmaiorNota + $SmaiorNota) / 2;

echo "Primeira maior nota: $PmaiorNota<br>";
echo "Segunda maior nota: $SmaiorNota<br>";
echo "Média das duas maiores notas: " . number_format((float)$mediaDuasNotas, 1, '.', '') . "<br>";

}

function calculaMaiorMenorNotas($nota1, $nota2, $nota3){

    if($nota1 > $nota2 && $nota1 > $nota3){
        echo "$nota1 foi a maior nota<br>";
    }
    else if($nota2 > $nota1 && $nota2 > $nota3){
        echo "$nota2 foi a maior nota<br>";
    }
    else if($nota3 > $nota1 && $nota3 > $nota2){
        echo "$nota3 foi a maior nota<br>";
    }

    if($nota1 < $nota2 && $nota1 < $nota3){
        echo "$nota1 foi a menor nota<br>";
    }
    else if($nota2 < $nota1 && $nota2 < $nota3){
        echo "$nota2 foi a menor nota<br>";
    }
    else if($nota3 < $nota1 && $nota3 < $nota2){
        echo "$nota3 foi a menor nota<br>";
    }

}

?>