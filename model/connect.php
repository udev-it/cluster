<?php

	//echo 'Ejecutar la funcion de conectar a base de datos.<br>';
	$servidor="localhost";
	//$usuario="root";
	$usuario="admcinteroceanic";
//	$contraseña="";
	$contraseña="CinteroceanicoMex2020";
	$bd="interoceanico";
//	$bd="cinteroceanico";

	$conexion=mysqli_connect($servidor, $usuario, $contraseña, $bd);
	$conexion->set_charset("utf8");

	if ($conexion) {
	//	echo ("Conexión Exitosa");
		//mysqli_close($conexion);
	}else{
		//  print("Error de Conexión");
	}
	
//function muestraImagenes(){
	//echo conectar(); //Invocar funcion
//	}

?>