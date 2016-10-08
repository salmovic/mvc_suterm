$(document).ready(function()
{
	// index
	_url( '#home', '?views=index' );

	// caterorias
	_url( '#categoria', '?views=categoria' );

	// Centro de trabajo
	_url( '#centrab', '?views=centro_trabajo' );

	// Centro de trabajo
	_url( '#delegado', '?views=delegado' );

	//
	function _url( id, url )
	{
		$(id).on('click',function()
		{
				$(location).attr('href',url);
		});
	}
});
