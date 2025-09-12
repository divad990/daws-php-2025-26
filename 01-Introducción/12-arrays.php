<?php

    $ciudades = ['Paris','Berlin','Amsterdam','Praga'];

    $posicion = $_GET['pos'];
    $new = $_GET['new'];

    include '12-arrays_view.php';

    function getValor($array, $posicion){
        return $array[$posicion];
    }
    function setValor($array, $posicion, $valor){
        $array[$posicion] = $valor;
        return var_export($array);
    }

?>