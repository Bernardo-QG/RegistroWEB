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
	$nombre=$_POST['nombreEmpleado'];
	$apellidoPaterno=$_POST['ApellidoPaternoEmpleado'];
	$apellidoMaterno=$_POST['ApellidoMaternoEmpleado'];
	$apellidoPaterno=$_POST['ApellidoPaternoEmpleado'];
	$curp=$_POST['CURP'];
	$correo=$_POST['Correo'];
	$puesto=$_POST['Puesto'];

	//Insertar en base de datos
	$consulta="insert into empleado (Nombre, Apellido_paterno, Apellido_materno, Curp, Correo, Puesto, Estatus) values('".$nombre."','".$apellidoPaterno."','".$apellidoMaterno."','".$curp."','".$correo."','".$puesto."',1);";

	//Ejecutar consulta
	if ($conexion->query($consulta) === TRUE) 
	{
    	//echo "New record created successfully";
    	//echo $_POST["nombreEmpleado"];
    	header("Location:" . $_SERVER['HTTP_REFERER']); //la pagina anterior o poner la pagina que tu quieras
		die();

	}
	else 
	{
    	echo "Error: " . $consulta . "<br>" . $conexion->error;
	}
	$conexion->close();
 ?>