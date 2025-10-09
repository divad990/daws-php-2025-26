<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cesta de ejemplo</title>
</head>
<body>
    <h1>Producto de ejemplo</h1>
    <ul>
        <li>ID: <?= htmlspecialchars($producto['ID']) ?></li>
        <li>Nombre: <?= htmlspecialchars($producto['Nombre']) ?></li>
        <li>Descripción: <?= htmlspecialchars($producto['Descripcion']) ?></li>
        <li>Precio: <?= htmlspecialchars($producto['Precio']) ?> €</li>
    </ul>
</body>
</html>
