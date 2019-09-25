function enviarDatosEmpleado(){

	var nombre = $('#nombre').val();
	var ap = $('#apellidoPaterno').val();
	var am = $('#apellidoMaterno').val();
	var curp = $('#curp').val();
	var correo = $('#correo').val();
	var puesto = $('#puesto').val();


	if(nombre === ''){
		alert("El campo Nombre está vacío!");
		return false;
	}
	else if(ap === ''){
		alert("El campo Apellido Paterno está vacío!");
		return false;
	}
	else if(am === ''){
		alert("El campo Apellido Materno está vacío!");
		return false;
	}
	else if(curp === ''){
		alert("El campo CURP está vacío!");
		return false;
	}
	else if(correo === ''){
		alert("El campo Correo está vacío!");
		return false;
	}
	else if(puesto === ''){
		alert("El campo Puesto está vacío!");
		return false;
	}
	else{
		alert("El empleado se registró exitosamente!");
	}

}
function enviarDatosUsuario(){

	var id = $('#id_empleado').val();
	var nombre = $('#nombreUsuario').val();
	var contra = $('#contrasena').val();
	var privilegio = $('#privilegios').val();

	if(id === ''){
		alert("El campo Id Empleado está vacío!");
		return false;
	}
	else if(nombre === ''){
		alert("El campo Nombre de Usuario está vacío!");
		return false;
	}
	else if(contra === ''){
		alert("El campo Contraseña está vacío!");
		return false;
	}
	else if(privilegio === ''){
		alert("El campo Privilegios está vacío!");
		return false;
	}
	else{
		alert("El usuario se registró exitosamente!");
	}

}
function borrarEmpleado(){
			
	var algo = $('#idEmpleado').val();
	if(algo1 === ''){
		alert("El campo Id Empleado está vacío!");
		return false;
	}
	else{
		alert("El empleado se eliminó exitosamente!");
	}

}