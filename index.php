    <?php 
    require __DIR__ . '/config.php';
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>chiatec</title>
        <link rel="icon" href="images/chia.png" type="image/x-icon">
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

            <div class="icon" onclick="buscarPorCategoria('pagina web')">
                <img src="images/iconoBusqueda/sitio-web.png" alt="sitio web" class="search-icon">
                <p>Sitio web</p>
            </div>
            <div class="icon" onclick="buscarPorCategoria('app-movil')">     
                <img src="images/iconoBusqueda/app-movil.png" alt="app movil" class="search-icon">
                <p>app movil</p>
            </div>
            <div class="icon" onclick="buscarPorCategoria('soporte')">
                <img id="soporte" src="images/iconoBusqueda/soporte.png" alt="soporte" class="search-icon">
                <p>soporte</p>
            </div>
            <!-- <div class="icon" onclick="buscarPorCategoria('turbina')">  
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
            </div> -->
        </div>


    


    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Catálogo de Servicios Chiatec</title>
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
                                <th>Tipo</th>
                                <th>Descripción</th>
                                <th>Precio</th>
                                <th>Duración</th>
                                <th>Caracteristicas</th>
                                <th>Nuestros trabajos</th>
                                <th>Popular</th>
                                <th>Tags</th>
                                <th>Compartir</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        <?php while($servicios = $resultado->fetch_assoc()): ?>
                            <tr>
                                <td><?= htmlspecialchars($servicios['id']) ?></td>
                                <td><?= htmlspecialchars($servicios['nombre']) ?></td>
                                <td><?= htmlspecialchars($servicios['tipo']) ?></td>
                                <td><?= htmlspecialchars($servicios['descripcion']) ?></td>
                                <td><?= htmlspecialchars($servicios['precio']) ?></td>
                                <td><?= htmlspecialchars($servicios['duracion']) ?></td>      
                                <td><?= htmlspecialchars($servicios['caracteristicas']) ?></td> 
                                <td>
                                    <?php 
                                    if (!empty($servicios['nuestros trabajos'])) {
                                        // Separar las URLs por "|" (o el delimitador que uses)
                                        $urls = explode('|', $servicios['nuestros trabajos']);
                                        
                                        foreach ($urls as $i => $url) {
                                            $url = trim($url);
                                            if (!empty($url)) {
                                                // Determinar si es video (MP4/WebM) o enlace web
                                                $is_video = preg_match('/\.(mp4|webm)$/i', $url);
                                                $texto = $is_video ? '🎬 Ver video ' . ($i + 1) : '🌐 Ver proyecto ' . ($i + 1);
                                                
                                                // Abrir en nueva pestaña directamente
                                                echo '<a href="' . htmlspecialchars($url) . '" target="_blank" class="enlace-simple">';
                                                echo $texto;
                                                echo '</a><br>';
                                            }
                                        }
                                    }
                                    ?>
                                </td>
                                <td><?= htmlspecialchars($servicios['popular']) ?></td>
                                <td><?= htmlspecialchars($servicios['tags']) ?></td>
                                <td>
                                    <?php
                                        $nombre = addslashes(htmlspecialchars($servicios['nombre'], ENT_QUOTES));
                                        $descripcion = addslashes(htmlspecialchars($servicios['descripcion'], ENT_QUOTES));
                                        $precio = addslashes(htmlspecialchars($servicios['precio'], ENT_QUOTES));
                                        $caracteristcas = addslashes(htmlspecialchars($servicios['caracteristicas'], ENT_QUOTES));
                                        $nuestrostrabajos = addslashes(htmlspecialchars($servicios['nuestros trabajos'], ENT_QUOTES));
                                    ?>
                                    <button class="btn-whatsapp" onclick="compartirProducto(
                                            '<?= $nombre ?>',
                                            '<?= $descripcion ?>',
                                            <?= $precio ?>,
                                            '<?= $caracteristcas ?>',
                                            '<?= $nuestrostrabajos ?>'
                                        )">
                                            <i class="fab fa-whatsapp"></i>
                                    </button>
                                </td>
                                </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </?div>
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