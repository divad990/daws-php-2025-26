<?php

    $estudiantes = [
    "Ane" => [6.5,5.6],
    "Markel" => [7.5,5.7],
    "Nora" => [5.2,2.5],
    "Danel" => [9.1,1.9],
    "Amaia" => [6.8,8.6],
    "Izaro" => [8.4,8.4]
];

function calcularStyle($array){
    if ($array < 5){
        return 'style="color:red"';
    } else {
        return "";
    };
};

function calcularNotaMedia($nota1,$nota2){
    return ($nota1+$nota2)/2;
}

require "32-tocho_view.php";

?>