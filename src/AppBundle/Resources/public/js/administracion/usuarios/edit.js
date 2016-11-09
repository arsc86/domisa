/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
   
    $('#tipoRol').val(idRol);   
    $("#formUsuariosEdit").submit(function() { 
        nombreUsuario  = $("input[name='nombreUsuario']").val();
       
        if(nombreUsuario === ""){
            alertMessage("Debe ingresar el nombre del Usuario");
            return false;
        }
       
        var $body = $("body");
        $body.addClass("transparentBody");        
    });   
     
 });      


