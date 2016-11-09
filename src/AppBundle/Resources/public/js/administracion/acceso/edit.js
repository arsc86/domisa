/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
   
    $("#formAccesoEdit").submit(function() { 
        nombre    = $("input[name='nombreAcceso']").val();
        usuario   = $("input[name='usuarioAcceso']").val();
        clave     = $("input[name='claveAcceso']").val();   
        
        if(nombre === ""){
            alertMessage("Debe ingresar el nombre del Grupo de Acceso");
            return false;
        }
        
        if(usuario === ""){
            alertMessage("Debe ingresar el usuario de Acceso");
            return false;
        }
       
        if(clave === ""){
            alertMessage("Debe ingresar la clave de Acceso");
            return false;
        }   

        var $body = $("body");
        $body.addClass("transparentBody");        
    });   
     
 });      


