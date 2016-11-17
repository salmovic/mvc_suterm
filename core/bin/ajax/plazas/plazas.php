<?php
if( isset( $_POST['token'] ) )
{
	switch ($_POST['token']) {
		/*
		* SET CATEGORIAS
		*/
		case 'setplaza':
		if (!empty($_POST['no_plaza']))
		{
			echo $plazas->setPlazas();
		}else{
			echo 2;
		}
		break;
		/*
		* UPDATE CATEGORIAS
		*/
		case 'updateplaza':
			echo $plazas->updatePlazas();
		break;
		default:
			echo -1;
		break;
	}
}
?>
