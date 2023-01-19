<?php
    include ('db.php');
    $con = $conexion ;

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $direct=$_POST['direc'];
    $fec_ini = $_POST['f_ini'];
    $fec_fin = $_POST['f_fin'];
    $imagen1= addslashes(file_get_contents($_FILES['imagen-1']['tmp_name']));
    $imagen2= addslashes(file_get_contents($_FILES['imagen-2']['tmp_name']));
    $imagen3= addslashes(file_get_contents($_FILES['imagen-3']['tmp_name']));
    $imagen4= addslashes(file_get_contents($_FILES['imagen-4']['tmp_name']));
    $imagen5= addslashes(file_get_contents($_FILES['imagen-5']['tmp_name']));
    $imagen6= addslashes(file_get_contents($_FILES['imagen-6']['tmp_name']));
    $imagen7= addslashes(file_get_contents($_FILES['imagen-7']['tmp_name']));
    $imagen8= addslashes(file_get_contents($_FILES['imagen-8']['tmp_name']));
    $imagen9= addslashes(file_get_contents($_FILES['imagen-9']['tmp_name']));
    $imagen10= addslashes(file_get_contents($_FILES['imagen-10']['tmp_name']));
    $sql= "UPDATE proyectos SET nombre='$nombre', direc='$direct',f_ini='$fec_ini', f_fin='$fec_fin', img_1='$imagen1', img_2='$imagen2', img_3='$imagen3', img_4='$imagen4', img_5='$imagen5', img_6='$imagen6', img_7='$imagen7', img_8='$imagen8', img_9='$imagen9', img_10='$imagen10' WHERE id=$id";
    $query = mysqli_query($con,$sql);
    if($query){
    header ("location: proyectos.php");
    }else{
        echo "<script>alert('Error al Actualizar')</script>";
        include ("upd_pro.php");
    }
?>