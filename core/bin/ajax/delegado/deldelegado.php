<?php
// Verificar si el id proviene del usuario
if (isset($_POST['id'])&&!empty($_POST['id'])) {
		echo $delegado->deleteDelegado($_POST['id']);
}
?>
