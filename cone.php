<?php
session_start();
$db = 'bqjzrwqquurko5uy2m2i';
/* Nombre del servidor. */
$serverName = "bqjzrwqquurko5uy2m2i-mysql.services.clever-cloud.com";
/* Usuario y clave. */
$username = "udnn8ixyokjrgg6e";  // En MySQL es común usar 'username' en lugar de 'uid'
$password = "Xi88qYy3rBpURe9aom3V";

// Establecer la conexión a MySQL
$conn = new mysqli($serverName, $username, $password, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("No es posible conectarse al servidor: " . $conn->connect_error);
}

// Establecer el conjunto de caracteres a UTF-8
$conn->set_charset("utf8");


?>
