function Empleados(){
    $('#tbodyDatos').empty();
    $.get("PHP/Empleados.php?Buscar="+$("#txtBuscar").val(),function(data){
        if(data!="No"){
        gct=JSON.parse(data);     
        for(var i=0; i<gct["AllEmpleados"].length; i++){
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
           
        }
    
      }
      });
      
}



function borrar_Empleados(id){

  $.get("PHP/Sesion.php?funcion=getlog&permiso=",function(result){ 
    if(result!="Dios" ){          
        alert("Lo siento, no tiene permitido borrar.");
    }
    else
    {
      borrar(id);

    }
});    
                 
}

function borrar(id){

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
  window.open('editarEmpleado.html?id='+id,'_self');
}
function Nuevo(){
  window.open('altaEmpleados.html','_self');
}
function NuevoUsuario(id){
  window.open('altaUsuarios.html?id='+id,'_self');
}

function ini(){    
 
  $.get("PHP/Sesion.php?funcion=getlog&permiso=",function(result){ 
      if(result=="Mortal" || result=="0" ){          
          window.open('inicio.html','_self'); 
      }
  });    
}