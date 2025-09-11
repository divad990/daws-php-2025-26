<?php

$cadena1 = $_GET['cadena1'] ?? "Primer texto";
$cadena2 = $_GET['cadena2'] ?? "Segundo texto";

function concatenar($cadena1 = " Valor por defecto 1 ", $cadena2 = "Valor por defecto 2 "){
 return $cadena1 . " " . $cadena2;
}

include '10-funcionConcat+Defecto_view.php'

?>