<?php

$a = $_GET['a'];
$b = $_GET['b'];

echo "La multiplicación de $a por $b es " . multiplicar($a, $b);

function multiplicar($a , $b) {
    return $a * $b;
}

?>