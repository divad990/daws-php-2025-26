<?php

    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    echo "El resultado de la operacion es: ". operacion($num1, $num2);

    function operacion ($num1, $num2) {
        if ($num1 != $num2) {
            return $num1 + $num2;
        } else {
            return $num1 * $num2;
        }
    };

?>