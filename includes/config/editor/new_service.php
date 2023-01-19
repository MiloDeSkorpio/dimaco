<?php
include('db.php');
    if(!empty($_POST["servicio"])){
        if(empty($_POST["nombre"]) or empty($_POST["descr"]) or empty($_POST["imagen"])) {
            echo "<script>alert('Llena todos los campos')</script>";
            include ("servicios.php");
        }else{
            $nombre=$_POST['nombre'];
            $desc=$_POST['descr'];
            $imagen= addslashes(file_get_contents($_FILES['imagen']['tmp_name']));
            $sql= $conexion->query("INSERT INTO servicios (nombre,descr,imagen) VALUES ('$nombre','$desc','$imagen')");
                if($sql){
                    echo "<script>alert('Servicio Registrado')</script>";
                    include ("servicios.php");
                }else{
                    echo "<script>alert('Hubo un error')</script>";
                    include ("servicios.php");
                }
        }        
    }
?>