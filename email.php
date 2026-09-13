<?php 
 include('conexion.php');
 $emailPersonal=$_GET["emailPersonal"];


$fecha = date('d-m-Y h:i:s a', time());
$destinatario = "davidjra587@gmail.com"; 
$asunto = "Recuperación de Contraseña"; 




$cuerpo = ' 
<html> 
<head> 
   <title>Escuela Tecnica</title> 
</head> 
<body> 
<img src="" alt="" class="powe" width="200">

<h1>Recuperación de Clave</h1> 
<p> 
<b>El usuario '.$emailPersonal.' ha realizado la Solicitud de Recuperación de Clave. </b>
<br>
Fecha: '.$fecha.'
<br> 
Verificar y Cambiar Contraseña
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Escuela Tecnica <davidjra587@gmail.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
$headers .= "Reply-To: davidjra587@gmail.com\r\n"; 

//ruta del mensaje desde origen a destino 
$headers .= "Return-path: davidjra587@gmail.com\r\n"; 

//direcciones que recibián copia 
$headers .= "Cc: davidjra587@gmail.com\r\n"; 


mail($destinatario,$asunto,$cuerpo,$headers) ;

echo "<script>window.location='login.php'</script>";
?>