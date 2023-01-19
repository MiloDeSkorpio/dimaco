<?php include ("includes/templates/header.php")  ?>
<main class="container">
    <section>
        <div class="banner">
        <div class="banner-content">
            <div class="banner-info">
            <p>En Construcción y Supervisión DIMACO proyectas tus ideas y construyamos tus sueños, contamos con el mejor personal para llevar a cabo ese proyecto que has planeado por mucho tiempo.</p>
            </div>  
        </div><!-- .banner-content --> 
        </div>
    </section>
    <section class="pading-top">
        <div class="contenedor">
            <h2>Nuestros Servicios</h2>
            <div class="servicios">
                <?php 
                    include ('includes/config/editor/db.php');
                    $con = $conexion;
                    $sql = "SELECT * FROM servicios";
                    $query = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_array($query)): 
                    ?>
                <div class="servicio glass">
                    <div class="contenido">
                        <h3 class="titulo"><?= $row['nombre']?></h3>
                        <div class="img_service">
                        <picture>
                            <source srcset="data:image/webp;base64,<?php echo base64_encode($row['imagen']);?>" type="image/webp">
                            <source srcset="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>" type="image/jpg">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($row['imagen']);?>" alt="">
                        </picture>
                        </div><!--.img_service  -->
                        <p><?= $row['descr']?></p>
                        <div class="btn">
                            <a href="contacto.php" class="boton boton_secundario">Cotizar</a>
                        </div>
                    </div> <!--.contenido  -->
                </div><!--.servicio  -->
                <?php endwhile; ?>           
            </div> <!--.servicios -->
        </div>
</section>

</main><!-- .container -->
<?php include ("includes/templates/footer.php")  ?>