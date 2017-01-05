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
			// cambiar foto de perfil
			case 'upfoto':
			if(!isset($_SESSION['nom_foto'])){
				echo "No se ha cargado la foto de perfil";
				return;
			}
			if(!isset($_SESSION['id'])){
				echo "No existe un usuario";
				return;
			}
			$nomfoto=$_SESSION['nom_foto'];
			$id=$_SESSION['id'];
			echo $usr->updateFotoPerfil($nomfoto,$id);
			break;
		default:
			echo "ruta no valido!!";
			break;
	}
}
?>
