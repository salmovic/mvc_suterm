<?php
if (isset($_POST['token']))
{
 switch ($_POST['token']) {
 	case 'setempleado':
 		echo $empleado->setEmpleado();
 		break;
	case 'upempleado':
		echo 1;
		break;
 	default:
 		echo 'error de ruta';
 		break;
 }
}
 ?>
