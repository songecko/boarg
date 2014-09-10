<?php 

header("Content-Type: text/html;charset=utf-8");

$contact = $_POST['contact'];
$email = $contact['email'];

//Envio de email
//$to = "alant@tresepic.com";
$to = "songecko@gmail.com";
$subject = "[BofARG] nuevo suscripto al newsletter";
$body = ' 
<html> 
	<head> 
		<title>BofARG - nuevo suscripto al newsletter</title> 
	</head> 
	<body>  
		<h3>Nuevo suscripto al newsletter</h3>
		<p><b>Email: </b> '.$email.'</p> 
	</body> 
</html>
'; 

//Envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=utf-8\r\n"; 

//Dirección del remitente 
$headers .= "From: ".$email."\r\n"; 

$sended = mail($to, $subject, $body, $headers);

echo $sended;