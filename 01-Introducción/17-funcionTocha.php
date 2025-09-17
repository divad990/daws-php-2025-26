<?php

    $user = $_GET['user'];
    $passwd = $_GET['passwd'];

    function validar ($user,$passwd) {

        $usuarios = [
            "user1" => [
                "nombre" => "Nora",
                "password" => "123123",
                "email" => "nora@php.net"
            ],
            "user2" => [
                "nombre" => "David",
                "password" => "Jm12345",
                "email" => "div.divad990@gmail.com"
            ],
        ];

        if (isset($usuarios[$user])){
            echo "El usuario existe.";
            if ($usuarios[$user]['password'] == $passwd){
                echo "Autenticado correctamente";
            } else {
                echo "La contraseña es incorrecta";
            };
        } else {
            echo "El usuario no exsite";
        }
        
    };

    include "17-funcionTocha_vista.php";

?>