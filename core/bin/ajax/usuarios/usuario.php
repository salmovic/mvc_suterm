<?php
if (isset( $_POST['token'] )) {
	switch ( $_POST['token'] ) {
		case 'setUsr':
			if(!validacion())return;
			$exito = $usr->setUsuarios();
			if($exito!=1){
				echo "Verifique que el rpe y usr no esten registrados.";
				return;
			}
			echo $exito;
			unset($_SESSION["nom_foto"]);
			break;
			case 'upUsr':
			// verificar contraseña
			if($_POST['passwd']!=$_POST['passwd2']){
				echo "Las contraseñas no coinciden.";
				return;
			}
			 $exito= $usr->updateUsuario();
			 if($exito!=1) {
				 echo "No se pudo realizar la actualización";
				 return;
			 }
			 echo $exito;
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
function validacion() {
	// empleado
	if($_POST['rpe']==-1) {
		echo "Debe seleccionar un empleado.";
		return false;
	}
	// tipo_usr
	if($_POST['tipo_usr']==-1) {
		echo "Debe seleccionar un tipo de usuario.";
		return false;
	}
	//validar usr
	$usr = "/^([a-zA-Z\d]){2,25}$/";
	if(!preg_match($usr, $_POST['usr']) || empty($_POST['usr'])) {
		echo "Debe ingresar un usuario váldio";
		return false;
	}
	//validar passwd
	$passwd = "/^([a-zA-Z\d]){4,25}$/";
	if(!preg_match($passwd, $_POST['passwd']) || empty($_POST['passwd'])) {
		echo "Debe ingresar una contraseña váldio";
		return false;
	}
	// verificar contraseña
	if($_POST['passwd']!=$_POST['passwd2']){
		echo "Las contraseñas no coinciden.";
		return false;
	}
	// foto
	if(!isset( $_SESSION["nom_foto"] )){
		echo "Debe seleccionar una imagen";
		return;
	}

	return true;
}
?>
