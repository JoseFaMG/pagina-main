<?php
$servername = "localhost";
$username = "root";
$password = "2017452071";
$database = "paginamain";

// Establecer la conexión
$connection = mysqli_connect($servername, $username, $password, $database);

// Verificar la conexión
if (!$connection) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Ejecutar consulta
$query = "SELECT * FROM usuarios";
$result = mysqli_query($connection, $query);

// Verificar si se obtuvieron resultados
if (mysqli_num_rows($result) > 0) {
    // Obtener los resultados como un array
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // Enviar los resultados como respuesta en formato JSON
    echo json_encode($rows);
} else {
    echo "No se encontraron registros en la tabla usuarios.";
}

// Cerrar la conexión
mysqli_close($connection);
?>

