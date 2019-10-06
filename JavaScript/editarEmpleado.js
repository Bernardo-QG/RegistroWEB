function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });

    return vars;
}



function Empleado(){

    var id = getUrlVars()["id"];
    //alert(id);
    $.get("PHP/Empleado.php?Buscar="+id,function(data){
       
        gct=JSON.parse(data);
        $("#ID").val(gct["Empleado"][0].Id);
        $("#nombre").val(gct["Empleado"][0].Nombre);
        $("#apellidoPaterno").val(gct["Empleado"][0].Apellido_paterno);
        $("#apellidoMaterno").val(gct["Empleado"][0].Apellido_materno);
        $("#curp").val(gct["Empleado"][0].Curp);
        $("#correo").val(gct["Empleado"][0].Correo);
        $("#puesto").val(gct["Empleado"][0].Puesto);
       
    
      });
      
}

function editar_Empleado(){   
   
    if($("#nombre").val()!="" && $("#apellidoPaterno").val()!="" && $("#apellidoMaterno").val()!=""&& $("#curp").val()!="" && $("#correo").val()!=""  && $("#puesto").val()!=""){  

        $.get("PHP/editarEmpleado.php?IdEmpleado="+$("#ID").val()+"&NombreEmpleado="+$("#nombre").val()+"&ApellidoPaternoEmpleado="+$("#apellidoPaterno").val()+"&ApellidoMaternoEmpleado="+$("#apellidoMaterno").val()+"&CURP="+$("#curp").val()+"&Correo="+$("#correo").val()+"&Puesto="+$("#puesto").val(),function(dato){
           
           if(dato=="Si"){
             dnone();
             alert("Accion exitosa");       
             window.open('tablaEmpleados.html','_self');       
           }
           else
           {
             $('#divError').show();
              alert("Accion fallida por que "+dato);              
           }
       
         });
               
     }
     else {
       $('#divError').show();
     }
   }
  
function Cancelar(){
  window.open('tablaEmpleados.html','_self');
}
 function dnone(){
          document.getElementById("divError").style.display="none";
 }