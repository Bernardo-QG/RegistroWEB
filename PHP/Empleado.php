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
        $Buscar=$_GET['Buscar'];        
        //Insertar en base de datos
        $consulta="select * from Empleado WHERE Estatus=1 HAVING Id LIKE '%$Buscar%';";

        $select=mysqli_query($conexion, $consulta);

        if (mysqli_num_rows($select)>0) {
            while ($row=$select->fetch_assoc()) {
                    $datos["Empleado"][] = $row;
            }
            echo json_encode($datos);
        } 
        else{
            echo "No";
        }
        
    }
    
	$conexion->close();
 ?>