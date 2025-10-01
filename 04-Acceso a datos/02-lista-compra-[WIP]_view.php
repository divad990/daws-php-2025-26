<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de la Compra</title>
</head>
<body>
    <h1><strong>Lista de la compra</strong></h1>
    
    <!-- Aquí se mostrará la lista de productos dinámicamente -->
    <div id="lista-productos">
        <!-- Los productos aparecerán aquí -->
    </div>
    
    <hr>
    
    <!-- Formulario para añadir elementos -->
    <p><strong>Añadir elemento</strong></p>
    <form method="POST" action="02-lista-compra-[WIP].php">
        <input type="text" name="producto" placeholder="Nombre del producto" required>
        <button type="submit" name="anadir">Añadir</button>
    </form>
    
    <p><a href="?accion=vaciar">Vaciar lista</a></p>
    
</body>
</html>