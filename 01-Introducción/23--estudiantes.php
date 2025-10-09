<?php

    $estudiantes = array('Ane','Markel','Nora','Danel','Amaia','Izaro');
    echo "<ul>";
    for ($x = 0; $x < count($estudiantes); $x++){
        echo "<li id=".$x.">".$estudiantes[$x]."</li>";
    }
    echo "</ul>";
?>