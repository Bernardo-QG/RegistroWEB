function login(){
       
    if($("#usuario").val()!="" && $("#contrasena").val()!=""){          
      
       $.get("PHP/login.php?user="+$("#usuario").val()+"&password="+$("#contrasena").val(),function(dato){
       
          if(dato=="Si"){
            dnone();
            alert("Bienvenido usuario");       
            window.open('http://localhost/RegistroWEB/inicio.html','_self');       
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