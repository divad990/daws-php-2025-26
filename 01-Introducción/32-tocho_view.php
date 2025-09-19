<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <th>Nombre</th>
        <th>Nota 1</th>
        <th>Nota 2</th>
        <th>Nota media</th>
        <?php foreach ($estudiantes as $nombre => $notas): ?>
        <tr>
            <td><?=$nombre?></td>
            <td <?= calcularStyle($notas[0]);?>><?=$notas[0]?></td>
            <td <?= calcularStyle($notas[1]);?>><?=$notas[1]?></td>
            <td <?= calcularStyle(calcularNotaMedia($notas[0],$notas[1]));?>><?= calcularNotaMedia($notas[0],$notas[1]);?></td>
        </tr>
        <?php endforeach;?>
    </table>
</body>
</html>