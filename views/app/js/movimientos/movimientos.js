$(document).ready(function()
{
	$('#rpe_empleado').focus();
	//comprobar si se pulsa una tecla
    $("#rpe_empleado").keyup( function() {
        //Obtenemos el texto del campo buscar
        consulta = $("#rpe_empleado").val();
        //se realiza la peticion de busqueda por ajaz
       $.ajax({
           type: "POST",
           url: "ajax.php?mode=busquedaemp",
           data: "id="+consulta,
           dataType: "html",
           /*beforeSend: function(){
               $("#resultado").html("<spam class='glyphicon glyphicon-hourglass'></spam>");
           },*/
            error: function() {
                alert("error petición ajax");
            },
            success: function(data) {
                $("#resultado").empty();
                $("#resultado").append(data);
								console.log('hol');
            }
       });
    });
});
