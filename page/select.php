<?php
$server = "localhost";
$username = "root";
$password = "12345678";
$db = "bdunad33";
$tableproduc = "tabla33";
$conn = mysqli_connect($server, $username, $password, $db);
$sql = "select * from tabla33 order by 1 desc";
$datos = mysqli_query($conn, $sql);
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



while ($resul=mysqli_fetch_array($datos)) {
    echo '<table style="width:100%" BORDER="1">';
    echo '<tr>';
    echo '<th> Codigo Del Producto' ;
    echo '<th> Nombre Del Producto' ;
    echo '<th>  Marca Del Producto';
    echo '<th>  Precio Del Producto' ;
    echo '<th> Cantidad De Producto' ;
    echo '</tr>';
echo '<p>';
echo '<tr>';
echo '<td>' . $resul ['product_code']     .'</td>';
echo '<td>' . $resul ['product_name']     .'</td>';
echo '<td>' . $resul ['product_brand']    .'</td>';
echo '<td>' . $resul ['product_price']    .'</td>';
echo '<td>' . $resul ['product_quantity'] .'</td>';
echo '</tr>';
echo '</table>';
//ejemplo para busqueda filtrada --- >

}
echo '<p>';
echo '<p>';
echo '<p>';
echo '<form action="consult_product.html"> <input type="submit" value="Realizar otra consulta" /> </form>';
   mysqli_close($conn);
?>