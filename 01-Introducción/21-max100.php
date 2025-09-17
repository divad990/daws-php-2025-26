<?php

$num = $_GET['num'];
$resultado = 0;

function calcular ($resultado,$num) {
    for ($x = 0; $x < $num; $x++){
        $valorAnterior = $resultado;
        if (($x % 2) == 0){
            $resultado = $resultado + $num;
        };

        if ($resultado >= 100) {
            return $valorAnterior;
        }
    };
    return $resultado;
};

echo "El resultado es: ".calcular($resultado,$num);

?>