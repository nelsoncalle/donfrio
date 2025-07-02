<?php
// Datos de conexión (cámbialos por los tuyos)
$servidor = "localhost";  // Normalmente es localhost
$usuario = "root";       // Usuario de MySQL (comúnmente root)
$password = "";          // Contraseña (vacía en XAMPP por defecto)
$bd = "chiatec";         // Nombre de tu base de datos

// Crear conexión
$conexion = new mysqli($servidor, $usuario, $password, $bd);

// Verificar conexión
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta modificada para permitir búsqueda
// Cambia la consulta para que coincida con tu estructura de tabla
if(isset($_GET['busqueda'])) {
    $busqueda = $conexion->real_escape_string($_GET['busqueda']);
    $consulta = "SELECT * FROM servicios WHERE 
                nombre LIKE '%$busqueda%' OR 
                tipo LIKE '%$busqueda%' OR 
                descripcion LIKE '%$busqueda%' OR
                caracteristicas LIKE '%$busqueda%' OR
                tags LIKE '%$busqueda%'";
} else {
    $consulta = "SELECT * FROM servicios LIMIT 100";
}


$resultado = $conexion->query($consulta);
?>