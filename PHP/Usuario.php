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
		//Obtener ID del empleado
		$Buscar=$_GET['Buscar'];
		$consulta="select * from Usuario WHERE Estatus=1 HAVING Id_empleado LIKE '%$Buscar%';";

        $select=mysqli_query($conexion, $consulta);

        if (mysqli_num_rows($select)>0) {
            while ($row=$select->fetch_assoc()) {
                    $datos["Usuario"][] = $row;
            }
        } 
        echo json_encode($datos);
    }
    
	$conexion->close();
 ?>