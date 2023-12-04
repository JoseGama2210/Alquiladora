<?php
include("bd.php"); // Asegúrate de que este archivo contenga la conexión a la base de datos.

if(isset($_POST['iniciar_sesion'])){
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['password'];

    // Realiza la autenticación en la base de datos.
    $sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";
    $result = mysqli_query($conexion, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Usuario autenticado con éxito.
        header("Location: cliente.html"); // Redirige a la página de cliente.
        exit();
    } else {
        echo "Credenciales incorrectas. Inténtalo de nuevo.";
    }
}
?>
