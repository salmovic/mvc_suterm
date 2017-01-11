<?php if(isset($_POST['rpe'])) {
	$rpe = $_POST['rpe'];
	//Generamos una variable desesion para poder manipular el rpe en la vista Update Empleado
	$_SESSION['rpe_emp'] = $rpe;
	echo 1;
}exit;
?>
