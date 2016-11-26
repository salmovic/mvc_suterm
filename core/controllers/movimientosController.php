<?php
if($_SESSION['tipo_usr']==0){
	header('Location:?views=addempleado');
} else
include 'html/movimientos/movimientos.php';
 ?>
