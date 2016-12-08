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
				if(resp!=1) {
					alertify.error('No se pudo establecer el usuario');
					return;} else
				alertify.success("Se establecio correctamente");
				carga_ajax( null, 'ajax.php?mode=refresh_usr','tb_usr' );
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
/**
* Funcion para eliminar un usuario
*/
function delUsr( id ) {
	alertify.confirm('¿Está seguro que desea elinar el usuario?', function( e ){
		if(e){
			$.ajax({
				url:'ajax.php?mode=del_usr',
				type:'post',
				data:'id='+id,
				success:function( resp ) {
					if(resp!=1){
						alertify.error("No se pudo realizar la operacion.");
						return;
					}
					alertify.success('El usuario ha eliminado correctamente.');
					carga_ajax( null, 'ajax.php?mode=refresh_usr','tb_usr' );
				}
			});
		}
	});
}
