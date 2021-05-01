<?php
$servername = "localhost";
$username = "root";
$password = "66KOT#nI#Hx9";

// Crear conexion
$conn = new mysqli($servername, $username, $password);

// Validar conexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Crear base de datos
$sql = "CREATE DATABASE IF NOT EXISTS `bdunad33` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
if ($conn->query($sql) === TRUE) {
  echo "OK";
} else {
    echo "Error creando base de datos: " . $conn->error;
}

// Cerrar conexion
$conn->close();
?>