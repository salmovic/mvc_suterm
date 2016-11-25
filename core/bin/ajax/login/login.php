<?php

if (isset($_POST['token']) && $_POST['token']=='login')
{

	 $tip_us= $_POST['tipo_usr'];
	 $usr= $_POST['usr'];
	 $pass= $_POST['passwd'];

	 $lg =$login->getLogin($usr,$pass, $tip_us);
	 if ($lg->cont==1) {
		 $_SESSION['usr'] = $lg->nombre;
		 $_SESSION['foto'] = $lg->foto;
		 $_SESSION['tipo_usr'] = $lg->tipo_usuario;
	 }
	 echo $lg->cont;
}else
{echo 'error de ruta';}
?>
