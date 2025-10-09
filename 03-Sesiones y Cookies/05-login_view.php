<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <main <?php if ($loginS == 1){echo "hidden";} ?>>
        <form action="./05-loginSimple.php" method="post">
            <p>Usuario: <input type="text" name="user" id="user">
                <?php if ($estado == 1 || $estado == 2): ?>
                    <a style="color:red">Tienes que introducir un usuario</a>
                <?php endif ?>
                <?php if ($loginS == 3): ?>
                    <a style="color:red">Usuario incorrecto</a>
                <?php endif ?>
            </p>
            <p>Contraseña: <input type="password" name="passwd" id="pass">
                <?php if ($estado == 1 || $estado == 3): ?>
                    <a style="color:red">Tienes que introducir una contraseña</a>
                <?php endif ?>
                <?php if ($loginS == 2): ?>
                    <a style="color:red">Contraseña incorrecta</a>
                <?php endif ?>
            </p>
            <p><button type="submit">Enviar</button></p>
        </form>
    </main>
    <main <?php if ($loginS != 1){echo "hidden";} ?> >
            <h1>Has iniciado sesión correctamente</h1>
            <form action="./05-loginSimple.php" method="post">
               <button type="submit" name="eliminar">Eliminar datos</button>
            </form>
    </main>
</body>
</html>
