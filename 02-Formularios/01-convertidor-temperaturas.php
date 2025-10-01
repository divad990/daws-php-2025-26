<?php

    $temperatura = $_GET['temperatura'];
    $unidad = $_GET['unidad'];

    function calcularGrados ($unidad,$temperatura){
        if ($unidad == "celsius"){
        return ($temperatura*9/5) + 32;
        } else {
            return ($temperatura-32) * 5/9; 
        }
    }
    require "./01-ConvertirGrados_view.php";

?>