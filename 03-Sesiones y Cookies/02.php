<?php

    if (!empty($_GET['username'])) {
        setcookie("username", $_GET['username']);
    }
    if (isset($_GET['eliminar'])){
        setcookie("username");
    }

    require "./02-view.php";

?>