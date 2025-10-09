<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach ($estudiantes as $nombre => $nota){
            echo "<li> La nota media de {$nombre} es {$nota}";
        }
        ?>
    </ul>
</body>
</html>