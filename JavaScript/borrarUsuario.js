function borrar_Usuario(){   

    if($("#idUsuario").val()!=""){   
        $.get("PHP/borrarUsuario.php?idUsuario="+$("#idUsuario").val(),function(dato){
           
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