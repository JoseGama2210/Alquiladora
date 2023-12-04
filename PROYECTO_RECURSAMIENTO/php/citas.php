<?php
include("bd.php"); // Asegúrate de que este archivo contenga la conexión a la base de datos.

if(isset($_POST['reservar'])){
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];

    // Realiza la inserción en la base de datos.
    $sql = "INSERT INTO citas (fecha, hora) VALUES ('$fecha', '$hora')";

    if (mysqli_query($conexion, $sql)) {
        echo "Su reserva ha sido confirmada.";
    } else {
        echo "Error al realizar la reserva: " . mysqli_error($conexion);
    }
}
?>
