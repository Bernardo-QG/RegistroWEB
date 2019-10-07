function alta_Usuario(){   
    
    if($("#idEmpleado").val()!="" && $("#username").val()!="" && $("#contrasena").val()!=""&& $("#privilegios").val()!=""){  

        $.get("PHP/altaUsuarios.php?idEmpleado="+$("#idEmpleado").val()+"&Username="+$("#username").val()+"&Contrasena="+$("#contrasena").val()+"&Privilegios="+$("#privilegios").val(),function(dato){
           
           if(dato=="Si"){
             dnone();
             alert("Accion exitosa");       
             window.open('tablaEmpleados.html','_self');       
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