<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "paginamain";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Error de conexión: " . mysqli_connect_error());
}

echo "Conexión exitosa a la base de datos";

// Realizar operaciones con la base de datos...

// Cerrar la conexión
$conn->close();
?>

