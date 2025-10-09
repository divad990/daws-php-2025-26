<?php

    if (!empty($_GET['idioma'])) {
        setcookie("idioma", $_GET['idioma'], time() + 60);
    }

    require "./03-guardarIdioma_view.php";

?>
