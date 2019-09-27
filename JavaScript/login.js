function login(){
         
    if($("#uname").val()!="" && $("#upassword").val()!=""){            
       $.get("PHP/login.php?user="+$("#uname").val()+"&password="+$("#upassword").val(),function(dato){
          
          if(dato=="Si"){
            dnone();
            alert("Bienvenido usuario");       
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