<?php
include('conexion.php'); // Incluye el archivo de conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["decoracion"])) {
        $tipoDecoracion = $_POST["decoracion"];

        // Insertar los datos en la base de datos
        $sql = "INSERT INTO tipos_decoracion (tipo) VALUES ('$tipoDecoracion')";

        if (mysqli_query($conexion, $sql)) {
            echo "Datos guardados correctamente.";
        } else {
            echo "Error al guardar los datos: " . mysqli_error($conexion);
        }
    }
}
?>
