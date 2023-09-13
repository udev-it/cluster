<?php
require("../model/connect.php");
require 'PHPMailer/PHPMailerAutoload.php';

if (isset($_POST["nombre"])) {
    $institucion = $_POST["institucion"];
    $email = $_POST["email"];
    $redessocial1 = $_POST["redessociales1"];
    $telefono = $_POST["telefono"];
    $redessocial2 = $_POST["redessociales2"];
    $comentario = $_POST["comentario"];
    $nombre = $_POST["nombre"];
    echo $nombre;

    
    // Creamos la consulta 
   $sql = " INSERT INTO contacto(id, institucion, nombre, correo, redessociales1, telefono, redessociales2, asunto)";
    $sql.= "VALUES (null,'".$institucion."', '".$nombre."', '".$email."', '".$redessocial1."', '".$telefono."', '".$redessocial2."', '".$comentario."')";
    // enviamos la consulta
    mysqli_query($conexion,$sql);


   $mail = new PHPMailer(true);
	
	$mail->CharSet = 'UTF-8';
	$mail->isSMTP(); // Set mailer to use SMTP
	$mail->Host = 'a2plcpnl0233.prod.iad2.secureserver.net'; // Specify main and backup SMTP servers
	$mail->SMTPAuth = true; // Enable SMTP authentication
	$mail->Username = 'cluster@clusterinteroceanico.com'; // SMTP username
	$mail->Password = 'Clu$ter2020#'; // SMTP password
	$mail->SMTPSecure = 'ssl'; // Enable TLS encryption, ssl also accepted
	$mail->Port = 465; // TCP port to connect to

	$mail->setFrom($email, $nombre);
	$mail->AddReplyTo($email, $nombre);
	
	$mail->addAddress('contacto@clusterinteroceanico.com', 'Contacto Clusterinteroceanico');     

	$mail->Subject = $institucion;
	$mail->Body    = $comentario;
	$mail->send();

	/*if(!$mail->send()) {
	    echo 'Error. Mensaje no enviado, intentelo de nuevo';
	    //echo 'Error del mensaje: ' . $mail->ErrorInfo;
	} else {
	    echo 'Su mensaje se ha enviado correctamente';  
	}*/

	


    echo'<script type="text/javascript">
        alert("Datos Enviados Correctamente");
        window.location.href="../index.php";
        </script>';
    
}

?>