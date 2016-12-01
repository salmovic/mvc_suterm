<?php
/**
* Muestra informacion de la categoria y no de plaza que se esta ofreciendo. [recibe el rpe del empleado solicitante]
*/
$rpe = $_POST['id'];
if (!empty( $rpe ))
{
	$emp = $movimientos->getEmpleadoSol($_POST['id']);
	$len = sizeof($emp);
	if($len > 0) {
?>
<tr>
	<th scope="row">--</th>
		<td>--</td>
		<td>--</td>
		<td><?php echo $emp[0]->categoria; ?></td>
		<td><?php echo $emp[0]->no_plaza; ?></td>
		<td>--</td>
		<td>--</td>
		<td align="center">
			<button type="button" data-toggle="modal" data-target="#upMovimiento" title="Editar" class="btn btn-success" onclick="modalMovimiento('<?php echo  $emp[0]->rpe; ?>','upMovimiento');"
			><i class="fa fa-edit"></i></button>
		</td>
</tr>
<?php }
	}
?>
