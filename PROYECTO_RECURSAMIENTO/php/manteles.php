<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $mesa_redonda_cantidad = $_POST["mesa_redonda_cantidad"];
    $mesa_rectangular_cantidad = $_POST["mesa_rectangular_cantidad"];
    $mesa_cuadrada_cantidad = $_POST["mesa_cuadrada_cantidad"];

    
    $servername = "tu_servidor";
    $username = "tu_usuario";
    $password = "tu_contraseña";
    $dbname = "tu_base_de_datos";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Ejemplo de inserción en la base de datos
    $sql = "INSERT INTO mesas (mesa_redonda, mesa_rectangular, mesa_cuadrada) VALUES ('$mesa_redonda_cantidad', '$mesa_rectangular_cantidad', '$mesa_cuadrada_cantidad')";

    if ($conn->query($sql) === TRUE) {
        // Redirige a la siguiente página o muestra un mensaje de éxito
        header("Location: manteles.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
