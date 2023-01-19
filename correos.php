<?php
    $destino = "constructora@scdimaco.com";

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $mensajeCompleto ="\nAtentamente: ".$nombre."\nEmail: ".$email."\nTelefono: ".$telefono."\nMensaje: ".$mensaje;
    
    $mail = @mail($destino, $asunto, $mensajeCompleto);
    echo "<script>alert('Correo Enviado Exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='../../index.php'\", 500)</script>"; 

?>