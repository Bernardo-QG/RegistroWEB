<?php 
	//Variables de conexion
    include 'conexionBD.php';
	//Cadena de conexion
	$con = mysqli_connect($hostname, $username, $password, $dbname,$port);
 
    if(mysqli_connect_errno()){
        echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
    }
    else{
       
        $username=$_GET['user'];
        $password=$_GET['password'];
        
        $sql = "SELECT * FROM Usuario WHERE User_name='$username' AND pass='$password'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result)>0) {
            echo "Si";
            
        }       
        else
            echo "No";
        mysqli_close($con);
    }
?>