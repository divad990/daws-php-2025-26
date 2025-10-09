<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista en sesión</title>
</head>
<body>
    <?php if (empty($_SESSION['lista'])): ?>
        <p>No tiene ningún valor</p>
    <?php else: ?>
        <ul>
            <?php foreach ($_SESSION['lista'] as $persona):?>
                    <li><?= htmlspecialchars($persona) ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif ?>
    
    <form action="./04-sesionLista.php" method="get">
    <p>Añadir asistente: <input type="text" name="lista" id="lista"><button type="submit">Guardar</button><button type="submit" name="vaciar">Vaciar Lista</button></p>
    </form>
</body>
</html>
