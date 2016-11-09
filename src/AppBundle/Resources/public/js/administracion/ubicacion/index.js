/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
      
    $('#ubicacionDataTable').DataTable({
            responsive: true
    });
       
    $("#formUbicacion").submit(function() { 
        nombreUbicacion  = $("input[name='nombreUbicacion']").val();
        descripcion      = $("textarea[name='descripcionUbicacion']").val();
       
        if(nombreUbicacion === ""){
            alertMessage("Debe ingresar el nombre de la Nueva Ubicacion");
            return false;
        }
        
        if(descripcion === undefined || descripcion === ""){
            alertMessage("Debe ingresar la Descripcion");
            return false;
        }
           
        var $body = $("body");
        $body.addClass("transparentBody");        
    });   
     
 });      

