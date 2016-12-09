<?php
if (isset( $_POST['token'] )) {
	switch ( $_POST['token'] ) {
		case 'setUsr':
			if(!isset( $_SESSION["nom_foto"] )){
				echo "Debe seleccionar una imagen";
				return;
			}
			 echo $usr->setUsuarios();
			break;
			case 'upUsr':
		 echo $usr->updateUsuario();
				break;
		default:
			echo "ruta no valido!!";
			break;
	}
}
?>
