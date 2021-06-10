<?php
$name = $_POST['Name'];
$mail = $_POST['Email'];
$message = $_POST['Content'];
$addressee = 'ivancadena98@outlook.com';
$topic = 'HOGO Cliente';

$headers .=  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
$header .= 'Enviado desde la pagina de HOGO';

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Mensaje: " . $_POST['Content'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'ivancadena98@outlook.com';

mail($addressee, $topic,$message, $header);
echo "<script>alert('enviado')</script>";
echo "<script>setTimeout(\"location.href='index.html'\",1000)</script>";
?>