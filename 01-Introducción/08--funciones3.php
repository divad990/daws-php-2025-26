<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

echo "El primer numero es mayor al segundo numero? " . esMayor($num1, $num2);

function esMayor($numeroA, $numeroB){
 return var_export($numeroA < $numeroB);
}
?>