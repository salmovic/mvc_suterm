<?php
require_once '../../logica/empleado.php';
$emp = new Empleado();
if (isset($_POST['token']))
{
		echo $emp->setEmpleado();
}
?>
