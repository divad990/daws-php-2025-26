<?php
    session_start();
    if (!isset($_SESSION['lista'])) {
        $_SESSION['lista'] = [];
    }

    if (isset($_GET['lista']) && $_GET['lista'] != "") {
    $_SESSION["lista"][] = $_GET['lista'];
    }

    if (isset($_GET['vaciar'])) {
        session_unset();
    }

    require "./04-view.php";

?>