<?php
require 'config.php';

// Procesar búsqueda
if(isset($_GET['busqueda'])) {
    $busqueda = $conexion->real_escape_string($_GET['busqueda']);
    $consulta = "SELECT * FROM productos WHERE 
                Nombre LIKE '%$busqueda%' OR 
                Descripcion LIKE '%$busqueda%' OR 
                Categoria LIKE '%$busqueda%' OR
                Marca LIKE '%$busqueda%'";
    $resultado = $conexion->query($consulta);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DONFRIO - Resultados</title>
    <link rel="icon" href="images/DF.png" type="image/x-icon">
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
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Categoría</th>
                    <th>Imagen 1</th>
                    <th>Imagen 2</th>
                    <th>Video</th>
                    <th>Marca</th>
                    <th>Marca AC</th>
                    <th>Fecha Creación</th>
                </tr>
            </thead>
            <tbody>
            
                <?php while($producto = $resultado->fetch_assoc()): ?>
                    <tr>
                        <td><?= $producto['ID'] ?></td>
                        <td><?= htmlspecialchars($producto['Nombre']) ?></td>
                        <td><?= htmlspecialchars($producto['Descripcion']) ?></td>
                        <td>$<?= number_format($producto['Precio'], 2) ?></td>
                        <td><?= number_format($producto['Stock']) ?></td>
                        <td><?= htmlspecialchars($producto['Categoria']) ?></td>
                        <td>
                            <?php if (!empty($producto['Imagen1'])): ?>
                                <a href="<?= htmlspecialchars($producto['Imagen1']) ?>" target="_blank">Ver imagen</a>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if (!empty($producto['Imagen2'])): ?>
                                <a href="<?= htmlspecialchars($producto['Imagen2']) ?>" target="_blank">Ver imagen</a>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if (!empty($producto['Video'])): ?>
                                <a href="<?= htmlspecialchars($producto['Video']) ?>" target="_blank">Ver video</a>
                            <?php endif; ?>
                        </td>
                        <td><?= htmlspecialchars($producto['Marca']) ?></td>
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