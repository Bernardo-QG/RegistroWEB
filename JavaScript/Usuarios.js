function Usuarios(){
    $('#tbodyDatos').empty();
    $.get("PHP/Usuarios.php?Buscar="+$("#txtBuscar").val(),function(data){
       //alert("Get");
        gct=JSON.parse(data);
        //alert(gct);
        for(var i=0; i<gct["AllUsuarios"].length; i++){
            //alert("Dato");
            $('#usuarios > tbody:last-child').append(' '
            +'<tr><td >'+gct["AllUsuarios"][i].Identificador+'</td>'
            +'<td >'+gct["AllUsuarios"][i].Nombre+'</td>'
            +'<td >'+gct["AllUsuarios"][i].Usuario+'</td>'
            +'<td >'+gct["AllUsuarios"][i].Contrasena+'</td>'
            +'<td >'+gct["AllUsuarios"][i].Permiso+'</td>'
            +'<td style="width:180">'
            +'<button onclick="Actualizar('+gct["AllUsuarios"][i].Identificador+')" type="button" class="btn btn-info"><i class="fas fa-edit"></i></button>'
            +'&nbsp;'
            +'<button onclick="borrar_Usuarios('+gct["AllUsuarios"][i].Identificador+')" type="button" class="btn btn-info"><i class="fas fa-trash-alt""></i></button>'            
            +'</td></tr>');
                
            
        };
    
      });
      
}



function borrar_Usuarios(id){
  
    $.get("PHP/borrarUsuario.php?idUsuario="+id,function(dato){
           
        if(dato=="Si"){
       
          alert("Accion exitosa");       
          Usuarios();   
        }
        else
        {
        
           alert("Accion fallida por que "+dato);              
        }
    
      });
            
}
function Actualizar(id){
  window.open('editarUsuario.html?id='+id,'_self');
}
function Nuevo(){
  window.open('altaUsuarios.html','_self');
}