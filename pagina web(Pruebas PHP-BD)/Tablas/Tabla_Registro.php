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
        <link rel="stylesheet" href="style_reg.css"/>
        <title>Tablas de empleados</title>

    </head>
</head>
<body>
	<section>
		<form action=Tabla_Registro.php method="POST">

			<div id="inp_fecha1">
				<label > Ingrese la fecha de incio:</label>
				<input type="text" name="fecha1">
			</div>

			<div id="inp_fecha2">
				<label> Ingrese la fecha de termino:</label>
				<input type="text" name="fecha2">
			</div>


			<div class="button" id="btn_buscar">
				<button type="submit" > BUSCAR / VER TODOS LOS REGISTROS </button>
			</div>
		</form>
	</section>

	<section>
		<div>
			<center>
				<table border="2" id="tbl_registros">
					<thead>
						<tr>
							<th>Id Empleado</th>
							<th>Hora de Entrada</th>
							<th>Hora de Salida</th>
							<th>Activo</th>	
						</tr>
					</thead>
					<tbody>
					<?php 

					if(empty($_POST["fecha1"]) && empty($_POST["fecha2"] )){

						include 'conexionBD.php';


						$link=new mysqli($host,$usuario,$contra,$bdname, $port);
						
							$select=mysqli_query($link,"select *from registro");
							while ($row=$select->fetch_assoc()) {
							?>
							<tr>
								<th><?php echo $row['Id_empleado'];?></th>
								<th><?php echo $row['Hora_entrada'];?></th>
								<th><?php echo $row['Hora_salida'];?></th>
								<th><?php echo $row['Activo'];?></th>
											
							</tr>
					 	<?php 
							
						}//fin while
							mysqli_close($link);
						}//fin del if

					else{

					 	$host="localhost";
						$usuario="root";
						$contra="";
						$bdname="proyectocn";


						$link=new mysqli($host,$usuario,$contra,$bdname);
						
$select=mysqli_query($link, "select * from registro where Hora_entrada BETWEEN '".$_POST["fecha1"]."' AND '".$_POST["fecha2"]."'");
						while ($row=$select->fetch_assoc()) {
							?>
							<tr>
								<th><?php echo $row['Id_empleado'];?></th>
								<th><?php echo $row['Hora_entrada'];?></th>
								<th><?php echo $row['Hora_salida'];?></th>
								<th><?php echo $row['Activo'];?></th>
									
							</tr>
					 	<?php 
							
						}//fin while
							mysqli_close($link);
						}//fin del else
					 	echo $_POST["fecha1"];
					 	echo $_POST["fecha2"];
					 	?>
					</tbody>
				</table>
			</center>
		</div>
	</section>
</body>
</html>
