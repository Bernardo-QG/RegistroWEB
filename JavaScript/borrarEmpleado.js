function borrar_Empleado(){   

     if($("#idEmpleado").val()!=""){   
         $.get("PHP/borrarEmpleado.php?idEmpleado="+$("#idEmpleado").val(),function(dato){
            
            if(dato=="Si"){
              dnone();
              alert("Accion exitosa");       
              window.open('altausuarios.html','_self');       
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
    function dnone(){
           document.getElementById("divError").style.display="none";
  }
 