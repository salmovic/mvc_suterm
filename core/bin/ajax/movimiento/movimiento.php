<?php
if (!isset($_POST['token'])) {echo -1; exit;}
$token = $_POST['token'];
switch ( $token ) {
	case 'setSustituto':
		echo 1;
		break;
		case 'setmomvimiento':
			echo 1;
			break;
	default:
		# code...
		break;
}
// echo $movimientos->setSustituto();
?>
