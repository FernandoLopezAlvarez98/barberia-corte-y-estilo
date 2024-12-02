<?php

$mail = 'corteyestilo24@gmail.com';
$nombre = 'Fernando';
$mensaje = "hola {$nombre}, esto es un mensaje de prueba";

if(!empty($mail) && !empty($nombre) && !empty($mensaje)){

    $destino = "xfertec@gmail.com";
    $asunto = "Conformación de cita";

    $cuerpo = "
    <html>
        <head>
            <title>Prueba de correo</title>
        </head>
        <body>
            <h1>Correo de: ' .$nombre. ' </h1>
            <p> ' . $mensaje . ' </p>
        </body>
    </html>
    ";


    //Para envio del formato html
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";

    //Dirección de remitente
    $headers .= "From: $nombre <$mail>\r\n";

    //Ruta del mensaje desde origen a destino
    $headers .= "Return-path: $destino\r\n";

    mail($destino,$asunto,$cuerpo,$headers);
    echo "Mensaje enviado";
} else {
    echo "Error al enviar mensaje";
}

?>