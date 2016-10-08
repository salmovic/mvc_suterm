// funcion que permite cargar los modulos.
function carga_ajax( id,div,url )
	{
		// alert(id);
		$.post
		(
			url,
			{id:id},
			function (resp)
			{
				$("#"+div+"").html(resp);
			}
		);
	}
