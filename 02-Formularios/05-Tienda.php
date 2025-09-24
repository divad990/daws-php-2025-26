<?php

//Catalogo de productos y carrito de la compra
//Se podrán adquirir tantas unidades de cada producto como se desee (tambien se puede eliminar un producto añadido o una unidad)

//Al enviar te lleva a una pagina donde se muestra el valor total de la compra y un enlace para volver a la página anterior

$productos = array(
        "p1" => array (
            "nombre" => 'Logitech K120',
            "descripcion" => 'Teclado multimedia USB plug&play, trackPoint Caps (10pk, Soft Dome)',
            "precio" => 25.99,
            "id" => 1
        ),
        "p2" => array (
            "nombre" => 'Lenovo LI5',
            "descripcion" => 'El mouse Lenovo 300 compacto inalámbrico es el accesorio perfecto para cualquier persona que desee un mayor control y libertad',
            "precio" => 12.99,
            "cantidad" => 100,
            "id" => 2
        ),
        "p3" => array (
            "nombre" => 'Monitor LG X10',
            "descripcion" => 'LCD con retroiluminación LED ThinkVision T1714p Square de 17 pulgadas',
            "precio" => 179.99,
            "cantidad" => 100,
            "id" => 3
        ),
        "p4" => array (
            "nombre" => 'Monitor Lenovo Q24i',
            "descripcion" => 'Pantalla de 60,45 cm (23,8") Funciones como AMD FreeSync',
            "precio" => 172,
            "cantidad" => 100,
            "id" => 4
        ),
        "p5" => array (
            "nombre" => 'ThinkPad X1 Extreme',
            "descripcion" => 'ThinkPad X1 Extreme de 2.ª generación gestiona exigentes tareas informáticas sin problemas. Con pantalla tácticl 4K OLED',
            "precio" => 1200,
            "cantidad" => 100,
            "id" => 5
        ),
    );

    require "./05-Tienda_view.php";



?>