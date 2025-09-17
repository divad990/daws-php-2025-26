<?php

    $estudiantes = array('Ane','Markel','Nora','Danel','Amaia','Izaro');
    echo "<ul>";
    $x = 0;
    while ($x < count($estudiantes)){
        echo "<li id=".$x.">".$estudiantes[$x]."</li>";
        $x++;
    }
    echo "</ul>";

?>