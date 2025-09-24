<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>03</title>
</head>
<body>
    <?php if (empty($_COOKIE['idioma'])): ?>
        <p>No tiene ningún valor</p>
    <?php else: ?>
        <?= $_COOKIE['idioma']; ?>
    <?php endif ?>
    
    <form action="./03.php" method="get">
    <p>Elige tu idioma <select name="idioma" id="idioma"><option value="euskera">Euskera</option><option value="espanol">Español</option></select><button type="submit">Guardar</button></p>
    </form>
</body>
</html>