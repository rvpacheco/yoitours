<?php

	/* Recepcionamos los datos enviados asincr�nicamente */
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$asunto = $_POST['asunto'];
	$mensaje = $_POST['mensaje'];
	
	/* Definimos el correo donde enviaremos el mensaje y el asunto */
	
	$destino = "info@yoiecotours.com ";
	$destino2 = "yoitours@hotmail.com";

	// $destino = "michaelschober95@gmail.com";
  	// $destino2 = "michaelschober95@gmail.com";
	
	$asunto = $nombre;
	
	/* Definimos el formato del mensaje a enviar */
	$cuerpo = "<strong>Nombre: </strong>".$nombre."<br />
			   <strong>Correo: </strong>".$correo."<br />
			   <strong>Asunto: </strong>".$asunto."<br />
			   <strong>Mensaje: </strong>".$mensaje;
	
	/* Definimos las cabeceras del mensaje */
	
	$cabecera = "MIME-Version: 1.0\r\n";
	$cabecera .= "Content-type:text/html; charset=iso-8859-1\r\n";
	$cabecera .= "From: ".$nombre." <$correo>\r\n";
	$cabecera .= "Reply-to: $correo\r\n";
	$cabecera .= "Cc: $correo\r\n";
	mail($destino2, $asunto, $cuerpo, $cabecera);

	/* Enviamos v�a correo, devolviendo un mensaje en caso de �xito o falla */ 
	
	if(mail($destino, $asunto, $cuerpo, $cabecera)) {
		echo 'Your message has been sent.';
		
	}
	else {
		echo 'Unable to send the message. Try again';
	}
	
	
	
?>