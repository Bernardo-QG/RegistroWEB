<?php 
	//Variables de conexion
    include 'conexionBD.php';
	//Cadena de conexion
    $conexion=new mysqli($hostname, $username, $password, $dbname,$port);
    //Probar conexion
    if ($conexion->connect_error) 
    {
        die("Error: " . $conexion->connect_error);
    }
    //Obtener datos de Form HTML
    $username=$_GET['user'];
    $password=$_GET['password'];
    //Insertar en base de datos
    $consulta="SELECT * FROM Usuario WHERE Estatus=1 AND User_name='$username' AND pass='$password';";
    $resultado = $conexion->query($consulta);

    //Ejecutar consulta
        if($resultado->num_rows>0)
            echo "Si";            
        else
            echo "No";
    $conexion->close();
?>