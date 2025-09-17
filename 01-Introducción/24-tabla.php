<?php

    $agenda = [
        [
            "nombre" => "Amaia",
            "apellidos" =>"Gorbea Jainaga" ,
            "telefono"=>"945111111" ,
            "email"=>"agorbea@php.net"
        ],
        [
            "nombre" => "David",
            "apellidos" =>"Gonzalez Calzado" ,
            "telefono"=>"722410939" ,
            "email"=>"div.divad990@gmail.com",
        ],
        [
            "nombre" => "Eva Maria",
            "apellidos" =>"Calzado Cariil" ,
            "telefono"=>"667713664" ,
            "email"=>"evita3569@gmail.com"
        ],
        [
            "nombre" => "David",
            "apellidos" =>"Gonzalez Lecuona" ,
            "telefono"=>"620507907" ,
            "email"=>"dagole33@gmail.com"
        ],
        [
            "nombre" => "Rut",
            "apellidos" =>"Gonzalez Lecuona" ,
            "telefono"=>"123456789" ,
            "email"=>"rutgonle@gmail.com"
        ],  
    ];

    imprimir($agenda);

    function imprimir ($agenda){
        echo "<table border=1;>";
        echo "<th>Nombre</th><th>Apellidos</th><th>Telefono</th><th>Email</th>";
        for ($x = 0; $x < count($agenda); $x++){
            echo "<tr>";
            echo "<td>".$agenda[$x]["nombre"]."</td>";
            echo "<td>".$agenda[$x]["apellidos"]."</td>";
            echo "<td>".$agenda[$x]["telefono"]."</td>";
            echo "<td>".$agenda[$x]["email"]."</td>";
            echo "</tr>";
        };
    };

?>