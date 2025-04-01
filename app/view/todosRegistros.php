<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Inventario</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <header>
        <h1>Celulares</h1>
    </header>

    <div class="container">
    <h2>Equipos disponibles</h2>

<?php if (!empty($rowset)): ?>
    <table border="1">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Color</th>
                <th>Precio</th>
                <th>Plan</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($rowset as $row): ?>
                <tr>
                    <td><?php echo $row->Marca; ?></td>
                    <td><?php echo $row->Modelo; ?></td>
                    <td><?php echo $row->Color; ?></td>
                    <td>$<?php echo $row->Precio; ?></td>
                    <td><?php echo $row->plan; ?></td>
                    <td>
                        <a href="index.php?action=editarPrecio&id=<?php echo $row->id; ?>">Editar</a> |
                        <a href="index.php?action=eliminar&id=<?php echo $row->id; ?>">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php else: ?>
    <p>No hay teléfonos disponibles.</p>
<?php endif; ?>

<a href="index.php?action=agregar">Agregar</a>
      
    </div>
</body>
</html>