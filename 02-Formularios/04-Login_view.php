<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Inicia sesión</h1>
    <form action="./04-Login.php" method="post">

        <p <?php if($recibidoUser){echo "hidden";}?> style="color:red">El campo usuario es obligatorio</p>
        

        <p>Usuario: <input type="text" name="user"></p>

        <p <?php if($recibidoPasswd){echo "hidden";}?> style="color:red">El campo contraseña es obligatorio</p>

        <p>Contraseña: <input type="password" name="passwd"></p>

        <button type="submit">Enviar</button>
        <?php
            if($recibidoUser==true && $recibidoPasswd==true){
                if (comprobarDatos($user,$passwd,$usuarios)=='user'){
                    echo "Usuario no encontrado";
                } else if (comprobarDatos($user,$passwd,$usuarios)=='passwd'){
                    echo "La contraseña es incorrecta";
                } else if (comprobarDatos($user,$passwd,$usuarios)=='true'){
                    echo "Correcto";
                    require "./04-Login_view_2.php";
                }
            }
        ?>
    </form>
</body>
</html>