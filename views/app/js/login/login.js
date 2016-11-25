$(document).ready(function(){
	$('#login').on('click',function(e){
		$('#resp').text($('#frmLogin').serialize());
		$.ajax({
			url:'ajax.php?mode=login',
			type:'post',
			data: $('#frmLogin').serialize(),
			success: function(resp){
				if( !(resp == 1) ) {
					alertify.alert( "Verifique que los datos sean correctos!" );
					return;
				}
				$(location).attr('href','index.php?views=categoria');
			},
			error:function(jqXHR,estado,error) {
				console.log(error);
			}
		});
	});
});

function resetForm(id)
{
	document.getElementById(id).reset();
}
