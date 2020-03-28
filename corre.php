<?php
$nombre=$_POST['nombre'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
echo $nombre."ha dicho";
mail('marcodiaz171090007@gmail.com',utf8_decode($nombre));
header("Location:index.html");
?>