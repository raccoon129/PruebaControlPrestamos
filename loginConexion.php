<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "controlprestamos";
// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir datos del formulario y limpiarlos
$user = mysqli_real_escape_string($conn, $_POST['username']);
$pass = mysqli_real_escape_string($conn, $_POST['password']);

// Consultar en la base de datos usando declaraciones preparadas
$sql = $conn->prepare("SELECT * FROM usuarios WHERE user=?");
$sql->bind_param("s", $user);
$sql->execute();
$result = $sql->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($pass, $row['password'])) {
        // Iniciar sesión y redirigir
        echo ("Sesion iniciada");
        session_start();
        $_SESSION['usuario'] = $user;
        header("Location: dashboard.html"); // Redirige a la página principal de la plataforma
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Usuario no encontrado";
}

$conn->close();
?>
