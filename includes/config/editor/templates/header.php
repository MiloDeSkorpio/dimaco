<?php 
    session_start();
    $usuario = $_SESSION['usuario'];
    if(!isset($usuario)){
    echo "<script>alert('Acceso Denegado')</script>";
    header("location:home.php");
    }else {
                    
    }
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
    <title>Dimaco</title>
</head>
<body class="dark-mode">
<div class="bg"></div>
<div class="bg bg2"></div>
<div class="bg bg3"></div>
    <header class="header sombra">
    <div class="usser">
        <p>Bienvenido: <?= $usuario ?></p>
        </div>
        <div class="logo">
            <a href="/includes/config/editor/editor.php"><img src="/build/img/logo_dim.png" alt="logo dimaco"></a>
        </div>

        <div class="menu">
            <div class="options">
                <a href="/includes/config/editor/servicios.php">
                    <div class="option">
                        <p>Servicios</p>
                    </div>
                </a>
                <a href="/includes/config/editor/proyectos.php">
                    <div class="option">
                        
                        <p>Proyectos</p>
                    </div>
                </a>
                <a href="/includes/config/editor/close.php">
                    <div class="option">
                    <p>Salir</p>
                    </div>
                </a>
            </div>
        </div> <!-- .menu -->
        <div class="icon_menu">
            <i class="fa-solid fa-bars"></i>
        </div>
    </header>