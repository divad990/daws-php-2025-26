<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie con eliminar</title>
</head>
<body>
    <?php if (empty($_COOKIE['username'])): ?>
        <p>No hay ningún usuario almacenado</p>
    <?php else: ?>
        <?= htmlspecialchars($_COOKIE['username']); ?>
    <?php endif ?>
    
    <form action="./02-guardarYEliminarCookie.php" method="get">
    <p>Introduce el texto que deseas almacenar: <input type="text" name="username" id="username"><button type="submit">Guardar</button><button type="submit" name="eliminar">Eliminar</button></p>
    </form>
</body>
</html>
