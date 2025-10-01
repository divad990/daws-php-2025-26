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

    function imprimir ($agenda){
        echo "<table border=1;>";
        echo "<th>Nombre</th><th>Apellidos</th><th>Telefono</th><th>Email</th>";
        foreach ($agenda as $value){
            echo "<tr>";
            echo "<td>".$value["nombre"]."</td>";
            echo "<td>".$value["apellidos"]."</td>";
            echo "<td>".$value["telefono"]."</td>";
            echo "<td>".$value["email"]."</td>";
            echo "</tr>";
        };
    };

    require "29-foreach3_view.php";

?>