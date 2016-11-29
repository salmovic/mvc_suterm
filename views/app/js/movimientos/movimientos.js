$(document).ready(function()
{
	$('#buscarSol').focus();
	//comprobar si se pulsa una tecla
    $("#buscarSol").keyup( function() {
        //Obtenemos el texto del campo buscar
        consulta = $("#buscarSol").val();
        //se realiza la peticion de busqueda por ajaz

				if (consulta==" ") {
					$("#dtsSolicitante").empty();
					return;
				}
       $.ajax({
           type: "POST",
           url: "ajax.php?mode=busquedaemp",
           data: "txt="+consulta,
           dataType: "html",
            success: function(data) {
							if(data!= -1){
                $("#dtsSolicitante").empty();
                $("#dtsSolicitante").append(data);
								var rpe=$('#rpe_empleado').val();
								carga_ajax(rpe,'ajax.php?mode=tbmovimiento','tbMovimiento');
							}
            }
       });
    });
});
function modalMovimiento(id,div)
{
	$.ajax({
		type: "POST",
		url: "ajax.php?mode=modalmovimiento",
		data: "rpe="+id,
		dataType: "html",
		success: function(respuesta) {
			console.log(respuesta);
			$('#'+div+'').html(respuesta);
		}
	});
}
/*/bootstrap-daterangepicker*/
$('.calendario').daterangepicker({
singleDatePicker: true,
showDropdowns: true
});
