function getUrlVars() {
    var vars = {};
    var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
        vars[key] = value;
    });

    return vars;
}



function Usuario(){

    var id = getUrlVars()["id"];
    //alert(id);
    $.get("PHP/Usuario.php?Buscar="+id,function(data){
       
        gct=JSON.parse(data);
        $("#idEmpleado").val(id);
        $("#username").val(gct["Usuario"][0].User_name);
        $("#contrasena").val(gct["Usuario"][0].pass);
        $("#privilegios").val(gct["Usuario"][0].Permiso); 
    
      });
      
}

function editar_Usuario(){   
   
    if($("#idEmpleado").val()!="" && $("#username").val()!="" && $("#contrasena").val()!=""&& $("#privilegios").val()!=""){  

        $.get("PHP/editarUsuario.php?idEmpleado="+$("#idEmpleado").val()+"&nombreUsuario="+$("#username").val()+"&password="+$("#contrasena").val()+"&permisoUsuario="+$("#privilegios").val(),function(dato){
           
           if(dato=="Si"){
             dnone();
             alert("Accion exitosa");       
             window.open('tablaUsuarios.html','_self');       
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
  window.open('tablaUsuarios.html','_self');
}
 function dnone(){
          document.getElementById("divError").style.display="none";
 }

 function ini(){    
  $.get("PHP/Sesion.php?funcion=getlog&permiso=",function(result){ 
      if(result!="Dios"){          
          window.open('tablaUsuarios.html','_self'); 
      }
  });    
}