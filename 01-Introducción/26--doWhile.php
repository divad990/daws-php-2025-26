<?php

    $estudiantes = array('Ane','Markel','Nora','Danel','Amaia','Izaro');
    function pintar ($estudiantes) {
        echo "<ul>";
        $x = 0;
        do {
            echo "<li id=".$x.">".$estudiantes[$x]."</li>";
            $x++;
        } while ($x < count($estudiantes));
        echo "</ul>";
    }
    
    require "26-doWhile_view.php"

?>