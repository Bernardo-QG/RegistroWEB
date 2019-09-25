/* Login, Inicio */
function login(){
    
   var contador=0;
    alert("Entra");
     if($("#uname").val()!="" && $("#upassword").val()!=""){     
        
        $.get("PHP/login.php?user="+$("#uname").val()+"&password="+$("#upassword").val(),function(dato){
           
           if(dato=="Si"){
             dnone();
             alert("Bienvenido");       
             window.open('http://localhost/RegistroWEB/altaempleados.html','_self');       
           }
           else
           {
             $('#divName').show();
              alert("No eres Bienvenido por que "+dato);
              
           }

       
         });
               
     }
     else {
       $('#divName').show();
     }
   }
   function dnone(){
          document.getElementById("divName").style.display="none";

   
}

/* Login, Fin */





function registrar_Empleados(){   
  //  $.get("altaEmpleados.php?NombreEmpleado="+, function(datos){   });
  alert("Entra registrar empleado");

}