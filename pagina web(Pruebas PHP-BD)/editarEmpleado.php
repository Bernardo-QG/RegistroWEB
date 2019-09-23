<!DOCTYPE html>
<html>
<head>
	<title>Editar empleado</title>
</head>
<body>
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
		//Obtener ID del empleado
		$idEmpleado=$_POST['idEmpleado'];
		$consulta="select * from empleado where Id='".$idEmpleado."';";
		$resultadoSelect = $conexion->query($consulta);
		if ($resultadoSelect->num_rows > 0) 
		{
    		//Datos obtenidos
    		while($row = $resultadoSelect->fetch_assoc()) 
    		{
        		$nombreEmpleado=$row['Nombre'];
        		$ApellidoPaternoEmpleado=$row['Apellido_paterno'];
        		$ApellidoMaternoEmpleado=$row['Apellido_materno'];
        		$CURP=$row['Curp'];
        		$email=$row['Correo'];
        		$Puesto=$row['Puesto'];
    		}
		} 
		else 	
		{
    		echo "0 results";
		}
		echo "<form action='guardarCambiosEmpleado.php' method='POST'>
			<label>Id de empleado:</label>
			<input type='text' name='idEmpleado' value='".$idEmpleado."' readonly='readonly'>
			<br>
			<label>Nombre empleado:</label>
			<input type='text' name='nombreEmpleado' value='".$nombreEmpleado."'>
			<br>
			<label>Apellido paterno:</label>
			<input type='text' name='ApellidoPaternoEmpleado' value='".$ApellidoPaternoEmpleado."'>
			<br>
			<label>Apellido materno:</label>
			<input type='text' name='ApellidoMaternoEmpleado' value='".$ApellidoMaternoEmpleado."'>
			<br>
			<label>CURP:</label>
			<input type='text' name='CURP' value='".$CURP."'>
			<br>
			<label>Correo electronico:</label>
			<input type='text' name='Correo' value='".$email."'>
			<br>
			<label>Puesto:</label>
			<input type='text' name='Puesto' value='".$Puesto."'>
			<br>
			<input type='submit' name='' value='Guardar Cambios'>
		</form>";
	}
	$conexion->close();
	?>
</body>
</html>