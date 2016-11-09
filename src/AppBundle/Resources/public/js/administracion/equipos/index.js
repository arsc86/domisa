/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
      
    $('#equiposDataTable').DataTable({
            responsive: true
    });
       
    $("#formEquipos").submit(function() { 
        nombreEquipo     = $("input[name='nombreEquipo']").val();
        descripcionEquipo   = $("input[name='descripcionEquipo']").val();
        ubicacionEquipo  = $("select[name='ubicacionEquipo']").val();
        ipEquipo         = $("input[name='ipEquipo']").val();
        acceso           = $("select[name='acceso']").val();
      
        if(nombreEquipo === ""){
            alertMessage("Debe ingresar el nombre del Equipo");
            return false;
        }
        
        if(ubicacionEquipo === "na"){
            alertMessage("Debe escoger la Ubicacion del Equipo");
            return false;
        }
        
        if(ipEquipo === ""){
            alertMessage("Debe ingresar la IP del Equipo");
            return false;
        }
        
        if(acceso === "na"){
            alertMessage("Debe escoger el Grupo de Acceso para relacionar con el Equipo");
            return false;
        }
    
        var $body = $("body");
        $body.addClass("transparentBody");        
    });   
     
 });      

