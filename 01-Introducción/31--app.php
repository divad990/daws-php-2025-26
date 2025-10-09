<?php

$numeros = array();

do {
array_push($numeros,random_int(1,999));
} while (count($numeros)!=20);

function minimo ($numeros){
    $minimo = 1000;
    foreach($numeros as $value){
        if ($minimo>$value){
            $minimo = $value;
        };
    }
    return $minimo;
}

function maximo ($numeros){
    $maximo = 0;
    foreach($numeros as $value){
        if ($maximo<$value){
            $maximo = $value;
        };
    }
    return $maximo;
}

require "31-app_view.php";

?>