<?php

$a = $_GET['a'];
$b = $_GET['b'];

print ("<p>La resta de $a menos $b es " . ($a - $b) . "</p>");
print "<p>La división de $a entre $b es " . ($a / $b) . "</p>";
print "<p>El resultado de $a mayor que $b es " . var_export($a > $b) . "</p>";
print "<p>El resultado de $a menor o igual que $b es " . var_export($a <= $b) . "</p>";


?>

