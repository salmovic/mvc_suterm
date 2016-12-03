$(document).ready(function(){
	resetAlertify();
	// Establecer usuario
	$('#sendUsr').on('click', function() {
		$('#resp').text(  $('#frmUsuario').serialize() );
		$.ajax({
			url:'ajax.php?mode=usr',
			type:'post',
			data:$('#frmUsuario').serialize(),
			success: function(resp){
				console.log(resp);
				alertify.success(resp);
			},
			error: function( jqXHR, estado, error ) {
				alertify.error( error );
			}
		});
	});
	// Cargar datos empleado
	$('#rpe').on('change',function( e ) {
		var rpe = $(this).val();
		if(rpe == -1){ $("#dtsPersonal").empty(); return;}
		carga_ajax( rpe, 'ajax.php?mode=dts_usr','dtsPersonal' );
	});
	// Verificar contrasenia
	$('#passwd2').keyup(function() {
		var pass2 = $(this).val();
		var pass = $("#passwd").val();
		if( pass2!=pass ) {
			$('#passwd2').css({border: "1px solid red" });
			return;
		}
		$('#passwd2').css({border: "1px solid green" });
	});
});
