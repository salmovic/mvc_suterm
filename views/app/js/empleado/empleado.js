$(document).ready(function(){
// jQuery Smart Wizard
	$('#wizard').smartWizard({
				transitionEffect: 'slide'
			});
	$('.buttonNext').addClass('btn btn-success');
	$('.buttonPrevious').addClass('btn btn-primary');
	$('.buttonFinish').addClass('btn btn-default').on('click',function(e){
		$.ajax({
				//ruta archivo php
				url: 'ajax.php?mode=empleado',
				type: 'post',
				data:$('.set_empleado').serialize(),
				success: function(respuesta) {
					console.log(respuesta);
					if(respuesta==1){
						alertify.success("Se guardo coorectamente");
					}else{
						alertify.error("No se pudo eliminar");
					}
				},
				//ejecuta cuando hay un error en la peticion
				error: function(jqXHR,estado,error) {
						alertify.error('Ocurrio un error '+error);
				},
				//ejecuta al completar exitosamente la peticion
				complete: function(jqXHR,estado) {},
				timeout: 10000
		});
	});

	/*/bootstrap-daterangepicker*/
	$('.calendario').daterangepicker({
		singleDatePicker: true,
		showDropdowns: true
	});
});
