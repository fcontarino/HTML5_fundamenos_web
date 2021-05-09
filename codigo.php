<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$edad = $_POST['edad'];
$comentarios = $_POST['comentarios'];
$servicio = $_POST['servicio'];
$to = 'facontarino@gmail.com';
$email_subject = "Nuevo mensaje: de la web";
$email_body = "Haz recibido un nuevo mensaje. \n <strong>Nombre:</strong> $nombre \n Correo:
$email
\n <strong>Edad:</strong> $edad \n Mensaje o consulta: \n $comentarios \n Consulta por el siguiente
servicio: $servicio \n";
$headers = "From: $email";
mail($to, $email_subject, $email_body, $headers);
echo 'Pronto nos estaremos comunicando con usted!'
?>