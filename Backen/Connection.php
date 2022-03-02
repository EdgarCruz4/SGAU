<?php 
	date_default_timezone_set('America/Mexico_City');
	$servidor="localhost";
	$usuario="root";
	$contrasena="";
	$bd="activities";
    $conexion= mysqli_connect($servidor,$usuario,$contrasena,$bd);
	if(!$conexion)
	{
		die("Conexión fallida");
	}
 ?>
