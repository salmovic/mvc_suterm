$(document).ready(function()
{
	// index
	_url( '#home', '?views=index' );

	// caterorias
	_url( '#categoria', '?views=categoria' );

	// Centro de trabajo
	_url( '#centroTrabajo', '?views=centrotrabajo' );

	// Delegado
	_url( '#delegado', '?views=delegado' );

	//Departamento
	_url( '#departamento', '?views=departamento' );

	//Empleado
	_url( '#addempleado', '?views=addempleado' );
	_url( '#updateempleado', '?views=updateempleado' );

	//Centor trabajo
	_url('#centrab','?views=centrotrabajo');



	//funcion url
	function _url( id, url )
	{
		$(id).on('click',function( e )
		{
			  e.preventDefault();
				$(location).attr('href',url);
		});
	}
});
