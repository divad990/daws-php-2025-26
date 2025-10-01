<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>
            <?php 
            echo "El valor generado es: ";
            foreach ($numeros as $valor) {
                echo $valor . ",";
            }
            ?>
        </li>
        <li>
            <?php echo "El valor mas bajo del array es: " . minimo($numeros)?>
        </li>
        <li>
            <?php echo "El valor mas alto del array es: " . maximo($numeros)?>
        </li>
        
    </ul>
</body>
</html>