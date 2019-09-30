function Empleados(){
    $('#tbodyDatos').empty();
    $.get("PHP/Empleados.php?Buscar="+$("#txtBuscar").val(),function(data){
       //alert("Get");
        gct=JSON.parse(data);
        //alert(gct);
        for(var i=0; i<gct["AllEmpleados"].length; i++){
            //alert("Dato");
            $('#empleados > tbody:last-child').append(' '
            +'<tr><td >'+gct["AllEmpleados"][i].Identificador+'</td>'
            +'<td >'+gct["AllEmpleados"][i].Nombre+'</td>'
            +'<td >'+gct["AllEmpleados"][i].Curp+'</td>'
            +'<td >'+gct["AllEmpleados"][i].Correo+'</td>'
            +'<td >'+gct["AllEmpleados"][i].Puesto+'</td>'
            +'<td style="width:280">'
            +'<button onclick="Actualizar('+gct["AllEmpleados"][i].Identificador+')" type="button" class="btn btn-info"><i class="fas fa-edit"></i></button>'
            +'&nbsp;'
            +'<button onclick="NuevoUsuario('+gct["AllEmpleados"][i].Identificador+')" type="button"  class="btn btn-info"><i class="fas fa-user"></i></button>'
            +'&nbsp;'
            +'<button onclick="borrar_Empleados('+gct["AllEmpleados"][i].Identificador+')" type="button" class="btn btn-info"><i class="fas fa-trash-alt""></i></button>'            
            +'</td></tr>');
                
           
        };
    
      });
      
}



function borrar_Empleados(id){

    $.get("PHP/borrarEmpleado.php?idEmpleado="+id,function(dato){
           
        if(dato=="Si"){
       
          alert("Accion exitosa");       
          Empleados();   
        }
        else
        {
        
           alert("Accion fallida por que "+dato);              
        }
    
      });
            
}
function Actualizar(id){
  window.open('http://localhost/RegistroWEB/editarEmpleado.html?id='+id,'_self');
}
function Nuevo(){
  window.open('http://localhost/RegistroWEB/altaEmpleados.html','_self');
}
function NuevoUsuario(id){
  window.open('http://localhost/RegistroWEB/altaUsuarios.html?id='+id,'_self');
}