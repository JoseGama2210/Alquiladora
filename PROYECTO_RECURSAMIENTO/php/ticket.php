<?php
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "alquiladora";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión a la base de datos fallida: " . $conn->connect_error);
}

// Obtener datos de la base de datos y rellenar el ticket

// Calcula el precio total
$precioTotal = $mesasRedondas * 50 + $mesasRectangulares * 40 + $mesasCuadradas * 40;

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ticket de Alquiler</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Resto del código HTML (mismo que el anterior) -->
    <p>Total a Pagar: <?php echo $precioTotal; ?></p>
</body>
</html>
