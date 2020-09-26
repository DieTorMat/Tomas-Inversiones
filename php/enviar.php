<?php
    $destino= "dannydtm.777@gmail.com";
    $nombre = $_Post["nombre"]; 
    $correo = $_Post["correo"]; 
    $telefono = $_Post["telefono"]; 
    $mensaje = $_Post["mensaje"];
    $contenido = "Nombre: " . $nombre . "\nCorreo: " .$correo . "\nTeléfono: " . $telefono . "\nMensaje: " .$mensaje;
    mail($destino,"Contacto", $contenido);
    header("Location:gracias.html");
?> 