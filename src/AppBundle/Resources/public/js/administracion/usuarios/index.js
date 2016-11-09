/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
      
    $('#usuariosDataTable').DataTable({
            responsive: true
    });
       
    $("#formUsuarios").submit(function() { 
        nombreUsuario  = $("input[name='nombreUsuario']").val();
        loginUsuario   = $("input[name='loginUsuario']").val();
        loginUsuario   = $("input[name='passwordUsuario']").val();
        
        
        if(nombreUsuario === ""){
            alertMessage("Debe ingresar el nombre del Usuario");
            return false;
        }
        
        if(loginUsuario === ""){
            alertMessage("Debe ingresar el Login del Usuario");
            return false;
        }
        
        if(loginUsuario === ""){
            alertMessage("Debe ingresar el Password del Usuario");
            return false;
        }
    
        var $body = $("body");
        $body.addClass("transparentBody");        
    });   
     
 });      

