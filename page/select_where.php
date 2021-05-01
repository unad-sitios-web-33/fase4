<?php
$server = "localhost";
$username = "root";
$password = "12345678";
$db = "bdunad33";
$tableproduc = "tabla33";

$conn = mysqli_connect($server, $username, $password, $db);

$idcod = $_POST ['product_code'];
$sql = "select * from tabla33 where product_code='$idcod' order by 1 desc";
$datos = mysqli_query($conn, $sql);


while ($resul=mysqli_fetch_array($datos)) {
    
    echo '<label for="product_name">Codigo:   </label>';
    echo '<input type="number"  class="form-control" id="cant_convert" placeholder=" '. $resul ['product_code']  .'">';
    echo '<p>';
    echo '<label for="product_name">Nombre:   </label>';
    echo '<input type="number"  class="form-control" id="cant_convert" placeholder=" '. $resul ['product_name']  .'">';
    echo '<p>';
    echo '<label for="product_name">Marca:    </label>';
    echo '<input type="number"  class="form-control" id="cant_convert" placeholder=" '. $resul ['product_brand']  .'">';
    echo '<p>';
    echo '<label for="product_name">Precio:   </label>';
    echo '<input type="number"  class="form-control" id="cant_convert" placeholder=" '. $resul ['product_price']  .'">';
    echo '<p>';
    echo '<label for="product_name">Cantidad: </label>';
    echo '<input type="number"  class="form-control" id="cant_convert" placeholder=" '. $resul ['product_quantity']  .'">';
    mysqli_close($conn);
    echo '<form action="consul_where.html"> <input type="submit" value="Realizar otra consulta" /> </form>';
}


 



?>