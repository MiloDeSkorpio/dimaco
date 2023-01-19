<?php
    include('db.php');
    session_start();
    if(!empty($_POST["login"])){
        if(empty($_POST["usuario"]) or empty($_POST["password"])) {
            echo "<script>alert('Llena todos los campos')</script>";
            include ("home.php");
        }else{
            $usuario=$_POST['usuario'];
            $password=$_POST['password'];
            $cons = "SELECT * FROM users where nombre = '$usuario' and password = '$password'";
            $res = mysqli_query( $conexion,$cons);
            $filas =  mysqli_num_rows($res);
            if($filas) {
                $_SESSION['usuario']=$usuario;
                header("location:editor.php");
            }else {
                include ("home.php");
                echo "<script>alert('Registro Invalido')</script>";
            }
            mysqli_free_result($res);
            mysqli_close($conexion);
        }        
    }
 
?> 