<?php
    include ('db.php');
    $con = $conexion ;

    $id=$_REQUEST['id'];
    $nombre=$_POST['nombre'];
    $descr=$_POST['descr'];
    $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
    $sql= "UPDATE servicios SET nombre='$nombre', descr='$descr',imagen='$imagen' WHERE id=$id";
    $query = mysqli_query($con,$sql);
    if($query){
    header ("location: servicios.php");
    }
?>