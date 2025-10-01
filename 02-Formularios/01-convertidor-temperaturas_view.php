<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php if (isset($_GET["temperatura"])):?>
            <?=
            "<b>
                Resultado de la conversión ({$temperatura} {$unidad}): " .calcularGrados($unidad,$temperatura)."
            </b>"
            ?>
        <?php endif ?>
    </div>
    <form action="./01-ConvertidorGrados.php" method="get">
        <p>Introduce la temperatura: <input type="text" name="temperatura"></p>
        <p>
            Indica la unidad de la temperatura introducida:
            <select name="unidad">
                <option value="celsius">Celsius</option>
                <option value="farenheit">Farenheit</option>
            </select>
        </p>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>