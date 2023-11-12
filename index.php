<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión - ICPISC</title>
    <link rel="stylesheet" type="text/css" href="css/stylesLogin.css">
    <script src="js/scriptLogin.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>
<body>
    <div class="contenedor">
        <div class="formulario-login">
            <form action="php/validar.php" method="post">
                <h2>Iniciar Sesión</h2>
                <div class="grupo-formulario">
                    <label><i class="fa fa-user"></i> Usuario:</label>
                    <input type="text" name="username" required placeholder="Ingresa un nombre de usuario previamente compartido">
                </div>
                <div class="grupo-formulario">
                    <label><i class="fa fa-lock"></i> Contraseña:</label>
                    <input type="password" name="password" required placeholder="Ingresa una contraseña">
                </div>
                <button type="submit">Ingresar al sistema</button>
            </form>
        </div>
        <div class="informacion-formulario">
            <h2>SCPI - Sistema de control de prestamos V0.01</h2>
            <p>Administra y gestiona bienes, genera vales, y realiza un seguimiento de los artículos de los laboratorios.</p>
            <p>Más texto pendiente.</p>
        </div>
    </div>
</body>
</html>
