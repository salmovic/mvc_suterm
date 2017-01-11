$(document).ready(function() {
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
					if(respuesta==1){
						$('input').css('border',"");
						$('select').css('border',"");
						$('.set_empleado').trigger("reset");
						alertify.confirm("Se ha registrado correctamente. ¿Desea ver todos registros?",function(e){
							if(!e)return;
							$(location).attr('href',"?views=searchemp");
						});
						return;
					} if (respuesta==2) {
						alertify.success("Se actualizo correctamente.");
						return;
					}else{
						alertify.error(respuesta);
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
//Bloquear campos
	$('#estado_civil').on('change',function(){
		if($(this).val()=='SOLTERO(A)'){
			$('#nombre_conyugue').val('');
			$('#nombre_conyugue').css('border',"");
			$('#nombre_conyugue').attr('readonly','true');

			$('#dom_conyugue').val('');
			$('#dom_conyugue').css('border',"");
			$('#dom_conyugue').attr('readonly','true');

			$('#fecha_nac_conyugue').val('');
			$('#fecha_nac_conyugue').css('border',"");
			$('#fecha_nac_conyugue').attr('readonly','true');

			$('#num_depen_econ').val('');
			$('#num_depen_econ').css('border',"");
			$('#num_depen_econ').attr('readonly','true');
			return;
		}
		$('#nombre_conyugue').removeAttr('readonly');
		$('#dom_conyugue').removeAttr('readonly');
		$('#fecha_nac_conyugue').removeAttr('readonly');
		$('#num_depen_econ').removeAttr('readonly');
	});
	/*/bootstrap-daterangepicker*/
	$('.calendario').daterangepicker({
		singleDatePicker: true,
		showDropdowns: true
	});
});
