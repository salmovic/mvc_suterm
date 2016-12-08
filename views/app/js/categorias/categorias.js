$(document).ready(function(){
	$('#setCat').on('click',function(e){
		$('#resp').text($('#frmCategorias').serialize());
		$.ajax({			
			url:'ajax.php?mode=categoria',
			type:'post',
			data:$('#frmCategorias').serialize(),
			success:function(resp){
				console.log(resp);
				if(resp==1){
					alertify.success("Se guardo correctamente");
					resetForm('frmCategorias');
					carga_ajax(null,'ajax.php?mode=refreshCat','tb_cat');
				}else {
					alertify.error('Error: '+resp);
				}
			},
			error:function(jqXHR,estado,error){
				alertify.error('Ocurrio un error '+error);
			},
			timeout: 10000
		});
	});
});
/*
* Funcion que permite eliminar una categoria.
*/
function eliminarCategoria( id )
{
	$.ajax({
		beforeSend:function(){},
		url:'ajax.php?mode=deletecat',
		type:'post',
		data:'id='+id,
		success:function(resp){
			console.log(resp);
			if(resp==1){
				alertify.success("Se ha elimando corractemente");
				carga_ajax(null,'ajax.php?mode=refreshCat','tb_cat');
			}else {
				alertify.error('Error: '+resp);
			}
		},
		error:function(jqXHR,estado,error){
			alertify.error('Ocurrio un error '+error);
		},
		timeout: 10000
	});
}
