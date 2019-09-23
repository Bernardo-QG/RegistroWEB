<!DOCTYPE html>
<html>
<head>
	<title>Editar empleado</title>
</head>
<body>
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
	else
	{
		//Obtener ID del empleado
		$idUsuario=$_POST['idUsuario'];
		$consulta="select * from usuario where Id='".$idUsuario."';";
		$resultadoSelect = $conexion->query($consulta);
		if ($resultadoSelect->num_rows > 0) 
		{
    		//Datos obtenidos
    		while($row = $resultadoSelect->fetch_assoc()) 
    		{
        		$nombreUsuario=$row['User_name'];
        		$passwordUsuario=$row['pass'];
        		$permisoUsuario=$row['Permiso'];
    		}
			echo "<form action='guardarCambiosUsuario.php' method='POST'>
			<label>Id de usuario:</label>
			<input type='text' name='idUsuario' value='".$idUsuario."' readonly='readonly'>
			<br>
			<label>Nombre de usuario:</label>
			<input type='text' name='nombreUsuario' value='".$nombreUsuario."'>
			<br>
			<label>Password:</label>
			<input type='text' name='password' value='".$passwordUsuario."'>
			<br>
			<label>Permiso usuario:</label>
			<input type='text' name='permisoUsuario' value='".$permisoUsuario."'>
			<br>
			<input type='submit' name='' value='Guardar Cambios'>
			</form>";
		} 
		else 	
		{
    		echo "0 results";
		}
	}
	$conexion->close();
	?>
</body>
</html>