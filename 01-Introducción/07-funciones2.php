<?php

$num = $_GET['num'];

echo "El cuardado del numero " . $num . " es " . cuadrado($num);

function cuadrado($numero){
 return $numero*$numero;
}
?>