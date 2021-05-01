<?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "bdunad33";

$fecha = date("Ymd-His");

$salida_sql = $dbname.'_'.$fecha.'.sql';
// Crear conexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Validar conexion
if ($conn->connect_error) {
  die("Conexion fallida: " . $conn->connect_error);
}

$dump = "mysqldump -h$servername -u$username -p$password --opt  $dbname > $salida_sql";

system($dump, $uotput);
if(!$uotput){
    echo "Backup generado con exito";
} else {
    echo "Error generando Backup";
}

// Cerrar conexion
$conn->close();
?>