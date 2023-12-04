<?php
// Configura la conexión a la base de datos (modifica según tu configuración)
$servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

// Conecta a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Verifica si se enviaron datos por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mariachi = isset($_POST["mariachi"]) ? 1 : 0;
    $norteno = isset($_POST["norteno"]) ? 1 : 0;
    $banda = isset($_POST["banda"]) ? 1 : 0;
    $dj = isset($_POST["dj"]) ? 1 : 0;
    $sonido = isset($_POST["sonido"]) ? 1 : 0;

    // Inserta las selecciones en la base de datos
    $sql = "INSERT INTO opciones_musica (mariachi, norteno, banda, dj, sonido)
            VALUES ($mariachi, $norteno, $banda, $dj, $sonido)";

    if ($conn->query($sql) === TRUE) {
        echo "Selecciones guardadas con éxito";
    } else {
        echo "Error al guardar las selecciones: " . $conn->error;
    }

    // Cierra la conexión a la base de datos
    $conn->close();
}
?>
