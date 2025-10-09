<?php 

$estudiantes = array('Ane','Markel','Nora','Danel','Amaia','Izaro');
    
function pintar ($estudiantes) {
        echo "<ul>";
        $x = 0;
        foreach ($estudiantes as $value) {
            echo "<li id=".$x.">".$value."</li>";
            $x++;
        }
        echo "</ul>";
    }
    
require "28-foreach2_view.php"

?>