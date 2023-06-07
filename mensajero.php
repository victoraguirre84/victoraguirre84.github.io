<?php
if(isset($_POST['submit'])) {

	$para = "albertocasanova@aprenderapido.com"; 
	$asunto = "Mensaje desde el sitio de Londres Photostudio";
	$nombre = $_POST['nombre'];
	$correo = $_POST['email'];
	$mensaje = $_POST['mensaje'];

	$cuerpo = " Enviado por: $nombre\n E-Mail: $correo\n $check_msg Mensaje:\n $mensaje\n";

	echo "El mensaje ha sido enviado a $para!";
	mail($para, $asunto, $cuerpo);
	
} else {
	echo "Ha ocurrido un error!";
}
?>
