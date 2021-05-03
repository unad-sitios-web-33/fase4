<?php
$server = "localhost";
$username = "root";
$password = "12345678";
$db = "bdunad33";
$tableproduc = "tabla33";

$idcod = $_POST ['product_code'];

//Crear conexión
$conn = mysqli_connect($server, $username, $password, $db);

//Chequear conexión
if  (!$conn){
    die("conexión fallida:" . mysqli_connect_error());
}

//SQL para eliminar registro
$sql = "DELETE FROM tabla33 WHERE product_code= '$idcod'";

if (mysqli_query($conn, $sql))  {
       echo "Registro eliminado exitosamente";

}

else {
        echo "Error al eliminar registro: " . mysql_error($conn);
}

mysqli_close($conn);
?>
