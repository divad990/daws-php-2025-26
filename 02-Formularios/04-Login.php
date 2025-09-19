<?php 

    $usuarios = array(
        "user1" => array (
            "nombre" => 'Ane',
            "apellidos" => 'López',
            "password" => '123Abc'
        ),
        "user2" => array (
            "nombre" => 'Amaia',
            "apellidos" => 'Otsoa',
            "password" => '456Xyz'
        )
    );

    $recibidoUser = false;
    $recibidoPasswd = false;

if (empty($_POST['user']) && empty($_POST['passwd'])) {
    $recibidoUser = false;
    $recibidoPasswd = false;
} else if (empty($_POST['user']) && !empty($_POST['passwd'])) {
    $recibidoUser = false;
    $recibidoPasswd = true;
} else if (empty($_POST['passwd']) && !empty($_POST['user'])) {
    $recibidoUser = true;
    $recibidoPasswd = false;
} else {
    $user = $_POST['user'];
    $passwd = $_POST['passwd'];
    $recibidoUser = true;
    $recibidoPasswd = true;
    comprobarDatos($user,$passwd,$usuarios);
}

    function comprobarDatos($user,$passwd,$usuarios){
        if (array_key_exists($user, $usuarios)){
            if ($usuarios[$user]["password"]==$passwd){
                return 'true';
            } else {
                return "passwd";
            }
        } else {
            return "usuario";
        };
    };

    require "./04-Login_view.php";

?>