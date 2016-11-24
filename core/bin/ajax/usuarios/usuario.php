<?php
if (isset( $_POST['token'] )) {
	switch ( $_POST['token'] ) {
		case 'setUsr':
			 echo $usr->setUsuarios();
			break;

		default:
			echo "ruta no valido!!";
			break;
	}
}
?>
