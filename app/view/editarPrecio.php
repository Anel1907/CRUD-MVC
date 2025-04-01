<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>
<body>
    <header>
        <h1>Editar informacion del equipo</h1>
    </header>

        <form action="index.php?action=actualizarPrecio&id=<?php echo $id; ?>" method="post">
            
            <label for="marca">Marca:</label>
            <input type="text" id="marca" name="marca" required><br><br>

            <label for="modelo">Modelo:</label>
            <input type="text" id="modelo" name="modelo" required><br><br>

            <label for="color">Color:</label>
            <input type="text" id="color" name="color" required><br><br>
            
            <label for="precio">Precio:</label>
            <input type="number" id="precio" name="precio" step="0.01" value="<?php echo $row->precio; ?>" required><br><br>

            <label for="plan">Plan:</label>
            <input type="text" id="plan" name="plan" required><br><br>

            <button type="submit">Actualizar</button>
        </form>
   
</body>
</html>