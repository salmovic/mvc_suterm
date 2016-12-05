<?php
//GESTIONA ABSOLUTAMENTE TODOS LOS CONTROLADORES
// Permite que la constante definida dentro de este archivo este disponible en todos los controladores
require('core/core.php');

if ( isset($_GET['views']) )
{
	/*Verficamos si existre el archivo controlador*/
	if( file_exists('core/controllers/'.strtolower($_GET['views']).'Controller.php') )
	{
		include ('core/controllers/'.strtolower($_GET['views']).'Controller.php');
	} else
	{
		if($_SESSION['tipo_usr'] ==1 ) {
			header("Location: ?views=movimientos");
			return;
		}
		header("Location: ?views=addempleado");
	}
} else
{
	// ELiminar los datos de la sesion
	session_destroy();
	include 'core/controllers/indexController.php';
}
 ?>
