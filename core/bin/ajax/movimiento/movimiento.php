<?php
if (!isset($_POST['token'])) {echo -1; exit;}
$token = $_POST['token'];
switch ( $token ) {
	case 'setSustituto':
		echo $movimientos->setSustituto();
		break;
		case 'setmomvimiento':
		/*Gurdar el movimiento a la base de datos como historial*/
			$folio = $_POST["folio_mov"];
			$m = $movimientos->saveMovimiento();
			if($m!=1) {
				echo $m;
				return;
			}
			/*Si se guardo crrectamente el movimiento se crea una variable de sesion para poder ejecutar posteriormente el reporte en PDF*/
			$_SESSION['folio_pdf']=$folio;
			echo $m;
		break;
	default:
		echo "Token no valido";
		break;
}

?>
