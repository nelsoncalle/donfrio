<?php 
require 'config.php'; // Incluye el archivo de conexión
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DONFRIO</title>
    <link rel="icon" href="images/DF.png" type="image/x-icon">
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body>
    
    
    <header class="header">
        <div class="logo">
            <a href="#">
                <img src="images/donfrio.png" alt="Logo de la Tienda">
            </a>
        </div>
        <div class="search-bar">
            <input type="text" id="search" placeholder="Buscar productos o marcas...">
            <button class="search-btn-desktop" type="submit" onclick="buscarProducto()">Buscar</button>
            <button class="search-btn" onclick="buscarProducto()">
                <i class="fas fa-search"></i> 
            </button>
        </div>     
    </header> 

  
    
    <div class="icon-container">
        <div class="icon">
            <img src="images/iconoBusqueda/compresor.png" alt="compresor" class="search-icon">
            <p>compresor</p>
        </div>
        <div class="icon">     
            <img src="images/iconoBusqueda/motor-electrico.png" alt="motor" class="search-icon">
            <p>motor</p>
        </div>
        <div class="icon">
            <img src="images/iconoBusqueda/helice.png" alt="hélice" class="search-icon">
            <p>hélice</p>
        </div>
        <div class="icon">     
            <img id="turbina" src="images/iconoBusqueda/turbinas.png" alt="turbina" class="search-icon">
            <p>turbina</p>
        </div>
        <div class="icon">
            <img src="images/iconoBusqueda/extractor.png" alt="extractor" class="search-icon">
            <p>extractor</p>
        </div>
        <div class="icon">     
            <img src="images/iconoBusqueda/control-remoto.png" alt="control-remoto" class="search-icon">
            <p>control remoto</p>
        </div>
        <div class="icon">     
            <img id="turbina" src="images/iconoBusqueda/blower.png" alt="blower" class="search-icon">
            <p>blower</p>
        </div>
        <div class="icon">
            <img src="images/iconoBusqueda/reductor.png" alt="reductor" class="search-icon">
            <p>reductor</p>
        </div>
        <div class="icon">
            <img src="images/iconoBusqueda/tarjeta.png" alt="tarjeta" class="search-icon">
            <p>tarjeta</p>
        </div>
        <div class="icon">     
            <img src="images/iconoBusqueda/serpentin.png" alt="serpentin" class="search-icon">
            <p>serpentin</p>
        </div>
    </div>


    $sql = "SELECT * FROM productos ORDER BY FechaCreacion DESC";
$resultado = $conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Productos Donfrio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #2c3e50;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            position: sticky;
            top: 0;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .img-thumbnail {
            max-width: 100px;
            max-height: 100px;
        }
    </style>
</head>
<body>
    <h1>Catálogo de Productos</h1>
    
    <?php if ($resultado->num_rows > 0): ?>
        <div style="overflow-x:auto;">
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
                        <td><?= htmlspecialchars($producto['ID']) ?></td>
                        <td><?= htmlspecialchars($producto['Nombre']) ?></td>
                        <td><?= htmlspecialchars($producto['Descripcion']) ?></td>
                        <td>$<?= number_format($producto['Precio'], 2) ?></td>
                        <td><?= $producto['Stock'] ?></td>
                        <td><?= htmlspecialchars($producto['Categoria']) ?></td>
                        <td>
                            <?php if (!empty($producto['Imagen1'])): ?>
                                <img src="<?= htmlspecialchars($producto['Imagen1']) ?>" alt="Imagen 1" class="img-thumbnail">
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if (!empty($producto['Imagen2'])): ?>
                                <img src="<?= htmlspecialchars($producto['Imagen2']) ?>" alt="Imagen 2" class="img-thumbnail">
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if (!empty($producto['Video'])): ?>
                                <a href="<?= htmlspecialchars($producto['Video']) ?>" target="_blank">Ver video</a>
                            <?php endif; ?>
                        </td>
                        <td><?= htmlspecialchars($producto['Marca']) ?></td>
                        <td><?= htmlspecialchars($producto['MarcaAC']) ?></td>
                        <td><?= $producto['FechaCreacion'] ?></td>
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p>No se encontraron productos en la base de datos.</p>
    <?php endif; ?>
    
    <?php
    // Cerrar conexión
    $conexion->close();
    ?>
    

</body>
</html>