<?php
/**
* Iniciar sesiion
*/
if (isset($_POST['token']) && $_POST['token']=='login')
{
	 $usr= $_POST['usr'];
	 $pass= $_POST['passwd'];

	 // Busca una coincidencia en la base de datos
	 $log =$login->getLogin( $usr );

	 // verifica que el usuario sea identico al usuario ingresado.
	 if( $log->usr != $usr ) { echo -1; return; }

	 $has = $log->passwd;
	 // Verifica que la contraseña ingresada correcto.
	 if( password_verify( $pass, $has )) {
		 $_SESSION['id'] = $log->id_usuario;
		 	$_SESSION['usr'] = $log->nombre;
			$_SESSION['tipo_usr'] = $log->tipo_usuario;
			$_SESSION['nombreComp'] = $log->nomComp;
			$_SESSION['foto'] = $log->foto;
			echo $_SESSION['tipo_usr'];
	 }else
	 echo -1;
}else
{echo 'error de ruta';}
?>
