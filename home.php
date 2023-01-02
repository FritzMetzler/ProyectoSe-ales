<?php include "partials/header.php"; 
session_start();
if( empty( $_SESSION['user'] )){
    header("location:login.php");
}
$session_name=$_SESSION['user'];

include "controllers/database_conection.php";
date_default_timezone_set('America/Monterrey');
?>
<h1>Carrito de compra</h1>
<p>Bienbenido <?php echo $_SESSION['user']; ?> </p>
<div class="home-carrito-container">
    <div class="home-space-container">
        <table>
            <tr>
                <th><p>Cantidad </p> </th>
                <th><p>Producto </p> </th>
                <th><p>Precio unitario</p> </th>
                <th><p>Precio Total</p>  </th>
            </tr>

        <?php
            $request = "SELECT Username, ProductID, Producto, COUNT(ProductID), Precio, SUM(Precio) FROM `carrito` WHERE Username='$session_name' GROUP by ProductID";
            $resultSet = mysqli_query($conexion, $request);
            while($row=mysqli_fetch_row($resultSet)){
        ?>
            <tr>
                <td><?php  echo $row[2];?></td>
                <td><?php  echo $row[3];?></td>
                <td><?php  echo $row[4];?></td>
                <td><?php  echo $row[5];?></td>
            </tr>
        <?php } 
            $request = "SELECT SUM(Precio) FROM `carrito` WHERE Username='$session_name'";
            $resultSet = mysqli_query($conexion, $request);
            $row=mysqli_fetch_row($resultSet);
            $totalpago=$row[0];
        ?>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><p> Total: <?php 
                echo $totalpago ?> </p></td>
            </tr>
        </table>

        
    </div>
</div>
<div class="location-to-post">
    <form method="post" action="home.php">
        <!--<input type="hidden" name="user" value="FritzWeitzel">Usuario-->
        <input type="hidden" name="productos" value="<?php echo $mystring; ?>"><!--Productos en carrito-->
        <p>Lugar de entrega</p><input type="text" name="location">
        <input type="submit" name="buttonpay" value="Pagar">
    </form>
</div>
        
<?php 
    if(array_key_exists('buttonpay', $_POST)) {
        
        buttonpay();
    }
    function buttonpay() {
        $session_name=$_SESSION['user'];
        include "controllers/database_conection.php";
        //mostrar Compras
        $test= "SELECT Username, ProductID, Producto, COUNT(ProductID), Precio, SUM(Precio) FROM `carrito` WHERE Username='$session_name' GROUP by ProductID"; 
        $resultSet = mysqli_query($conexion, $test);
        while($row=mysqli_fetch_row($resultSet)){
            $mystring =  $mystring."(cantidad: ".$row[3].",Producto: ".$row[2].",Precio unitario: ".$row[4].",Precio total: ".$row[5].") ";
        }
        //var_dump($mystring);
        //muestra el precio total del las compras
        $request = "SELECT SUM(Precio) FROM `carrito` WHERE Username='$session_name'";
        $resultSet = mysqli_query($conexion, $request);
        $row=mysqli_fetch_row($resultSet);
        $totalpago=$row[0];
        //!-----------------hasta aca todo bien
        //toma de datos para pago e insercion
        //$usuario = $session_name;
        $lugarEntrega= $_POST['location'];
 
        if ( strlen($lugarEntrega)<=15  ){
            echo"Favor de poner una direccion valida";
            die();
        }
        $ProductosComprados = $mystring;
        if ( strlen($ProductosComprados)<=15  ){
            echo"Carrito vacio, favor de agregar productos";
            die();
        }
        $FechaCompra = date("Y/m/d");
        //insercion
        $request="INSERT INTO `orden`(`Username`, `Comprados`,`Total`, `LugarEntrega`, `FechaCompra`) VALUES ('$session_name','$mystring','$totalpago','$lugarEntrega','$FechaCompra')";
        $insertData = mysqli_query($conexion, $request);
        if($insertData){
            echo "datos insertados correctamente";
        }
        $deleteRequest="DELETE FROM `carrito` WHERE Username='$session_name'";
        $deleteData = mysqli_query($conexion, $deleteRequest);
        if($deleteData){
            echo "datos del carrito eliminados correctamente";
        }
        header("Location: home.php");

    }
?>

<h1>Ordenes Hechas</h1>
<div class="home-carrito-container">
    <div class="home-space-container">
        <table>
            <tr>
                <th> <p>Orden ID </p> </th>
                <th> <p>Productos Comprados </p></th>
                <th> <p>Lugar de entrega </p></th>
                <th> <p>Total </p></th>
                <th> <p>Fecha de compra </p></th>
            </tr>
                <?php
                    $request= "SELECT * FROM `orden` WHERE Username='$session_name' ORDER BY `ID` DESC"; 
                    $response= mysqli_query($conexion, $request);
                    while($row=mysqli_fetch_row($response)){
                ?>
                <tr>
                    <td> <p><?php echo $row[0] ?></p></td>
                    <td> <p><?php echo $row[2] ?></p></td>
                    <td> <p><?php echo $row[4] ?></p></td>
                    <td> <p><?php echo "$".$row[3] ?></p></td>
                    <td> <p><?php echo $row[5] ?></p></td>
                </tr>
                <?php 
                    }
                ?>
        </table>
        
    </div>
</div>
<div class="app-qr" id="logout">
<h1> <a href="close_session.php">Salir</a> </h1>
</div>



<?php include "partials/footer.php";?>