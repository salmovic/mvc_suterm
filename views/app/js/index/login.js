$(document).ready(function(){
	$('#login').on('click',function(e){
		$('#resp').text($('#frmLogin').serialize());
		$.ajax({
			url:'ajax.php?mode=login',
			type:'post',
			data: $('#frmLogin').serialize(),
			success: function(resp){
				console.log(resp);
				alertify.success( resp );
			},
			error:function(jqXHR,estado,error){
				console.log(error);
			}
		});
	});
});

function resetForm(id)
{
	document.getElementById(id).reset();
}
