<?php

    //esto es al correo al que se enviara el mensaje
    $destinatario = '78027@udlacdmx.mx';

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $serivicio = $_POST['serivicio'];
    $unidad = $_POST['unidad'];
    $asunto = $_POST['asunto'];

    $header = "Enviado desde la página de Transporte y Logistica Arenal";
    $mensajeCompleto = $mensaje . "\n Atentamente" . $nombre;


    mail($destinatario, $email, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado exitosamente')</script>";
    echo "<script>setTimeout(\"location.href='index.html'\", 1000)</script>";


?>