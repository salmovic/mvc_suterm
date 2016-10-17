<?php
if (isset($_POST['token']))
{
	switch ($_POST['token']) {
		case 'set_departamento':
				echo $departamento->setDepartamentos();
			break;
		case 'up_departamento':
			echo $departamento->updateDepartamentos();
		break;
		default:
			echo "Error de acceso";
			break;
	}
}else {
		echo "No error de acceso";
}
?>
