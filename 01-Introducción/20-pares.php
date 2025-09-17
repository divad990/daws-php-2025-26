<?php

$num = $_GET['num'];
$resultado = 0;

for ($x = 0; $x < $num; $x++){
    if (($x % 2) == 0){
        $resultado = $resultado + $num;
    };
}

echo "El resultado es: ".$resultado;

?>