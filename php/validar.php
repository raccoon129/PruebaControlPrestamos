<?php
$usuario=$_POST['username'];
$contrasena=$_POST['password'];

session_start();
$_SESSION['username']=$usuario;

include('db.php');

//$consulta = "SELECT * FROM usuario WHERE usuario ='$usuario' AND password = '$contrasena'";

$consulta = "SELECT usuario, rol FROM usuario WHERE usuario ='$usuario' AND password = '$contrasena'";

$resultado = mysqli_query($conexion,$consulta);

//$filas = mysqli_num_rows($resultado);
/*
//if($filas){
    //si es correcto
  //  header("location:/dashboard.php");
//}else{
   // ?>
   // <?php include("index.php");
   // ?>
   // <h1 class="bad">Error al autenticar. Rectifica los datos</h1>
   //<?php
// }
*/

$filas = mysqli_fetch_assoc($resultado);

if($filas){
    // Guardar el rol en la sesión
    $_SESSION['rol'] = $filas['rol'];

    // Redirigir según el rol
    if($filas['rol'] == 'Administrador'){
        header("Location: tablero/dashboardAdministrador.php");
    } elseif($filas['rol'] == 'Prestamista'){
        header("Location: dashboard_prestamista.php");
    }
} else {
    // Manejo de error de autenticación
    include("index.php");
    echo "<h1 class='bad'>Error al autenticar. Rectifica los datos</h1>";
}

mysqli_free_result($resultado);
mysqli_close($conexion);