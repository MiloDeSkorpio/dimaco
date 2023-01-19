<?php include ("includes/templates/header.php")  ?>
<main class="container">

        <?php 
            include ('includes/config/editor/db.php');
            $con = $conexion;
            $sql = "SELECT * FROM proyectos";
            $query = mysqli_query($con,$sql);
            while($row = mysqli_fetch_array($query)): 
            ?>
            <section class="pading-top">
            <div class="obra glass">
                <div class="datos">
                    <h3>Nombre: <?= $row['nombre']?></h3>
                    <label>Direción: <?= $row['direc']?></label>
                    <label>Fecha de Inicio: <?= $row['f_ini']?></label>
                    <label>Fecha de Finalización: <?= $row['f_fin']?> </label>
                </div>
                 <div class="galery">
                 <?php
                    for ($i = 1;$i <= 10 ; $i++) {  
                     ?>
                    <div class="galery-i ">
                        <picture>
                            <source srcset="data:image/jpg;base64,<?php echo base64_encode($row['img_'.$i]);?>" type="image/jpg">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($row['img_'.$i]);?>" alt="img-<?= $row['nombre']?>">
                        </picture>
                    </div> <!--.galery-i -->
                <?php } ?>
                </div> <!--.galery--> 
            </div> <!-- .obra -->
            </section>
            <?php endwhile; ?>
</main>
<?php include ("includes/templates/footer.php")  ?>