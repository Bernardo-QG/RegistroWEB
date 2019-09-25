<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <head >
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <!-- <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"/>-->
        <meta name="description" conctent="Tabla de empleados"/>
        <meta name="keyword"  content="html 5, cc3, javascript"/>
        <link rel="stylesheet" href="style.css"/>
        <title>Tablas de empleados</title>

    </head>
</head>
<body>
	<section>
		<form action=Tabla.php method="POST">
			<div>
				<select name="select" required>
					<option selected>Todos los empleados</option>
					<option>Nombre empelado</option>
					<option>ID empleado</option>
				</select>
			</div>
			<div>
				<input type="text" name="opcion">
			</div>
			<div class="button">
				<button ty="submit"> BUSCAR </button>
			</div>
		</form>
	</section>

	<section>
		<div>
			<center>
				<table border="2" id="tbl_empleados">
					<thead>
						<tr>
							<th>Id</th>
							<th>Nombre</th>
							<th>Apellido Paterno</th>
							<th>Apellido Materno</th>
							<th>Curp</th>
							<th>Correo</th>
							<th>Puesto</th>
							<th>Estatus</th>
						</tr>
					</thead>
					<tbody>
					<?php 

					if((empty($_POST["opcion"])) && $_POST["select"]=="Todos los empleados" ){

						include 'conexionBD.php';


						$link=new mysqli($host,$usuario,$contra,$bdname, $port);
						
							$select=mysqli_query($link, "select *from empleado where Estatus=1");
							while ($row=$select->fetch_assoc()) {
							?>
							<tr>
								<th><?php echo $row['Id'];?></th>
								<th><?php echo $row['Nombre'];?></th>
								<th><?php echo $row['Apellido_paterno'];?></th>
								<th><?php echo $row['Apellido_materno'];?></th>
								<th><?php echo $row['Curp'];?></th>
								<th><?php echo $row['Correo'];?></th>
								<th><?php echo $row['Puesto'];?></th>
								<th><?php echo $row['Estatus'];?></th>
							</tr>
					 	<?php 
							
						}//fin while
							mysqli_close($link);
						}//fin del if

					 	?>
					</tbody>
				</table>
			</center>
		</div>
	</section>
</body>
</html>
