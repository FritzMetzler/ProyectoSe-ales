<?php include 'partials/header.php'; 
session_start();
$session_name=$_SESSION['user'];
?>
<section class="paquetes">    
    <div class="pkg-amazing-cards">
        <?php
            include "controllers/database_conection.php";
            //$conexion = mysqli_connect("localhost", "root", "password", "negocio");
            $request = "SELECT * FROM `productos`";
            $resultSet = mysqli_query($conexion, $request);
            while($row=mysqli_fetch_row($resultSet)){
        ?>
            <div class="pkg-card-container">
                <div class="pkg-card">
                <form method="post">
                    <img src="<?php echo $row[4] ?>">
                    <h3><?php echo $row[1] ?></h3>
                    <p>Precio: <?php echo $row[3] ?> pesos</p> 
                    <?php
                    if( empty( $_SESSION['user'] )){
                        $nombre_boton="XKCD-nonvisible";
                        $visibilidad="hidden";
                        $mensaje="";
                    }else{
                        $nombre_boton="button1";
                        $visibilidad="submit";
                        $mensaje= "visibility:hidden;";
                    }
                    ?>
                        <input type="hidden" name="ProductoID" value="<?php echo $row[0] ?>">
                        <input type="hidden" name="nombreprod" value="<?php echo $row[1] ?>">                   
                        <input type="hidden" name="precio" value="<?php echo $row[3] ?>">                   
                        <input type="<?php echo $visibilidad ?>" name="<?php echo $nombre_boton?>" value="Add to car"/>
                        <p style="color:red; <?php echo $mensaje ?>">Para pedir <a href="login.php">inicia sesion</a></p>
                    </form>
                </div>
            </div>
        <?php } ?>
    </div>
    <?php 
        if(array_key_exists('button1', $_POST)) {
            button1();
        }
        function button1() {
            include "controllers/database_conection.php";
            $session_name=$_SESSION['user'];
            $productid = $_POST['ProductoID'];
            $productid = (int) $productid;
            $nombreprod = $_POST['nombreprod'];
            $Precio = $_POST['precio'];
            $Precio = (int) $Precio;

            
            var_dump($productid);
            var_dump($Precio);
            var_dump($nombreprod);
            $request = "INSERT INTO `carrito`(`Username`, `ProductID`, `Producto`, `Precio`) VALUES ('$session_name',$productid,'$nombreprod',$Precio)";
            $response = mysqli_query($conexion, $request);
            if($response){
                echo "añadido";
            }
        }
    ?>
    <script src="../javascripts/pkg-image-selector.js"></script>
</section>
<?php include 'partials/footer.php'; ?>