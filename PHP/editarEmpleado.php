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
	else
	{
		$idEmpleado=$_GET['IdEmpleado'];
		$nombreEmpleado=$_GET['NombreEmpleado'];
		$apellidoPaternoEmpleado=$_GET['ApellidoPaternoEmpleado'];
		$apellidoMaternoEmpleado=$_GET['ApellidoMaternoEmpleado'];
		$curpEmpleado=$_GET['CURP'];
		$correoEmpleado=$_GET['Correo'];
		$puestoEmpleado=$_GET['Puesto'];
		//Insertar en base de datos
		$consulta="update Empleado set Nombre='$nombreEmpleado', Apellido_paterno='$apellidoPaternoEmpleado', Apellido_materno='$apellidoMaternoEmpleado', Curp='$curpEmpleado', Correo='$correoEmpleado', Puesto='$puestoEmpleado' where Id=$idEmpleado;";
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