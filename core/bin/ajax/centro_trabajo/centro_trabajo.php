<?php
if (isset($_POST['token']))
{
	switch ($_POST['token']) {
		case 'set_centrab':		
			echo $centroTrabajo->setCentroTrabajo();
			break;
		default:
			echo "Error de acceso";
			break;
	}
}else {
		echo "No error de acceso";
}
?>
