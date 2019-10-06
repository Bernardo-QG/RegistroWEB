<?php 
	//Variables de conexion
	include 'conexionBD.php';
	//Cadena de conexion
	$conexion=new mysqli($hostname, $username, $password, $dbname, $port);
	if ($conexion->connect_error) 
	{
    	echo "Error: Lo siento, no se pudo conectar al base de datos.";
	}
	else
	{
		$idEmpleado=$_GET['idEmpleado'];
		$nombreUsuario=$_GET['nombreUsuario'];
		$passwordUsuario=$_GET['password'];
		$permisoUsuario=$_GET['permisoUsuario'];
		//Actualizar base de datos
		$consulta="update Usuario set User_name='$nombreUsuario', pass='$passwordUsuario', Permiso='$permisoUsuario' where Id_empleado=$idEmpleado;";
		//Ejecutar consulta
		if ($conexion->query($consulta) === TRUE) 
		{
			echo "Si";
		}
		else 
		{
			echo "No se pudo actualizar registro.";
		}
	}
	$conexion->close();
?>