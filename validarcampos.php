<?php
$name = $_POST['name'];
$lastname =$_POST['lastname'];
$username =$_POST['username'];
$email =$_POST['email'];
$pass = $_POST['password'];

if( isset ($_POST['submit']) && ( empty($name) || empty($lastname) || empty($username) || empty($email) || empty($pass) ) ){
    echo "*Favor de llenar todos los campos";
}else{
    include "controllers/database_conection.php";
    $request = "SELECT * FROM `usuarios` WHERE Username='$username'";
    $response = mysqli_query($conexion , $request);
    $row = mysqli_num_rows($response);
    if($row){//*si ya existe el nombre de ususario
        echo $name;
        echo "error, nombre de usuario existente";
    }
    $request = "SELECT * FROM `usuarios` WHERE Email='$email'";
    $response = mysqli_query($conexion , $request);
    $row = mysqli_num_rows($response);
    if($row){//*si ya existe el email
        echo "error, email existente";
        
        echo $lastname;
        echo $username ;
        echo $email ;
        echo $pass ;
    }else{
        
        $request = "INSERT INTO `usuarios`(Nombre, Apellidos, Email, Username, Clave) VALUES ( '$name', '$lastname', '$email', '$username','$pass' )";
        $response = mysqli_query($conexion , $request);
        if($response){
?>
            <h1 style="position: absolute; left: 35%; top: 30%; color:green;">
            Añamdido correctamente</h1>
    <?php
        }
    }
}