<?php
$nombre = $_POST['name'];
$apellido = $_POST['ape'];
$mail = $_POST['email'];
$dni = $_POST['dni'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'fedee.msn@hotmail.com';
$asunto = 'Mensaje';

mail($para, $asunto, utf8_decode($mensaje), $header);

/*header("Location:marqueteria.html");*/
echo '<script language="javascript">alert("Mensaje enviado correctamente!");window.location.href="marqueteria.html"</script>';
?>