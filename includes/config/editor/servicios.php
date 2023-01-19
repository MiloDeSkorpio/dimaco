<?php include ("templates/header.php"); ?>
<main class="container">
<section >
    <div class="contenedor">
    <h1>Bienvenido al editor  de Servicios </h1>
        <div class="registro">
            <form action="new_service.php" method="post" enctype="multipart/form-data" class="glass">
            <h2>Crear Nuevo Servicio</h2>
            <div class="campo">
                    <label>Nombre del Servicio<input type="text" name="nombre"></label>
                </div>
                <div class="campo">
                    <label>Descripcion del Servicio<input type="text" name="descr"></label>
                </div>
                <div class="campo">
                    <label>Seleciona Imagen de Referencia<input type="file" name="imagen"></label>
                </div>
                <div class="btn">
                    <input type="submit" value="Crear" name="servicio" class="boton boton_secundario">
                </div>
            </form>
        </div>
    </div>
</section>
<section>
    <div class="contenedor">
        <div class="registros">
            <h2>Servicios Registrados</h2>
            <div class="tabla">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Imagen</th>
                    <th></th>
                    <th></th>
                </tr>
                <?php 
                include ('db.php');
                $con = $conexion;
                $sql = "SELECT * FROM servicios";
                $query = mysqli_query($con,$sql);
                while($row = mysqli_fetch_array($query)): 
                ?>
                <tr>
                    <td><?= $row['id'] ?></td>
                    <td><?= $row['nombre']?></td>
                    <td><?= $row['descr']?></td>
                    <td><img src="data:image/jpg;base64,<?= base64_encode($row['imagen']);?>" alt=""></td>
                    <td><a href="upd_serv.php?id=<?= $row['id'] ?>" class="boton boton-edit">Editar</a></td>
                    <td><a href="del_serv.php?id=<?= $row['id'] ?>" class="boton boton-del">Eliminar</a></td>
                </tr>
                <?php endwhile; ?>
            </table>
            </div>
        </div>
    </div>

</section>
</main>


<?php include ("templates/footer.php"); ?>