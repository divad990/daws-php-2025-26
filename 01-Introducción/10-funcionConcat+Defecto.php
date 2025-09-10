<?php

$cadena1 = $_GET['cadena1'];
$cadena2 = $_GET['cadena2'];

echo "<p> La concatenación de '" . $cadena1 . "' y '" . $cadena2 . "' es: " . concatenar($cadena1) . "</p>";

function concatenar($cadena1 = " Valor por defecto 1 ", $cadena2 = "Valor por defecto 2 "){
 return $cadena1 . " " . $cadena2;
}

?>