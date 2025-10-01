<?php

$animales = ['Gato','Perro','Urraca','Buho'];
$colores = ['Verde','Rojo','Amaraillo','Azul'];

echo "<p> El número de elemntos del primer array es: " . count($animales) . "</p>";
echo "<p> El número de elemntos del segundo array es: " . count($colores) . "</p>";

array_push($animales,'Zorro');
array_unshift($colores,'Negro');
$todos = array_merge($animales,$colores);
echo "<p>".var_export($animales)."</p>" . "<p>". var_export($colores)."</p>" . "<p>". var_export($todos). "</p>";


?>