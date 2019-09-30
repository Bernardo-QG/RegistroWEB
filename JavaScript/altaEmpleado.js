function alta_Empleado(){   
   
    if($("#nombre").val()!="" && $("#apellidoPaterno").val()!="" && $("#apellidoMaterno").val()!=""&& $("#curp").val()!="" && $("#correo").val()!=""){  

        $.get("PHP/altaEmpleados.php?NombreEmpleado="+$("#nombre").val()+"&ApellidoPaternoEmpleado="+$("#apellidoPaterno").val()+"&ApellidoMaternoEmpleado="+$("#apellidoMaterno").val()+"&CURP="+$("#curp").val()+"&Correo="+$("#correo").val()+"&Puesto="+$("#puesto").val(),function(dato){
           
           if(dato=="Si"){
             dnone();
             alert("Accion exitosa");       
             window.open('altaempleados.html','_self');       
           }
           else
           {
             $('#divError').show();
              alert("Insersion fallida por que "+dato);              
           }
       
         });
               
     }
     else {
       $('#divError').show();
     }
   }
  
function Canselar(){
  window.open('tablaEmpleados.html','_self');
}
 function dnone(){
          document.getElementById("divError").style.display="none";
 }