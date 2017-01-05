$(document).ready(function()
{
	// index
	_url( '#home', '?views=movimientos' );
	_url( '#historial', '?views=historial' );

	// caterorias
	_url( '#plaza', '?views=plaza' );

	// Centro de trabajo
	_url( '#centroTrabajo', '?views=centrotrabajo' );

	// Delegado
	_url( '#delegado', '?views=delegado' );

	//Departamento
	_url( '#departamento', '?views=departamento' );

	//Empleado
	_url( '#addempleado', '?views=addempleado' );
	_url( '#buscarempleado', '?views=searchemp' );

	// usuarios
	_url( '#usuario', '?views=usuario' );

	//Centor trabajo
	_url('#centrab','?views=centrotrabajo');

	// categorias
	_url('#categorias','?views=categoria');



	//funcion url
	function _url( id, url )
	{
		$(id).on('click',function( e )
		{
			  e.preventDefault();
				$(location).attr('href',url);
		});
	}

	$("#suterm").on('click',function(e){
		e.preventDefault();
	});
});
