<?php
if (!isset($_POST['token'])) {echo -1; exit;}
$token = $_POST['token'];
switch ( $token ) {
	case 'setSustituto':
		echo $movimientos->setSustituto();
		break;
		case 'setmomvimiento':
		echo $movimientos->saveMovimiento();
		break;
	default:
		echo "Token no valido";
		break;
}

?>