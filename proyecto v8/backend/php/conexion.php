<?php
$host = "localhost"; 
$user = "root"; 
$password = "";
$dbname = "final"; 

$conn = new mysqli($host, $user, $password, $dbname); // Se crea la conexión

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
echo "Conexión lograda";
?>