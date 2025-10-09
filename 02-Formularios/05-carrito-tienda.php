<?php

//Catalogo de productos y carrito de la compra
//Se podrán adquirir tantas unidades de cada producto como se desee (tambien se puede eliminar un producto añadido o una unidad)

//Al enviar te lleva a una pagina donde se muestra el valor total de la compra y un enlace para volver a la página anterior

include "./05-datos.php";


    if (isset($_POST['comprar'])){
        require "./05-Tienda_view_02.php";
    } elseif (isset($_POST['volver'])) {
        require "./05-Tienda_view.php";
    } else {
        require "./05-Tienda_view.php";
    }

    function calcularPrecio($productos){
        // Calcular el total de la compra a partir de los inputs del formulario
        $total = 0.0;
        foreach ($productos as $producto) {
            $inputName = "producto" . $producto['id']; // nombre del input del formulario

            if (isset($_POST[$inputName]) && (int)$_POST[$inputName] > 0) {
                $cantidad = (int) $_POST[$inputName];
                $precio = (float) $producto['precio'];
                $total += $precio * $cantidad;
            }
        }

        // Devolver el total formateado con 2 decimales (la vista añade el símbolo €)
        return number_format($total, 2);
    }

?>