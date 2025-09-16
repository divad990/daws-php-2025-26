<?php

    $diccionario = array(
        "divad990" => array (
            "Nombre" => "David",
            "Apellidos" => "Gonzalez",
            "Email" => "div.divad990@gmail.com",
        ),
        "calvo" => array (
            "Nombre" => "Dani",
            "Apellidos" => "Tomicic",
            "Email" => "dani.tomicic@ikas.egibide.org",
        ),
    );

    function getDatos($diccionario,$username,$dato){
        echo "El usuario solicitado es: " . $username .", el dato solicitado es: ". $dato . ", resultado: " . ($diccionario[$username][$dato]);
    }

?>