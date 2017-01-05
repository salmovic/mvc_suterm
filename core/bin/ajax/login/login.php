<?php
/**
* Iniciar sesiion
*/
if (isset($_POST['token']) && $_POST['token']=='login')
{
	 $usr= $_POST['usr'];
	 $pass= $_POST['passwd'];

	 $log =$login->getLogin( $usr );

	 $has = $log->passwd;

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
