<?php
 if(isset($_SESSION['rpe_emp'])) {
	 include 'html/empleados/empleado_update.php';
 }
 header("Location:?views=searchemp");
 ?>
