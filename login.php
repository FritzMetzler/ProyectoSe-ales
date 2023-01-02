<?php   
session_start();
if( !empty( $_SESSION['user'] )){
    header('location: home.php');
}

include 'partials/header.php'; 
?>
    <div class="log-card-container">
        <div class="log-space-container">
        <div class="log-data-container">
            <form action="LoginAccess.php" method="post">
            <h1>Accemso</h1>
                <p>Nombre  </p> <input type="text" placeholder="Username" name="user" require>
                <p>Contraseña</p> <input type="password" name="password" require>
                <div class="log-boton">
                <input type="submit" value="Emtrar">
                </div>
            </form>        
        </div>
        </div> 
        <h1 class="spacer">Ó</h1>
        <div class="log-space-container">
        <div class="log-data-container">
            <form  method="post">
                <h1>Remgistro</h1>
                <p>Nombre</p> <input type="text" placeholder="Emjemplom: Juam" name="name" require>
                <p>Apellido</p> <input type="text" placeholder="Emjemplom:Peremz" name="lastname" require>
                <p>Username</p> <input type="text" placeholder="Chemsito" name="username" require>
                <p>Correo</p> <input type="text" placeholder="chems@chems.comm" name="email" require>
                <p>Contraseña</p><input type="password" placeholder="Password" name="password" require>
                <div class="log-boton">
                    <input type="submit" name="submit" value="Remgistro">
                </div>
                <?php include('validarcampos.php')?>
            </form>
        </div>
        </div>
        
    </div>
    

<?php include 'partials/footer.php'; ?>