function alta_Empleado(){   
   
    if($("#nombre").val()!="" && $("#apellidoPaterno").val()!="" && $("#apellidoMaterno").val()!=""&& $("#curp").val()!="" && $("#correo").val()!=""){  

        $.get("PHP/altaEmpleados.php?NombreEmpleado="+$("#nombre").val()+"&ApellidoPaternoEmpleado="+$("#apellidoPaterno").val()+"&ApellidoMaternoEmpleado="+$("#apellidoMaterno").val()+"&CURP="+$("#curp").val()+"&Correo="+$("#correo").val()+"&Puesto="+$("#puesto").val(),function(dato){
           
           if(dato=="Si"){
             dnone();
             alert("Accion exitosa");       
             window.open('altaEmpleados.html','_self');       
           }
           else
           {
             $('#divError').show();
             alert("Accion fallida "+dato);              
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

 function ini(){    
  $.get("PHP/Sesion.php?funcion=getlog&permiso=",function(result){ 
      if(result!="Dios"){          
          window.open('tablaEmpleados.html','_self'); 
      }
  });    
}