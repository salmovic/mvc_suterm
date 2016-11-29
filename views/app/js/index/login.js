$(document).ready(function(){
	$('#login').on('click',function(e){
		e.preventDefault();
		// $('#resp').text($('#frmLogin').serialize());
		$.ajax({
			url:'ajax.php?mode=login',
			type:'post',
			data: $('#frmLogin').serialize(),
			success: function(resp){
				console.log(resp +""+typeof(resp) );
				switch (resp) {
						case "0":
 					$(location).attr('href','?views=addempleado');
							break;
						case "1":
						$(location).attr('href','?views=movimientos');
						break;
						default:
					alertify.alert( "Verifique que los datos sean correctos!" );
						break;
				}
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
