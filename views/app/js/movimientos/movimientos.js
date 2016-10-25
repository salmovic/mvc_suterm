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
                $("#dtsSolicitante").empty();
                $("#dtsSolicitante").append(data);
            },
						complete:function(jqXHR,estado)
						{
							$.ajax({
								type: "POST",
		            url: "ajax.php?mode=tbmovimiento",
		            data:$('#frmmovimiento').serialize(),
		            dataType: "html",
		            /*beforeSend: function(){
		                $("#resultado").html("<spam class='glyphicon glyphicon-hourglass'></spam>");
		            },*/
		             error: function() {
		                 alert("error petición ajax");
		             },
		             success: function(data) {
		                 $("#tbMovimiento").empty();
		                 $("#tbMovimiento").append(data);
		             }
							});
						}

       });
    });
});
function modalMovimiento(id,div)
{
	$.ajax({
		type: "POST",
		url: "ajax.php?mode=modalmovimiento",
		data: $('#frmmovimiento').serialize(),
		dataType: "html",
		success: function(respuesta) {
			console.log(respuesta);
			$('#'+div+'').html(respuesta);
		}

	});
}
