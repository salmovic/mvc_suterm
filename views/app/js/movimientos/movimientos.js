$(document).ready(function()
{
	/**
	* Buscar empleado solicitante
	*/
	$('#buscarSol').focus();
	//comprobar si se pulsa una tecla
    $("#buscarSol").keyup( function() {
        //Obtenemos el texto del campo buscar
        consulta = $("#buscarSol").val();
        //se realiza la peticion de busqueda por ajax
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
                if( data!=-1) {
									$("#dtsSolicitante").empty();
	                $("#dtsSolicitante").append(data);
									var rpe=$('#rpe_empleado').val();
									console.log(rpe);
									carga_ajax(rpe,'ajax.php?mode=tbmovimiento','tbMovimiento');
								} else {
									$("#dtsSolicitante").empty();
								}
            }
       });
    });
		/**
		* Guardar informacion del movimiento a la base de datos.
		*/
		$("#sendmov").on('click',function(){
			alertify.confirm("¿Esta seguro que los datos son correctos?",function(e){
				if(!e) return;
				var dts =$(".dtsMovimiento").serialize();
				$('#resp').text( dts );
				// Enviar informacion por $.ajax
				$.ajax({
					url:'ajax.php?mode=movimiento',
					type:'post',
					data: dts,
					success: function( resp ) {
						console.log(resp);
						if( resp != 1 ) {
							alertify.error('No se pudo guardar el movimeinto');
							return;
						}
						window.open('index.php?views=pdf', '_blank');
					}
				});
			});
		});
});
/**
* Fncion para cargar ventana modal
*/
function modalMovimiento(id,div)
{
	$.ajax({
		type: "POST",
		url: "ajax.php?mode=modalmovimiento",
		data: "rpe="+id,
		dataType: "html",
		success: function(respuesta) {
			$('#'+div+'').html(respuesta);
		}
	});
}
/**
* Funcion para eliminar un sustituto
*/
function deleteSust( id ) {
	alertify.confirm('¿Está seguro que desea eliminar?',function(e){
		if(e) {
			$.ajax({
				url:'ajax.php?mode=deletesustituto',
				type:'post',
				data:'idsus='+id,
				success:function(resp) {
					console.log(resp);
					if( resp != 1 ){
						alertify.error('No se pudo eliminar');
						return;
					}
					alertify.success('Se ha eliminado correctamente');
					carga_ajax(null,'ajax.php?mode=refresh_mov','tbMovimiento');
				}
			});
		}
	});
}

/*/bootstrap-daterangepicker*/
$('.calendario').daterangepicker({
singleDatePicker: true,
showDropdowns: true
});
