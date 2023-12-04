<?php
include("bd.php"); // Asegúrate de que este archivo contenga la conexión a la base de datos.

if(isset($_POST['reg'])){
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['password'];

    // Realiza la inserción en la base de datos.
    $sql = "INSERT INTO usuarios (nombre, apellidos, telefono, usuario, contrasena) VALUES ('$nombre', '$apellidos', '$telefono', '$usuario', '$contrasena')";

    if (mysqli_query($conexion, $sql)) {
        echo "Registro exitoso. ¡Ahora puedes iniciar sesión!";
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conexion);
    }
}
?>
