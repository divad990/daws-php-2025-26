<?php
    if (empty($_POST['asunto'])||empty($_POST['email'])||empty($_POST['mensaje'])){
        $recibido = false;
    } else {
        $asunto = $_POST['asunto'];
        $email = $_POST['email'];
        $mensaje = $_POST['mensaje'];
        $motivo = $_POST['motivo'];
        $recibido = true;
    }
    require "./03-Contacto_view.php";
?>