/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
   
    $("#formScriptsEdit").submit(function() { 
        nombre    = $("input[name='nombreScript']").val();
        descripcion   = $("input[name='descripcionScript']").val();
        script     = $("textarea[name='script']").val();   
        
        if(nombre === ""){
            alertMessage("Debe ingresar el nombre del Script a ingresar");
            return false;
        }
        
        if(descripcion === ""){
            alertMessage("Debe ingresar la descripcion del Script a ingresar");
            return false;
        }
        
        if(script === ""){
            alertMessage("Debe crear el script del comando a ingresar");
            return false;
        }     

        var $body = $("body");
        $body.addClass("transparentBody");        
    });   
     
 });      


