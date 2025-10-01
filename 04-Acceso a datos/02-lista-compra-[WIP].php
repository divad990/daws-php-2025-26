<?php

// TODO: 2. Crear formulario para añadir nuevos productos
// TODO: 3. Añadir enlaces "eliminar" en cada producto de la lista
// TODO: 4. Procesar eliminación de productos

include 'conexion.php';
$nombreProducto = $_POST['producto'] ?? null;
$dbh = connect($host,$dbname,$user,$pass);

crearTabla($dbh);
$productos = consultar($dbh);

if(isset($_POST['anadir']) && $nombreProducto) {
    insertarproducto($dbh, $nombreProducto);
    // Refrescar la lista después de añadir
    $productos = consultar($dbh);
}
if(isset($_GET['accion']) && $_GET['accion'] === 'vaciar') {
    vaciarLista($dbh);
    // Refrescar la lista después de vaciar
    $productos = consultar($dbh);
}
if (isset($_GET['accion']) == 'eliminar' && isset($_GET['id'])) {
    eliminarProducto($dbh, $_GET['id']);
    $productos = consultar($dbh);
}

function crearTabla($dbh){
    $stmt = $dbh->prepare("CREATE TABLE IF NOT EXISTS lista_compra (
                            id INT NOT NULL AUTO_INCREMENT,
                            producto VARCHAR(100) NOT NULL,
                            PRIMARY KEY (id)
                        )");
    $stmt->execute();
}
function consultar($dbh){
    $stmt = $dbh->prepare("SELECT id, producto FROM lista_compra");
    $stmt->execute();
    return $stmt->fetchAll();
}
function insertarproducto($dbh, $nombreProducto) {
    $stmt = $dbh->prepare("INSERT INTO lista_compra (producto) VALUES (?)");
    $stmt->execute([$nombreProducto]);
}
function vaciarLista($dbh) {
    $stmt = $dbh->prepare("DELETE FROM lista_compra");
    $stmt->execute();
}
function eliminarProducto($dbh, $id) {
    $stmt = $dbh->prepare("DELETE FROM lista_compra WHERE id = ?");
    $stmt->execute([$id]);
}
require "02-lista-compra-[WIP]_view.php";
?>