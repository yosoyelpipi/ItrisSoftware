<?php
$contacto = 'mcoste@itris.com.ar';//Destinatario
$mensaje = $_POST["comentarios"];
$asunto ='Android: Nuevo Mensaje desde la App';
 
			$from =  $_POST["mail"];
			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
			$headers .= 'From: '.$from.' <'.$from.'>'."\r\n";
			$headers .= 'Bcc: lcondori@itris.com.ar' . "\r\n";			
			//$headers .= 'Cc: lcondori@itris.com' . "\r\n";
			//$headers .= 'Cc: contacto@masccotasvqr.com' . "\r\n";

if (@!mail($contacto,$asunto, $mensaje, $headers)){ 
echo "Error al enviar.";
}else{
echo "Tu mensaje ha sido enviado con éxito";
}
?>