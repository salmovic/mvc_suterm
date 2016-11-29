<?php if (isset($_POST['id'])){
	$emp = $movimientos->getEmpleadoSol($_POST['id']);
	?>
	<tr>
		<th scope="row"></th>
			<td></td>
			<td></td>
			<td><?php echo $emp[0]->categoria; ?></td>
			<td><?php echo  $emp[0]->no_plaza; ?></td>
			<td></td>
			<td></td>
			<td align="center">
				<button type="button" data-toggle="modal" data-target="#upMovimiento" title="Editar" class="btn btn-success" onclick="modalMovimiento('<?php echo  $emp[0]->rpe; ?>','upMovimiento');"
				><i class="fa fa-edit"></i></button>
			</td>
	</tr>
<?php }
exit;?>
