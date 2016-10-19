$(document).ready(function(){
	resetAlertify();

// jQuery Smart Wizard
	$('#wizard').smartWizard({
				transitionEffect: 'slide'
			});
	$('.buttonNext').addClass('btn btn-success');
	$('.buttonPrevious').addClass('btn btn-primary');
	$('.buttonFinish').addClass('btn btn-default').on('click',function(e){
		/*Enviar formulario empleado*/
		$.ajax({
				beforeSend: function() {},
				//ruta archivo php
				url: 'ajax.php?mode=empleado',
				//typo o metodo de envio
				type: 'post',
				//envio de datos
				data:$('.set_empleado').serialize(),
				//suscectible
				success: function(respuesta) {
					console.log(respuesta);
					if(respuesta==1)
					{
						alertify.success("Se cargó correctamente");
					}else{
						alertify.error("No se pudo cargar "+respuesta);
					}
				},
				//ejecuta cuando hay un error en la peticion
				error: function(jqXHR,estado,error) {
						alertify.error("Ocurrio un erro inesperado "+error);
				},
				//ejecuta al completar exitosamente la peticion
				complete: function(jqXHR,estado){},
				timeout: 10000
		});
	});

	/*/bootstrap-daterangepicker*/
	$('.calendario').daterangepicker({
		singleDatePicker: true,
		showDropdowns: true
	});
});
