<?php
require 'config.php';

// Procesar búsqueda
if(isset($_GET['busqueda'])) {
    $busqueda = $conexion->real_escape_string($_GET['busqueda']);
    $consulta = "SELECT * FROM servicios WHERE 
                nombre LIKE '%$busqueda%' OR 
                tipo LIKE '%$busqueda%' OR 
                descripcion LIKE '%$busqueda%' OR
                caracteristicas LIKE '%$busqueda%'";
    $resultado = $conexion->query($consulta);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chiatec - Resultados</title>
    <link rel="icon" href="images/chia.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

</head>
<body>
    <!-- Header idéntico al de tu página principal -->
    <header class="header">
        <div class="logo">
            <a href="#">
                <img src="images/donfrio.png" alt="Logo">
            </a>
        </div>
        <div class="search-bar">
            <form id="searchForm" method="GET" action="">
                <input type="text" id="search" name="busqueda" placeholder="Buscar..." value="<?= isset($_GET['busqueda']) ? htmlspecialchars($_GET['busqueda']) : '' ?>">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </header>

    <!-- Resultados -->
    <?php if (isset($resultado) && $resultado->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Duración</th>
                    <th>Caracteristicas</th>
                    <th>Imagen</th>
                    <th>Popular</th>
                    <th>Tags</th>
                    <th>Disponible</th>
                </tr>
            </thead>
            <tbody>
            
                <?php while($servicios = $resultado->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($servicios['id']) ?></td>
                        <td><?= htmlspecialchars($servicios['nombre']) ?></td>
                        <td><?= htmlspecialchars($servicios['tipo']) ?></td>
                        <td><?= htmlspecialchars($servicios['descripcion']) ?></td>
                        <td>$<?= number_format($servicios['precio'],2) ?></td>
                        <td><?= htmlspecialchars($servicios['duracion']) ?></td>
                        <td>
                            <?php if (!empty($servicios['imagen'])): ?>
                                <a href="<?= htmlspecialchars($servicios['imagen']) ?>" target="_blank">Ver imagen</a>
                            <?php endif; ?>
                        </td>
                        
                       <td><?= htmlspecialchars($servicios['popular']) ?></td>
                        <td><?= htmlspecialchars($servicios['tags']) ?></td>
                    </tr>
                <?php endwhile; ?>
                
            </tbody>
        </table>
    <?php else: ?>
        <p style="text-align: center; margin: 20px;">No se encontraron resultados para "<?= isset($_GET['busqueda']) ? htmlspecialchars($_GET['busqueda']) : '' ?>"</p>
    <?php endif; ?>

    <script>
        // Función para buscar desde los iconos
        function buscarPorCategoria(categoria) {
            document.getElementById('search').value = categoria;
            document.getElementById('searchForm').submit();
        }
    </script>
</body>
</html>