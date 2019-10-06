function Activos(){
    $('#tbodyDatos').empty();
    $.get("PHP/Activos.php?fecha="+$("#txtfecha").val()+"&idEmpleado="+$("#txtIdEmpleado").val(),function(data){
       if(data!="No"){
        gct=JSON.parse(data);
        //alert(gct);
        for(var i=0; i<gct["AllActivos"].length; i++){
            //alert("Dato");
            $('#activos > tbody:last-child').append(' '
            +'<tr><td >'+gct["AllActivos"][i].Id_empleado+'</td>'
            +'<td >'+gct["AllActivos"][i].Hora_entrada+'</td>'
            +'<td >'+gct["AllActivos"][i].Hora_salida+'</td>'
            +'<td >'+((gct["AllActivos"][i].Activo==1)?"Si":"No")+'</td>'
         //   +'<td >'
           // +'<button onclick="Actualizar('+gct["AllActivos"][i].Id_empleado+')" type="button" class="btn btn-info"><i class="fas fa-close"></i></button>'
            //+'</td>'
            +'</tr>');               
            
        }
    }
    
      });
      
}