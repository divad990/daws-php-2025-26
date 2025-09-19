<?php

    $temperatura = $_GET['temperatura'];
    $unidad = $_GET['unidad'];
    $conversion = 0;

    function calcularGrados ($unidad,$temperatura){
        if ($unidad == "celsius"){
        $conversion = ($temperatura*9/5) + 32;
        } else {
            $conversion = ($temperatura-32) * 5/9;
        }
    }
    
    
    require "./01-ConvertirGrados_view.php";

?>