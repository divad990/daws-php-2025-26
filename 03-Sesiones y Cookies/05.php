<?php

    session_start();

// Login de usuario y contraseña
// BD array asociativo
// Si loguea correctamente inicia una sesion y muestra mensaje
// Al cerrar sesión cierra

    if (!isset($_SESSION['log'])) {

        $estado = comprobarLogin();
        if ($estado == 4) {
            $loginS = comprobarDatos($_POST['user'],$_POST['passwd']);

        }
        
        require "./05-login.php";
    } else {
        require "./05-mensaje.php";
    }

    function comprobarLogin(){
        if (empty($_POST['user']) && empty($_POST['passwd'])){
            return 1;
        } else if (empty($_POST['user']) && !empty($_POST['passwd'])){
            return 2;
        } else if (empty($_POST['passwd']) && !empty($_POST['user'])) {
            return 3;
        } else {
            return 4;
        }
    }

    function comprobarDatos($user,$passwd){
        $usuarios = [
        "Aitor" => "Jm12345",
        "Lorea" => "Jm12345",
        ];
        
    }
?>