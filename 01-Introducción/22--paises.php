<?php
    
    $input = $_GET['pais'];
    $paises = array('Brasil','Portugal','Islandia','Mexico','Filipinas','Marruecos');

    echo "Posicion del pais: ".encontrarPosicion($paises,$input);

    function encontrarPosicion($paises,$input){
        for ($x = 0; $x < count($paises); $x++){
            if ($input == $paises[$x]){
                return $x;
            };
        };
        return -1;
    };
?>