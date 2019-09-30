function borrar_Empleado(){   

     if($("#idEmpleado").val()!=""){   
         $.get("PHP/borrarEmpleado.php?idEmpleado="+$("#idEmpleado").val(),function(dato){
            
            if(dato=="Si"){
              dnone();
              alert("Accion exitosa");       
              window.open('http://localhost/RegistroWEB/altausuarios.html','_self');       
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
    function dnone(){
           document.getElementById("divError").style.display="none";
  }
 