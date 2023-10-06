<?php
$servername = "localhost"; 
$username = "root";        
$password = "";         
$database = "DATOS";   

$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {
    die("La conexión a MySQL falló: " . $conn->connect_error);
}

$sqlCreateDatabase = "CREATE DATABASE IF NOT EXISTS $database";
if ($conn->query($sqlCreateDatabase) === TRUE) {
    echo 'conexion establecida'. "<br>". "<br>" ;
} else {
    echo "Error al crear la base de datos: " . $conn->error . "<br>";
}

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}

$sqlCreateTable = "CREATE TABLE IF NOT EXISTS USUARIOS (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    mail VARCHAR(255) NOT NULL,
    contraseña VARCHAR(255) NOT NULL,
    creacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    modificacion TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    eliminacion TIMESTAMP NULL DEFAULT NULL)";

if ($conn->query($sqlCreateTable) === TRUE) {
    echo "";
} else {
    echo "Error al crear la tabla 'USUARIOS': " . $conn->error . "<br>";
}
?>
