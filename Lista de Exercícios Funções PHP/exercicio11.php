<?php

$temperatura = $_POST["temperatura"];
$valorTemperatura = $_POST["valor_temperatura"];

echo converterTemperartura($temperatura, $valorTemperatura);

function converterTemperartura($temp, $vTemperatura){
    $converter = 0;

    switch($temp){
        case 'farenheit':
            $converter = (9 * $vTemperatura / 5) + 32;
            return $converter;
            break;
    
        case 'celsius':
            $converter = 5 * ($vTemperatura - 32) / 9;
            return $converter;
            break;
    }

}

?>