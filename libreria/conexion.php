<?php
$servername = "db";         // <- el nombre del servicio de MySQL en docker-compose
$username = "root";
$password = "root";         // <- asegúrate que coincida con el que pusiste en docker-compose
$dbname = "libreria";       // <- el nombre de la base de datos

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si falló la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
