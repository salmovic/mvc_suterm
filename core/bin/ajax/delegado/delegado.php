<?php
if ( isset($_POST['token']) ) {
	$opcion = $_POST['token'];
	switch ($opcion) {
		case 'setdeleg':
		 echo $delegado->setDelegado();
			break;
		case 'updatedeleg':
		  echo $delegado -> updateDelegado();			
		break;
		default:
		echo 'ruta no especificada.';
			break;
	}
}
 ?>
