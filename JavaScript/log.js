function login(){
   // alert(confirm("Desa ser un invesil?"));
  if($("#usuario").val()!="" && $("#contrasena").val()!=""){          
    
     $.get("PHP/login.php?user="+$("#usuario").val()+"&password="+$("#contrasena").val(),function(dato){
     
        if(dato=="Dios" || dato=="Semidios" || dato=="Mortal" ){            
          dnone();
          $.get("PHP/Sesion.php?funcion=login&permiso="+dato,function(result){ });
          alert("Bienvenido usuario nivel: "+ dato);       
          window.open('inicio.html','_self');       
        }        
        else
        {
          $('#divError').show();
           alert("No eres Bienvenido por que "+dato);
           
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
function iniLog(){
$.get("PHP/Sesion.php?funcion=logout&permiso=",function(result){ });
}