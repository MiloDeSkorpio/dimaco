<?php include ("templates/header.php");
?>
<section class="contenedor pading_header_2">
    <h1>Bienvenido al Editor de Proyectos</h1>
    <div class="registro">
        <form action="new_proyect.php" method="post" enctype="multipart/form-data" class="glass">
            <h2>Crear Nuevo Proyecto</h2>
            <div class="campo">
                <label>Nombre del Proyecto<input type="text" name="nombre"></label>
            </div>
            <div class="campo">
                <label>Dirección<input type="text" name="direc"></label>
            </div>
            <div class="campo">
                <label>Fecha de Inicio<input type="date" name="f_ini"></label>
            </div>
            <div class="campo">
                <label>Fecha de Finalización<input type="date" name="f_fin"></label>
            </div>
            <?php
                for ($i = 1;$i <= 10 ; $i++) { 
            ?>
            <div class="campo">
                    <label>Seleciona Imagen <?=$i ?><input type="file" name="imagen-<?=$i?>"></label>
            </div>
            <?php } ?>

            <input type="submit" value="Crear" name="pro" class="boton boton_secundario">
        </form>
    </div>
</section>
<section class="contenedor pading_header">
<div class="registros">
        <h2>Proyectos Registrados</h2>
        <div class="tabla">
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Fecha de Inicio</th>
                <th>Fecha de Finalización</th>
                <th></th>
                <th></th>
            </tr>
            <?php 
            include ('db.php');
            $con = $conexion;
            $sql = "SELECT * FROM proyectos";
            $query = mysqli_query($con,$sql);
            while($row = mysqli_fetch_array($query)): 
            ?>
            <tr>
                <td><?= $row['id']?></td>
                <td><?= $row['nombre']?></td>
                <td><?= $row['direc']?></td>
                <td><?= $row['f_ini'] ?></td>
                <td><?= $row['f_fin'] ?></td>
                <td><a href="upd_pro.php?id=<?= $row['id'] ?>" class="boton boton-edit">Editar</a></td>
                <td><a href="del_pro.php?id=<?= $row['id'] ?>" class="boton boton-del">Eliminar</a></td>
            </tr>
            <?php endwhile; ?>
        </table>                   
        </div>
    </div>
</section>
<section class="contenedor pading_header">
    <div class="registros">
        <h2>Galerias</h2>
        <div class="tabla">
        <table>
            <tr>
            <td>ID</td>
               
                <?php
                for ($i = 1;$i <= 10 ; $i++) { 
                ?>
                <th>Img <?= $i?></th>
                <?php } ?>
            </tr>
            <?php 
            include ('db.php');
            $con = $conexion;
            $sql = "SELECT * FROM proyectos";
            $query = mysqli_query($con,$sql);
            while($row = mysqli_fetch_array($query)): 
            ?>

            <tr>
                <td><?= $row['id']?></td>
                
                <?php
                for ($i = 1;$i <= 10 ; $i++) { 
                ?>
                <td><img src="data:image/jpg;base64,<?= base64_encode($row['img_'.$i]);?>" alt="">

            </td>
                <?php } ?>    
            </tr>
            <?php endwhile; ?>
        </table>                   
        </div>
    </div>
</section>
<?php include ("templates/footer.php"); ?>