function ini(){    
    $.get("PHP/Sesion.php?funcion=getlog&permiso=",function(result){ 
        if(result=="0"){
            
            window.open('index.html','_self'); 
           
        }
    });    
}