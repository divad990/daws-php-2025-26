<?php

$host = "127.0.0.1";
$dbname = "ejercicios";
$user = "root";
$pass = "";

function connect($host, $dbname, $user, $pass){
    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $dbh;
    } catch (PDOException $e){
        echo $e->getMessage();
    }
}
?>