<?php

$num = $_GET['num'];
$resultado = 0;

for ($x = 0; $x < $num; $x++){
    $resultado = $resultado + $num;
}

echo "El resultado es: ".$resultado;

?>