function Verificar(){   
    //alert("Entro");
     if($("#idEmpleado").val()!=""){  
 
         $.get("PHP/punchinout.php?idEmpleado="+$("#idEmpleado").val(),function(dato){
            
            if(dato=="Punched out"){
              dnone();
              alert("Punched out");       
              window.open('punchInOut.html','_self');       
            }
            else if(dato=="Punched In")
            {
             dnone();
             alert("Punched In");       
             window.open('punchInOut.html','_self');  
            }
            else
            {
              $('#divError').show();
               alert("Error por que "+dato);              
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