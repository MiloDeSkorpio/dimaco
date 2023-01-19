<?php 
    include ('db.php');
    $con = $conexion ;
    $id=$_GET['id'];
    $sql = "DELETE FROM servicios WHERE id='$id'";
    $query = mysqli_query($con,$sql);
    if($query){
    header ("location: servicios.php");
    }
    

?>