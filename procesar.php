<?php
// Configuración de la base de datos
$servername = "db4free.net:3306"; // Cambia a la dirección del servidor de tu base de datos
$username = "sistemasinf"; // Cambia al nombre de usuario de tu base de datos
$password = "sistemasinf"; // Cambia a la contraseña de tu base de datos
$dbname = "sisinfpaises"; // Cambia al nombre de tu base de datos

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Verificar si se ha enviado un formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $extension = $_POST["extension"];

    // Realizar la inserción en la base de datos
    $sql = "INSERT INTO pais (NombrePais, ExtensionPais) VALUES ('$nombre', '$extension')";

    if ($conn->query($sql) === TRUE) {
        // Inserción exitosa
        echo "País y extensión agregados exitosamente.";
    } else {
        // Error en la inserción
        echo "Error al agregar el país y la extensión: " . $conn->error;
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>