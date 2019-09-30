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
	$id=$_GET['idEmpleado'];
	$usuario=$_GET['Username'];
	$contrasena=$_GET['Contrasena'];
	$privilegios=$_GET['Privilegios'];
	//Insertar en base de datos
	$consulta="insert into Usuario (Id_empleado, User_name, pass, Permiso, Estatus) values(".$id.",'".$usuario."','".$contrasena."','".$privilegios."',1);";
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