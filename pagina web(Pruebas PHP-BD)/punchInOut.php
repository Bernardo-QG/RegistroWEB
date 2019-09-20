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
	$idEmpleado=$_POST['idEmpleado'];
	//Comprobar si el usuario aun trabaja en la empresa
	$consultaChequeo="select * from empleado where Id=".$idEmpleado.";";
	$resultadoChequeo=$conexion->query($consultaChequeo);
	if ($resultadoChequeo->num_rows>0) 
	{
    	$row = $resultadoChequeo->fetch_assoc();
        if ($row["Estatus"]==1) 
        {
        	echo "".$row["Estatus"]."";
        	//Insertar en base de datos
			$consulta="select * from registro where Id_empleado=".$idEmpleado." and Hora_salida='0000-00-00 00:00:00';";
			//Resultado
			$resultado=$conexion->query($consulta);
			//Ejecutar consulta
			if ($resultado->num_rows>0) 
			{
    			$consultaInsercion="update registro set Hora_salida=NOW(), Activo=0 where Id_empleado=".$idEmpleado." and Hora_salida='0000-00-00 00:00:00';";
    			if ($conexion->query($consultaInsercion) === TRUE) 
				{
    				echo "Punched out";
				}
				else 
				{
    				echo "Error: " . $consulta . "<br>" . $conexion->error;
				}
			}
			else 
			{
    			$consultaInsercion="insert into registro (Id_empleado, Hora_entrada, Hora_salida, Activo, Estatus) values(".$idEmpleado.",NOW(),'0000-00-00 00:00:00',1,1);";
    			if ($conexion->query($consultaInsercion) === TRUE) 
				{
    				echo "Punched In";
				}
				else 
				{
    				echo "Error: " . $consulta . "<br>" . $conexion->error;
				}
			}
        }
	}
	else
	{
		echo "Esa persona ya no es empleado de la empresa";
	}
	$conexion->close();
 ?>