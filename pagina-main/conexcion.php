<?php
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$database = "tu_base_de_datos";

// Establecer la conexión
$connection = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if (!$connection) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Ejecutar consulta
$query = "SELECT * FROM usuarios";
$result = mysqli_query($connection, $query);

// Obtener los resultados como un array
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Enviar los resultados como respuesta en formato JSON
echo json_encode($rows);

// Cerrar la conexión
mysqli_close($connection);
?>
