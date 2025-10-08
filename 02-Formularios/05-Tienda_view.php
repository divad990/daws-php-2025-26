<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2; 
    }
    
    button {
        background-color: #3b76ffff;
        color: white;
    }
    </style>
</head>
<body>
    <form action="./05-Tienda.php" method="post">
        <table>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <!-- pintar tabla en php -->
            
                <?php foreach ($productos as $productoN => $productoS): ?>
                <tr>
                    <td><?= $productoS["nombre"]?></td>
                    <td><?= $productoS["descripcion"];?></td>
                    <td><?= $productoS["precio"];?></td>
                    <td>
                        <input type="number" name='producto<?= $productoS["id"] ?>' value='0' required>
                    </td>
                </tr>
                <?php endforeach;?>

        </table>
    <button type="submit" name="comprar">Comprar</button>
    </form>
</body>
</html>