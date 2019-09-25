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
	else
	{
		$idEmpleado=$_POST['idEmpleado'];
		$nombreEmpleado=$_POST['nombreEmpleado'];
		$apellidoPaternoEmpleado=$_POST['ApellidoPaternoEmpleado'];
		$apellidoMaternoEmpleado=$_POST['ApellidoMaternoEmpleado'];
		$curpEmpleado=$_POST['CURP'];
		$correoEmpleado=$_POST['Correo'];
		$puestoEmpleado=$_POST['Puesto'];
		//Insertar en base de datos
		$consulta="update empleado set Nombre='".$nombreEmpleado."', Apellido_paterno='".$apellidoPaternoEmpleado."', Apellido_materno='".$apellidoMaternoEmpleado."', Curp='".$curpEmpleado."', Correo='".$correoEmpleado."', Puesto='".$puestoEmpleado."' where Id=".$idEmpleado.";";
		//Ejecutar consulta
		if ($conexion->query($consulta) === TRUE) 
		{
    		echo "Guardado exitosamente";
		}
		else 
		{
    		echo "Error: " . $consulta . "<br>" . $conexion->error;
		}
	}
	$conexion->close();
?>