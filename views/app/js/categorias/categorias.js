$(document).ready(function(){
	$('#setCat').on('click',function(e){
		$.ajax({
			url:'ajax.php?mode=categoria',
			type:'post',
			data:$('#frmCategorias').serialize(),
			success:function(resp){
				if(resp==1){
					alertify.success("Se guardo correctamente");
					resetForm('frmCategorias');
					carga_ajax(0,'ajax.php?mode=refreshCat','tb_cat');
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
	alertify.confirm('¿Esta seguro que desea eliminar el registro?',function(e){
		if(!e) return;
		$.ajax({
			url:'ajax.php?mode=deletecat',
			type:'post',
			data:'id='+id,
			success:function(resp){
				console.log(resp);
				if(resp==1){
					alertify.success("Se ha elimando correctemente");
					carga_ajax(0,'ajax.php?mode=refreshCat','tb_cat');
				}else {
					alertify.error('Error: '+resp);
				}
			}
		});

	});
}
