<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <p>
        Último resultado: <?php if (isset($resultado)){echo $resultado;};?>
    </p>
    <form action="./02-Calculadora.php" method="post">
        <p>Primer número: <input type="number" name="num1"></p>
        <p>Segundo número: <input type="number" name="num2"></p>
        <p>Seleccione la operación deseada: 
            <select name="operacion">
                <option value="suma">Suma</option>
                <option value="resta">Resta</option>
                <option value="multiplicacion">Multiplicación</option>
                <option value="division">Division</option>
            </select>
        </p>
        <button type=submit>Enviar</button>
    </form>
</body>
</html>