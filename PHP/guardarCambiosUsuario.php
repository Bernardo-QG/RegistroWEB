<?php
	function alert() 
    {
    	//Cambia la direccion cuando lo hagas publico
   		echo "<script type='text/javascript'>alert('Guardado exitosamente'); window.location.href='editarUsuario.html';</script>";
	}
	
	//Variables de conexion
	include 'conexionBD.php';
	//Cadena de conexion
	$conexion=new mysqli($hostname, $username, $password, $dbname, $port);
	//Probar conexion
	if ($conexion->connect_error) 
	{
    	die("Error: " . $conexion->connect_error);
	}
	else
	{
		$idUsuario=$_POST['idUsuario'];
		$nombreUsuario=$_POST['nombreUsuario'];
		$passwordUsuario=$_POST['password'];
		$permisoUsuario=$_POST['permisoUsuario'];
		//Actualizar base de datos
		$consulta="update usuario set User_name='".$nombreUsuario."', pass='".$passwordUsuario."', Permiso='".$permisoUsuario."' where Id=".$idUsuario.";";
		//Ejecutar consulta
		if ($conexion->query($consulta) === TRUE) 
		{
    		alert();
		}
		else 
		{
    		echo "Error: " . $consulta . "<br>" . $conexion->error;
		}
	}
	$conexion->close();
?>