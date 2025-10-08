<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito</title>
</head>
<body>
    <h1>Carrito de la compra</h1>
    <!-- Mostrar precio total de la cesta -->
    <p>El precio de la suma de todos los productos es de: <?= calcularPrecio($productos); ?>€</p>
    <!-- Mostrar lista dinamica de objetos de la cesta -->
    <?php foreach ($productos as $id => $producto): ?>
        
        <?php 
        $inputName = "producto" . $producto['id']; // nombre del input del formulario
        if (isset($_POST[$inputName]) && $_POST[$inputName] > 0): 
        ?>

            <li><?= $producto['nombre'] ?> (<?=$_POST[$inputName]?>)</li>

        <?php endif; ?>
    <?php endforeach; ?>
    <main>
        <form action="./05-Tienda.php" method="POST">
            <button type="submit" name="volver">Volver a la tienda</button>
        </form>
    </main>
</body>
</html>