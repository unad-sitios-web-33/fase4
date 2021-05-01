<?php
$server = "localhost";
$username = "root";
$password = "12345678";
$db = "bdunad33";
$tableproduc = "tabla33";
$conn = mysqli_connect($server, $username, $password, $db);
if  (!$conn){
    die("conexión fallida:" . mysqli_connect_error());
}
else {
    $idcod = $_POST ['product_code'];
    $NameProduct = $_POST ['product_name'];
    $Marcaproduct = $_POST ['product_brand'];
    $PrecioProduc = $_POST ['product_price'];
    $CantidadExist = $_POST ['product_quantity'];
    
    $sql = "insert into $tableproduc values ('$idcod','$NameProduct','$Marcaproduct','$PrecioProduc','$CantidadExist')";
    
    if (mysqli_query($conn, $sql))  {
    
        echo '<html lang="en">

        <head>
            <title>Enter products</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </head>
        
        <body>
            <nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-2">
                <!-- Links -->
                <ul class="navbar-nav">
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Inventario
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="enter_product.html">Ingresar productos al inventario</a>
                            <a class="dropdown-item" href="edit_product.html">Actualizar producto</a>
                            <a class="dropdown-item" href="delete_product.html">Eliminar producto</a>
                            <a class="dropdown-item" href="consult_product.html">Consultar</a>
                        </div>
                    </li>
        
     
                </ul>
            </nav>';

        echo ' <h2> Producto registrado correctamente </h2>';
        echo '<form action="enter_product.html"> <input type="submit" value="Ingresar otros productos al inventario" /> </form>';

     
    } else {
        echo "error " . mysqli_error($conn);
        echo '<form action="enter_product.html"> <input type="submit" value="Regresar" /> </form>';
    }
    
    mysqli_close($conn);


}



?>
