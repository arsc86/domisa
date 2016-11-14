/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(function() {
      
    $('#scriptsDataTable').DataTable({
            responsive: true
    });
       
    $("#formScripts").submit(function() { 
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


function showComands(id) {
       
    var htmlDiv = "<div id='show-comand' title='Comando Ejecucion'>" +
                  "<p>" + $("#id_"+id).val() + "</p><div>";
          
    $("#page-wrapper").append(htmlDiv);
    
    $("#show-comand").dialog({
        resizable: false,
        height: "auto",
        width: 400,
        modal: true,
        buttons: { 
            Cerrar: function() {
                $(this).dialog("close");
            }
        }});
}
