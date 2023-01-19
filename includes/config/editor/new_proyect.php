<?php
include('db.php');
    if(!empty($_POST["pro"])){
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
            $sql= $conexion->query("INSERT INTO proyectos (nombre,direc,f_ini,f_fin,img_1,img_2,img_3,img_4,img_5,img_6,img_7,img_8,img_9,img_10) VALUES ('$nombre','$direct','$fec_ini','$fec_fin','$imagen1','$imagen2','$imagen3','$imagen4','$imagen5','$imagen6','$imagen7','$imagen8','$imagen9','$imagen10')");
            if($sql==1){
                echo "<script>alert('Proyecto Registrado')</script>";
                include ("proyectos.php");
            }else{
                echo "<script>alert('Hubo un error')</script>";
                include ("proyectos.php");
            }
        } 
?>