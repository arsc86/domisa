var a = 1;
$(function() {

    $("#sidebar-toggle").click(function() {
        
        $("#sidebar").toggle();
        
        if (a == 1)
        {
            $("#page-wrapper").removeClass('toggleClassNormal');
            $("#page-wrapper").addClass('toggleClass');
            a = 2;
        }
        else
        {
            $("#page-wrapper").removeClass('toggleClass');
            $("#page-wrapper").addClass('toggleClassNormal');
            a = 1;
        }

        $("#page-wrapper").css({
            width: 'auto',
            margin: 0
        });
    });


});

function alertMessage(mensaje) {
    var htmlDiv = "<div id='dialog-confirm' title='Alerta'>" +
                  "<p><span class='ui-icon ui-icon-alert' style='float:left; margin:2px 12px 20px 0;'>" +
                  "</span>" + mensaje + "</p><div>";
          
    $("#page-wrapper").append(htmlDiv);
    
    $("#dialog-confirm").dialog({
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
