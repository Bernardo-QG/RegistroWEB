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
	$id=$_POST['idEmpleado'];
	$usuario=$_POST['Username'];
	$contrasena=$_POST['Contrasena'];
	$privilegios=$_POST['Privilegios'];
	//Insertar en base de datos
	$consulta="insert into usuario (Id_empleado, User_name, pass, Permiso, Estatus) values(".$id.",'".$usuario."','".$contrasena."','".$privilegios."',1);";
	//Ejecutar consulta
	if ($conexion->query($consulta) === TRUE) 
	{
    	//echo "New record created successfully";
    	header("Location:" . $_SERVER['HTTP_REFERER']);
		die();
	}
	else 
	{
    	echo "Error: " . $consulta . "<br>" . $conexion->error;
	}
	$conexion->close();
 ?>