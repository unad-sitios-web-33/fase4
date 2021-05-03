<?php
$server = "localhost";
$username = "root";
$password = "12345678";
$db = "bdunad33";
$tableproduc = "tabla33";

$idcod = $_POST ['product_code'];
$NameProduct = $_POST ['product_name'];
$Marcaproduct = $_POST ['product_brand'];
$PrecioProduc = $_POST ['product_price'];
$CantidadExist = $_POST ['product_quantity'];


//Crear conexión
$conn = mysqli_connect($server, $username, $password, $db);

//Chequear conexión
if  (!$conn){
    die("conexión fallida:" . mysqli_connect_error());
}

$sql = "UPDATE tabla33 SET product_name= '$NameProduct' , product_brand= '$Marcaproduct' , product_price= '$PrecioProduc' , product_quantity= '$CantidadExist' WHERE product_code= '$idcod'";

if (mysqli_query($conn, $sql))  {
       echo "Información actualizada correctamente";

}

else {
        echo "Se ha presentado un error al actualizar la información: " . mysql_error($conn);
}

mysqli_close($conn);
?>
