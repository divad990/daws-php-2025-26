<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <main <?php if ($recibido == true){echo "hidden";}?>>
        <h1>Deja tus dudas o comentarios a continuación: </h1>
        <form action="./03-Contacto.php" method="post">
            <p>Asunto: <input type="text" name="asunto"></p>
            <p>Email: <input type="email" name="email"></p>
            <p>Motivo: 
                <select name="motivo">
                    <option value="soporte">Soporte técnico</option>
                    <option value="info">Información de productos</option>
                    <option value="queja">Queja</option>
                    <option value="otro">Otro</option>
                </select>
            </p>
            <p>Mensaje: <textarea name="mensaje"></textarea></p>
            <button type="submit">Enviar</button>
        </form>
    </main>
    <main <?php if ($recibido == false){echo "hidden";}?>>
        <h1>Hemos recibido tu solicitud</h1>
        <p>Asunto: <?= $asunto ?></p>
        <p>Email: <?= $email ?></p>
        <p>Motivo: <?= $motivo ?></p>
        <p>Mensaje: <?= $mensaje ?></p>
    </main>
</body>
</html>