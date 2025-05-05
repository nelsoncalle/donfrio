<?php
// Datos de conexión (cámbialos por los tuyos)
$servidor = "localhost";  // Normalmente es localhost
$usuario = "root";       // Usuario de MySQL (comúnmente root)
$password = "";          // Contraseña (vacía en XAMPP por defecto)
$bd = "donfrio";         // Nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $password, $bd);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta simple para obtener productos
$consulta = "SELECT * FROM productos LIMIT 5"; // Muestra solo 5 productos
$resultado = $conexion->query($consulta);
?>