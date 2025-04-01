<?php
// conexion.php
$host = 'localhost'; // Servidor de la base de datos (usualmente 'localhost' en XAMPP)
$dbname = 'celulares'; // Nombre de la base de datos
$user = 'root'; // Usuario de la base de datos (por defecto 'root' en XAMPP)
$password = ''; // Contraseña de la base de datos (por defecto vacía en XAMPP)

try {
    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>