<?php
// Conexión a DB (ajusta según tu config.php)
require 'config.php';



// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// // Resto del código...
// // Verificar ID
// if(!isset($_GET['id'])) {
//     die("Error: ID no proporcionado");
// }

$id = intval($_GET['id']);

// Consulta
$query = "SELECT * FROM servicios WHERE ID = ?";
$stmt = $conexion->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$servicios = $stmt->get_result()->fetch_assoc();

if(!$servicios) {
    die("Producto no encontrado");
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($servicios['Nombre']) ?> - chiatec</title>
    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }
        body {
            margin: 0;
            padding: 15px;
            line-height: 1.6;
        }
        .producto-container {
            max-width: 100%;
            margin: 0 auto;
        }
        .producto-imagen {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto 15px;
        }
        .producto-titulo {
            font-size: 1.8rem;
            color: #2c3e50;
            margin-bottom: 10px;
        }
        .producto-precio {
            font-size: 1.5rem;
            color: #e74c3c;
            font-weight: bold;
            margin: 10px 0;
        }
        .producto-descripcion {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #34495e;
        }
        .whatsapp-btn {
            display: inline-block;
            background-color: #25D366;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            border-radius: 5px;
            font-weight: bold;
            text-align: center;
            margin-top: 15px;
            font-size: 1.1rem;
        }
        @media (min-width: 768px) {
            .producto-container {
                max-width: 600px;
            }
        }
    </style>
</head>
<body>
    <div class="producto-container">
            <?php if(!empty($servicios['imagen'])): ?>
             <img src="<?= htmlspecialchars($servicios['imagen']) ?>" alt="<?= htmlspecialchars($servicios['nombre']) ?>" class="producto-imagen">
            <?php endif; ?>

            <h1 class="producto-titulo"><?= htmlspecialchars($servicios['nombre']) ?></h1>

            <div class="producto-precio">
                 $<?= number_format($servicios['precio'], 2) ?>
            </div>
        
       
        <button class="whatsapp-btn" 
            onclick="compartirProducto(
            '<?= htmlspecialchars($servicios['nombre'], ENT_QUOTES) ?>',
            '<?= htmlspecialchars($servicios['descripcion'], ENT_QUOTES) ?>',
            '<?= number_format($servicios['Precio'], 2, '.', '') ?>',
            '<?= htmlspecialchars($servicios['caracteristicas'], ENT_QUOTES) ?>',
            '<?= htmlspecialchars($servicios['nuestros trabajos'], ENT_QUOTES) ?>',
            '<?= $servicios['id'] ?>'
             )">
             <i class="fab fa-whatsapp"></i> Consultar por WhatsApp
        </button>



    </div>
</body>
</html>

