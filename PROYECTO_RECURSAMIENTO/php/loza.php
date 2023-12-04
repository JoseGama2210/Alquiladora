<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["loza"])) {
        $tipoLoza = $_POST["loza"];

        $sql = "INSERT INTO loza (tipo_loza) VALUES (?)";

        $stmt = $conn->prepare($sql);

        $stmt->bind_param("s", $tipoLoza);

        if ($stmt->execute()) {
            header("Location: agradecimiento.html");
            exit();
        } else {
            echo "Error al guardar los datos en la base de datos.";
        }

        $stmt->close();
        $conn->close();
    }
}
?>
