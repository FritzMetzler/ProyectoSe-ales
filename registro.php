<?php include 'partials/header.php'; ?>
        <div class="reg-window">
        <form action="./controllers/registro.php" method="post">
            <h1>Registro</h1>
            <p>Nombre</p> <input type="text" placeholder="Emjemplom: Juam" name="name" require>
            <p>Apellido</p> <input type="email" placeholder="Emjemplom:Peremz" name="lastname" require>
            <p>Correo</p> <input type="text" placeholder="chems@chems.comm" name="email" require>
            <p>Contraseña</p><input type="password" placeholder="Password" name="password" require>
            
            <input type="submit" value="Registrate!">
            <?php include('validarcampos.php')?>
        </form>
        <p>Ya tienes una cuenta? <input type="submit" value="climck aqui!" id="close-popup"></p>
        </div>

<?php include 'partials/footer.php'; ?>