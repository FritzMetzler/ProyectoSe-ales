<?php include 'partials/header.php'; ?>
    
    <section class="promociones" >
        <div class="promo-container">
            <div class="prom-list">    
                
                <div class="prom-card-container" style="display: none ">
                        <div class="prom-card prom-card-active">
                            <div class="prom-card-text">
                                <h3>Promotion 1</h3>
                                <p>Precio: 90</p>
                            </div>
                            <img src="images/imagen1.png" class="prom-card-image">
                        </div>    
                    </div>
                    <?php
                    include "controllers/database_conection.php";
                    //$conexion = mysqli_connect("localhost", "root", "password", "negocio");
                    $request = "SELECT * FROM `productos`";
                    $resultSet = mysqli_query($conexion, $request);
                    while($row=mysqli_fetch_row($resultSet)){
                    ?>
                    <div class="prom-card-container">
                        <div class="prom-card">
                            <div class="prom-card-text">
                                <h3><?php echo $row[1]; ?></h3>
                                <p>Precio: <?php echo $row[3]; ?></p>
                            </div>
                            <div class="prom-img-container">
                                <img src="<?php echo $row[4] ?>" class="prom-card-image">
                            </div>
                        </div>    
                    </div>
                    <?php
                    }
                    mysqli_close($conexion);
                    ?>
            </div>
            
            <div class="prom-visualizer">
                <div class="prom-visual-container">
                    <img src="images/imagen1.png" class="big-image">
                    <div class="prom-visual-text-container">
                        <h3>Promotion 1</h3>
                        <p>Precio: 90</p>
                    </div>
                </div>
                <div class="delivery">
                    <div class="del-container">
                    <h3>Ordenalo Aqui!</h3>
                    <div class="global-services">
                        <ul>
                            <li><a target="_blank" href="https://www.ubereats.com/en-IN/orders/">
                                <img src="https://logodownload.org/wp-content/uploads/2019/05/uber-eats-logo-1-768x768.png"></a></li>
                            <li><a target="_blank" href="https://www.rappi.com.mx/login"><img src="https://clipground.com/images/logo-rappi-clipart-9.png"></a></li>
                            <li><a target="_blank" href="https://www.didi-food.com/en-US/food/"><img src="https://d1yjjnpx0p53s8.cloudfront.net/styles/logo-thumbnail/s3/072020/didi_food.jpg?Evv2ZS7wa9fQgrC_mVy.LL7CLxHg9eAc&itok=uiJXm8ON"></a></li>
                        </ul>    
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="javascripts/promo-image-selector.js"></script>

<?php include 'partials/footer.php'; ?>