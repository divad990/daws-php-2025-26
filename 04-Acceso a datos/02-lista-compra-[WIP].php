<?php

// TODO: 1. Mostrar lista de productos desde BD
// TODO: 2. Crear formulario para añadir nuevos productos
// TODO: 3. Añadir enlaces "eliminar" en cada producto de la lista
// TODO: 4. Procesar eliminación de productos

include 'conexion.php';

$dbh = connect($host,$dbname,$user,$pass);


function crearTabla($dbh){
    $stmt = $dbh->prepare("CREATE TABLE IF NOT EXISTS lista_compra (
                            id INT NOT NULL AUTO_INCREMENT,
                            producto VARCHAR(100) NOT NULL,
                            PRIMARY KEY (id)
                        )");
    $stmt->execute();
}

?>