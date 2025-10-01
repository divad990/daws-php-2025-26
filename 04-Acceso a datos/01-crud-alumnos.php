<?php

$host = "127.0.0.1";
$dbname = "ejercicios";
$user = "root";
$pass = "";

$dbh = connect($host,$dbname,$user,$pass);
//create($dbh);
insertar($dbh);
consultar($dbh);
close($dbh);


function connect($host, $dbname, $user, $pass){
    try {
        $dbh = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        return $dbh;
    } catch (PDOException $e){
        echo $e->getMessage();
    }
}
function close($dbh){
    $dbh = null;
}
function create($dbh){
    $stmt = $dbh->prepare("CREATE TABLE alumnos (
                            id INT NOT NULL AUTO_INCREMENT,
                            nombre VARCHAR(50) NOT NULL,
                            apellidos VARCHAR(100) NOT NULL,
                            email VARCHAR(100) NOT NULL,
                            edad INT NOT NULL,
                            PRIMARY KEY (id)
                            );
                        ");
    $stmt->execute();
}
function consultar($dbh){
    $stmt = $dbh->prepare("SELECT id, nombre FROM alumno");
    $stmt->execute();
}
function insertar($dbh){
    $stmt = $dbh->prepare("INSERT INTO alumnos (nombre, apellidos, email, edad)
                            VALUES ('Ane', 'Eguiluz Larrain', 'ane@egibide.org', 25);
                            INSERT INTO alumnos (nombre, apellidos, email, edad)
                            VALUES ('Jone', 'Zabala Lopez', 'jone@egibide.org', 22);
                        ");
    $stmt->execute();
}
?>