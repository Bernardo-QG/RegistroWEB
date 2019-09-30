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
    else{   
        //Obtener datos de Form HTML       
        $fecha=$_GET['fecha'];  
        $idEmpleado=$_GET['idEmpleado'];        
        //Insertar en base de datos
        $consulta="select Id_empleado, Hora_entrada, Hora_salida, Activo from Registro where Estatus=1 HAVING Id_empleado LIKE '%$idEmpleado%' AND Hora_entrada LIKE '%$fecha%';";
     
        $select=mysqli_query($conexion, $consulta);

        if (mysqli_num_rows($select)>0) {
            while ($row=$select->fetch_assoc()) {
                    $datos["AllActivos"][] = $row;
            }
        } 
        echo json_encode($datos);
    }
    
	$conexion->close();
 ?>