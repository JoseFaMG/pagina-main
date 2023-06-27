<?php
$servername = "localhost";
$username = "room";
$password = "";
$database = "paginamain";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar si hay errores de conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos";

// Realizar operaciones con la base de datos...

// Cerrar la conexión
$conn->close();
?>