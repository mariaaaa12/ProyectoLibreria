<?phpAdd commentMore actions
$servername = "db";         // <- el nombre del servicio de MySQL en docker-compose
$username = "root";Add commentMore actions
$password = "root";         // <- asegúrate que coincida con el que pusiste en docker-compose
$dbname = "libreria";       // <- el nombre de la base de datos
$password = "root";         // <- asegúrate que coincida con el que pusiste en docker-composeAdd commentMore actions
$dbname = "libreria";       // <- el nombre de la base de datos
Add commentMore actions
$conn = new mysqli($servername, $username, $password, $dbname);
$result = $conn->query("SHOW TABLES");
while ($row = $result->fetch_row()) {
    echo "Tabla: " . $row[0] . "<br>";
}

// Verifica si falló la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
