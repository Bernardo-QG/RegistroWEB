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
	$nombre=$_GET['NombreEmpleado'];
	$apellidoPaterno=$_GET['ApellidoPaternoEmpleado'];
	$apellidoMaterno=$_GET['ApellidoMaternoEmpleado'];
	$curp=$_GET['CURP'];
	$correo=$_GET['Correo'];
	$puesto=$_GET['Puesto'];

	//Insertar en base de datos
	$consulta="insert into Empleado (Nombre, Apellido_paterno, Apellido_materno, Curp, Correo, Puesto, Estatus) values('".$nombre."','".$apellidoPaterno."','".$apellidoMaterno."','".$curp."','".$correo."','".$puesto."',1);";

	//Ejecutar consulta
	if ($conexion->query($consulta) === TRUE) 
	{
    	echo "Si";
    	
	}
	else 
	{
    	echo "Error: No se pudo agregar registro.";
	}
}
	$conexion->close();
 ?>