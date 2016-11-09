/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
   
    $('#ubicacionEquipo').val(idUbicacion); 
    $('#acceso').val(idAcceso);   
    $('#tipoEquipo').val(tipo);   
    
    $("#formEquipoEdit").submit(function() { 
        nombreEquipo     = $("input[name='nombreEquipo']").val();
        ipEquipo         = $("input[name='ipEquipo']").val();
      
        if(nombreEquipo === ""){
            alertMessage("Debe ingresar el nombre del Equipo");
            return false;
        }
        
        if(ipEquipo === ""){
            alertMessage("Debe ingresar la IP del Equipo");
            return false;
        }
        
        var $body = $("body");
        $body.addClass("transparentBody");        
    });   
     
 });      


