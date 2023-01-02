<?php
$name = $_POST['name'];
$lastname =$_POST['lastname'];
$username =$_POST['username'];
$email =$_POST['email'];
$pass = $_POST['password'];

//conect to database
include "controllers/database_conection.php";
$request = "SELECT * FROM `usuarios` WHERE Username='$username'";
$response = mysqli_query($conexion , $request);
$row = mysqli_num_rows($response);

if($row){//*si ya existe el nombre de ususario
    include("login.php")
    ?>
    <h1 style="position: absolute; left: 35%; top: 30%; color:red;">
    Error Este nombre de usuario está en uso</h1>
    <?php
}else{//*Si no, insertalo
    $request = "INSERT INTO `usuarios`(NombreUsuario, ApellidosUsuario, EmailUsuario, Username, Clave) VALUES ( '$name', '$lastname', '$username', '$email', '$pass' )";
    $response = mysqli_query($conexion , $request);
    if($response){
    include("login.php")
    ?>
    <h1 style="position: absolute; left: 35%; top: 30%; color:green;">
    Añadido correctamente</h1>
    <?php
    }
}
