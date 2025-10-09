<?php
include 'conexion.php';

$dbh = connect($host,$dbname,$user,$pass);

// Insertar datos de prueba
$productos = ["Pan", "Leche", "Huevos", "Tomates", "Arroz", "Aceite"];

foreach($productos as $producto){
    $stmt = $dbh->prepare("INSERT INTO lista_compra (producto) VALUES (?)");
    $stmt->execute([$producto]);
}

echo "Datos insertados correctamente";
$dbh = null;
?>