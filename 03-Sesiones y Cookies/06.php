<?php

    session_start();
    $loginS = 0;
    $estado = 0;

    if (!isset($_COOKIE['intentos'])){
        setcookie("intentos");
    }

    if (!isset($_SESSION['log'])) {

        $estado = comprobarLogin();
        if ($estado == 4) {
            setcookie('intentos', ($_COOKIE['intentos'] + 1));
            $loginS = comprobarDatos($_POST['user'],$_POST['passwd']);
        }

        if (isset($_POST['eliminar'])){
            session_unset();
            setcookie('intentos', 0);
        }
        
        require "./06-login.php";
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

        if (array_key_exists($user, $usuarios)){
            if ($usuarios[$user] === $passwd){
                return 1;
            } else {
                return 2;
            }
        } else {
            return 3;
        }
        
    }
?>