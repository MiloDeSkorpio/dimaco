<?php
include ('db.php');
$con = $conexion ;
 $id =$_GET['id'];
 $sql = "SELECT * FROM servicios WHERE id='$id'";
 $query = mysqli_query($con,$sql);
 $row = mysqli_fetch_array($query);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4443851d27.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/build/img/log.png" type="image/x-icon">
    <link rel="stylesheet" href="/build/css/app.css">
    <title>Editor | Servicios</title>
</head>
<body class="dark-mode">
<div class="bg"></div>
    <div class="bg bg2"></div>
    <div class="bg bg3"></div>
    <section class="contenedor pading_header">
        <div class="registro">
             <form action="edit_serv.php" method="post" enctype="multipart/form-data" class="glass">
                <h1>Editor de Servicios</h1>
                <input type="hidden" name="id" value="<?= $row['id']?>">
                <div class="campo">
                    <label>Nombre del Servicio<input type="text" value="<?= $row['nombre']?>" name="nombre"></label>
                 </div>
                <div class="campo">
                <label>Descripcion del Servicio<input type="text" value="<?= $row['descr']?>" name="descr"></label>
                </div>
                <div class="campo">
                <label>Seleciona Imagen de Referencia<input type="file"  name="imagen"></label>
                    <img height="80px" src="data:image/jpg;base64,<?= base64_encode($row['imagen']);?>" alt="">
                </div>
                <input type="submit" value="Actualizar" name="update_p" class="boton boton_secundario">
            </form>
        </div>

    </section>

<?php include ('templates/footer.php'); ?>