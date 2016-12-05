<?php if(isset($_POST['rpe'])) {
	$rpe = $_POST['rpe'];
	$_SESSION['rpe_emp'] = $rpe;
	echo 1;
}exit;
?>
