<?php

    if (!empty($_GET['username'])) {
        setcookie("username", $_GET['username']);
    }
    if (isset($_GET['eliminar'])){
        setcookie("username", "", time() - 3600);
    }

    require "./02-guardarYEliminarCookie_view.php";

?>
