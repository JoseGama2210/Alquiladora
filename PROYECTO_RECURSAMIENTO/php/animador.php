<?php
// Configura las credenciales de la base de datos
$servername = "nombre_del_servidor";
$username = "nombre_de_usuario";
$password = "contraseña";
$database = "nombre_de_la_base_de_datos";

// Establece la conexión con la base de datos
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

// Obtiene el valor del animador desde el formulario
if (isset($_POST['animador'])) {
    $animador = $_POST['animador'];
    
    // Prepara y ejecuta la consulta para insertar el animador en la base de datos
    $stmt = $conn->prepare("INSERT INTO eleccion_animador (animador) VALUES (?)");
    $stmt->bind_param("s", $animador);
    
    if ($stmt->execute()) {
        echo "La elección del animador se ha guardado exitosamente.";
    } else {
        echo "Error al guardar la elección del animador: " . $stmt->error;
    }

    // Cierra la conexión
    $stmt->close();
    $conn->close();
} else {
    echo "No se recibieron datos válidos.";
}
?>
