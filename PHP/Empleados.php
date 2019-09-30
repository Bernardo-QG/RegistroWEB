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
        $Buscar=$_GET['Buscar'];        
        //Insertar en base de datos
        $consulta="select Id as Identificador, CONCAT(Nombre,' ',Apellido_paterno,' ',Apellido_materno) as Nombre, Curp, Correo, Puesto from Empleado WHERE Estatus=1 HAVING Identificador LIKE '%$Buscar%' OR Nombre LIKE '%$Buscar%' OR Puesto LIKE '%$Buscar%' ;";

        $select=mysqli_query($conexion, $consulta);

        if (mysqli_num_rows($select)>0) {
            while ($row=$select->fetch_assoc()) {
                    $datos["AllEmpleados"][] = $row;
            }
        } 
        echo json_encode($datos);
    }
    
	$conexion->close();
 ?>