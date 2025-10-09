<?php

    if (!empty($_GET['username'])) {
        setcookie("username", $_GET['username']);
    }

    require "./01-guardarCookie_view.php";

?>
