<?php

$grupos = array('The Beatles','Queen','Lez Zeppelin','Pink Floyd','Radiohead','Red Hot Chilli Peppers','Coldplay','Arctic Monkeys');
function pintar ($grupos) {
    foreach ($grupos as $value) {
        echo "El grupo es: {$value} <br>";
    }
}
require "27-musica_view.php";

?>