$(document).ready(function(){
	resetAlertify();
	$('#sendUsr').on('click', function(){
		$('#resp').text(  $('#frmUsuario').serialize() );
		$.ajax({
			url:'ajax.php?mode=usr',
			type:'post',
			data:$('#frmUsuario').serialize(),
			success: function(resp){
				console.log( resp );
			},
			error: function( jqXHR, estado, error ){
				alertify.error( error );
			}
		});
	});
});
