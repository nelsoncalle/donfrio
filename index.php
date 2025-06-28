    <?php 
    require __DIR__ . '/config.php';
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>DONFRIO</title>
        <link rel="icon" href="images/DF.png" type="image/x-icon">
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" href="styles-compartir.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    </head>
    
        
        
        <header class="header">
            <div class="logo">
                <a href="index.php">
                    <img src="images/chiatec.png" alt="Logo de la Tienda">
                </a>
            </div>
            
            <div class="search-bar">
                <form id="searchForm" method="GET" action="">
                    <input type="text" id="search" name="busqueda" placeholder="Buscar productos o marcas..." autocomplete="off">
                    <button class="search-btn-desktop" type="submit">Buscar</button>
                    <button class="search-btn" type="submit">
                        <i class="fas fa-search"></i> 
                    </button>
                </form>
            </div>
            
        </header> 

    
        
        <div class="icon-container">

            <div class="icon" onclick="buscarPorCategoria('compresor')">
                <img src="images/iconoBusqueda/compresor.png" alt="compresor" class="search-icon">
                <p>pagina web</p>
            </div>
            <div class="icon" onclick="buscarPorCategoria('motor')">     
                <img src="images/iconoBusqueda/motor-electrico.png" alt="motor" class="search-icon">
                <p>web app</p>
            </div>
            <div class="icon" onclick="buscarPorCategoria('helice')">
                <img src="images/iconoBusqueda/helice.png" alt="helice" class="search-icon">
                <p>rediseño web </p>
            </div>
            <div class="icon" onclick="buscarPorCategoria('turbina')">  
                <img id="turbina" src="images/iconoBusqueda/turbinas.png" alt="turbina" class="search-icon">   
                <p>SEO y velocidad </p>
            </div>
            <div class="icon" onclick="buscarPorCategoria('extractor')">
                <img src="images/iconoBusqueda/extractor.png" alt="extractor" class="search-icon">
                <p>migración</p>
            </div>
            <div class="icon" onclick="buscarPorCategoria('control')">  
                <img src="images/iconoBusqueda/control-remoto.png" alt="control-remoto" class="search-icon">
                <p>integración de APIs</p>
            </div>
            <div class="icon" onclick="buscarPorCategoria('blower')">
                <img id="blower" src="images/iconoBusqueda/blower.png" alt="blower" class="search-icon">
                <p>software a medida</p>
            </div>
            <div class="icon" onclick="buscarPorCategoria('reductor')">  
                <img src="images/iconoBusqueda/reductor.png" alt="reductor" class="search-icon">
                <p>App móviles</p>    
            </div>
            <div class="icon" onclick="buscarPorCategoria('tarjeta')">
                <img src="images/iconoBusqueda/tarjeta.png" alt="tarjeta" class="search-icon">
                <p>App web</p>
            </div>
            <div class="icon" onclick="buscarPorCategoria('serpentin')">  
                <img src="images/iconoBusqueda/serpentin.png" alt="serpentin" class="search-icon">
                <p>chatbots</p>
            </div>
        </div>


    


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
        <!-- <h1>Catálogo de Productos</h1> -->
        
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
                            <th>Compartir</th>
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
                            <td><?= htmlspecialchars($producto['MarcaAC']) ?></td>
                            <td><?= $producto['FechaCreacion'] ?></td>
                            <td>
                                    <?php
                                // Pre-procesa los datos primero
                                $nombre = addslashes(htmlspecialchars($producto['Nombre'], ENT_QUOTES));
                                $descripcion = addslashes(htmlspecialchars($producto['Descripcion'], ENT_QUOTES));
                                $precio = number_format($producto['Precio'], 2, '.', '');
                                $imagen1 = !empty($producto['Imagen1']) ? addslashes(htmlspecialchars($producto['Imagen1'], ENT_QUOTES)) : '';
                                $imagen2 = !empty($producto['Imagen2']) ? addslashes(htmlspecialchars($producto['Imagen2'], ENT_QUOTES)) : '';
                                $video = !empty($producto['Video']) ? addslashes(htmlspecialchars($producto['Video'], ENT_QUOTES)) : '';
                                $id = $producto['ID'];
                                ?>

                                <button class="btn-whatsapp" onclick="compartirProducto(
                                    '<?= $nombre ?>',
                                    '<?= $descripcion ?>',
                                    <?= $precio ?>,
                                    '<?= $imagen1 ?>',
                                    '<?= $imagen2 ?>',
                                    '<?= $video ?>',
                                    <?= $id ?>
                                )">
                                    <i class="fab fa-whatsapp"></i>
                                </button>
                            </td>
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

    <script src="script.js"></script>
    <script src="compartir.js"></script>
    <script>
    // Función para buscar al hacer clic en los iconos
    function buscarPorCategoria(categoria) {
        document.getElementById('search').value = categoria;
        document.getElementById('searchForm').submit();
    }

    // Asigna eventos a los iconos
    document.querySelectorAll('.icon').forEach(icon => {
        icon.addEventListener('click', function() {
            const categoria = this.querySelector('p').textContent;
            buscarPorCategoria(categoria);
        });
    });
    </script>
 
    </body>
    </html>