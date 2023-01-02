<?php
$user = $_POST['user'];
$pass = $_POST['password'];



//conect to database
include "controllers/database_conection.php";

$request = "SELECT * FROM `usuarios` WHERE Username='$user' and Clave='$pass'";
$response = mysqli_query($conexion , $request);
$row = mysqli_num_rows($response);

if($row){
    session_start();
    $_SESSION['user']= $user;
    header("location:home.php");

}else{
    ?>
    <?php
    include("login.php")
    ?>
    <h1 class="bad" style="position: absolute; left: 35%; top: 30%; color:red;">Error en la autenticación</h1>
    <?php
}
