<?php
/**
* Iniciar sesiion 
*/
if (isset($_POST['token']) && $_POST['token']=='login')
{
	 $tip_us= $_POST['tipo_usr'];
	 $usr= $_POST['usr'];
	 $pass= $_POST['passwd'];

	 $log =$login->getLogin( $usr, $tip_us );

	 $has = $log->passwd;

	 if( password_verify( $pass, $has )) {
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
