<?php 
	//Variables de conexion
	include 'conexionBD.php';
	//Cadena de conexion
	$conexion=new mysqli($hostname, $username, $password, $dbname, $port);
	//Probar conexion
	if ($conexion->connect_error) 
	{
    	die("Error: " . $conexion->connect_error);
	}
	//Obtener datos de Form HTML
	$idEmpleado=$_GET['idEmpleado'];
	//Insertar en base de datos
	$consulta="update Empleado set Estatus=0 where Id=".$idEmpleado.";";
	//Ejecutar consulta
	if ($conexion->query($consulta) === TRUE) 
	{
    	echo "Si";
    
	}
	else 
	{
    	echo "Error: " . $consulta . "<br>" . $conexion->error;
	}

	$conexion->close();

 ?>