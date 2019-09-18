<?php 
	//Variables de conexion
	$hostname="localhost";
	$username="root";
	$password="";
	$dbname="proyectocn";
	//Cadena de conexion
	$conexion=new mysqli($hostname, $username, $password, $dbname);
	//Probar conexion
	if ($conexion->connect_error) 
	{
    	die("Error: " . $conexion->connect_error);
	}
	//Obtener datos de Form HTML
	$idEmpleado=$_POST['idEmpleado'];
	//Insertar en base de datos
	$consulta="update usuario set Estatus=0 where Id_empleado=".$idEmpleado.";";
	//Ejecutar consulta
	if ($conexion->query($consulta) === TRUE) 
	{
    	//echo "Deleted successfully";
    	header("Location:" . $_SERVER['HTTP_REFERER']); //la pagina anterior o poner la pagina que tu quieras
		die();
	}
	else 
	{
    	echo "Error: " . $consulta . "<br>" . $conexion->error;
	}
/*	$consulta="update empleado set Estatus=0 where Id=".$idEmpleado.";";
	if ($conexion->query($consulta) === TRUE) 
	{
    	echo "Deleted successfully";
	}
	else 
	{
    	echo "Error: " . $consulta . "<br>" . $conexion->error;
	}
*/
	$conexion->close();

 ?>