<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="./05.php" method="post">
        <p>Usuario: <input type="text" name="user" id="user">
            <?php if ($estado == 1 || $estado == 2): ?>
                <a style="color:red">Tienes que introducir un usuario</a>
            <?php endif ?>
        </p>
        <p>Contraseña: <input type="password" name="passwd" id="pass">
            <?php if ($estado == 1 || $estado == 3): ?>
                <a style="color:red">Tienes que introducir una contraseña</a>
            <?php endif ?>
        </p>
        <p><button type="submit">Enviar</button></p>
    </form>
</body>
</html>