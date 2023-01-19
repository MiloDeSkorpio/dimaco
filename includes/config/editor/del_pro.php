<?php 
    include ('db.php');
    $con = $conexion ;
    $id=$_GET['id'];
    $sql = "DELETE FROM proyectos WHERE id='$id'";
    $query = mysqli_query($con,$sql);
    if($query){
    header ("location: proyectos.php");
    }
    

?>