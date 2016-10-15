<?php
	if (isset($_POST['id_ct'])&&!empty($_POST['id_ct'])) {
		$id = trim($_POST['id_ct']);
		echo $centroTrabajo->deleteCentroTrabajo($id);
	}
?>
