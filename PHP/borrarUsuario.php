<?php 
	//Variables de conexion
	include 'conexionBD.php';
	//Cadena de conexion
	$conexion=new mysqli($hostname, $username, $password, $dbname, $port);
	//Probar conexion
	if ($conexion->connect_error) 
	{
    	echo "Error: Lo siento, no se pudo conectar al base de datos.";
	}
	else{
	//Obtener datos de Form HTML
	$idUsuario=$_GET['idUsuario'];
	//Insertar en base de datos
	$consulta="update Usuario set Estatus=0 where Id_empleado=".$idUsuario.";";
	//Ejecutar consulta
	if ($conexion->query($consulta) === TRUE) 
	{
    	echo "Si";
    
	}
	else 
	{
    	echo "No se pudo eliminar registro.";
	}
	}
	$conexion->close();

 ?>