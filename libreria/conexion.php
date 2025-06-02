<?php
$servername = "db";         
$username = "root";
$password = "rootpass";     // <-- Contraseña correcta
$dbname = "libreria";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$result = $conn->query("SHOW TABLES");
while ($row = $result->fetch_row()) {
    echo "Tabla: " . $row[0] . "<br>";
}
?>
