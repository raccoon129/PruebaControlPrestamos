<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Administrador</title>
    <link rel="stylesheet" href="styleDashAdmin.css">

        <!-- Inclusión de Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
<div class="encabezado">
        <div class="contenedor-logo">
            <img src="logo.png" alt="Logo" class="logo">
        </div>
        <span class="user-name">Nombre de Usuario</span>
        <button class="boton-modo-oscuro" onclick="toggleDarkMode()">Modo Oscuro</button>
    </div>
    <div class="barra-lateral">
        <nav class="menu">
            <ul>
                <li><a href="#inicio"><i class="fas fa-house"></i> Inicio</a></li>

                <li><a href="#gestionBienes" onclick="cargarModulo('gestionBienes.html');"><i class="fas fa-cogs"></i> Gestión de Bienes</a></li>
                <li><a href="#historialPrestamos" onclick="cargarModulo('historialPrestamos.html');"><i class="fas fa-history"></i> Historial de Préstamos</a></li>
                <li><a href="#reportes" onclick="cargarModulo('reportes.html');"><i class="fas fa-chart-line"></i> Reportes</a></li>
                
            </ul>
        </nav>
    </div>
    <div class="contenido-principal" id="contenidoPrincipal">
    <?php
    if (isset($_GET['modulo'])) {
        $modulo = $_GET['modulo'];
        $allowed_modulos = ['gestionBienes', 'historialPrestamos', 'reportes']; // asegúrate de listar todos los módulos permitidos aquí para evitar la inclusión de archivos no deseados
        if (in_array($modulo, $allowed_modulos)) {
            include("$modulo.html"); // Asegúrate de que los archivos HTML estén en un lugar seguro y no accesible directamente desde el exterior
        } else {
            echo "<p>El módulo solicitado no está permitido.</p>";
        }
    }
    ?>
</div>

    <div class="pie-pagina">
        Pie de página
    </div>
    <script src="/php/tablero/scriptDashAdmin.js"></script>
</body>
</html>

