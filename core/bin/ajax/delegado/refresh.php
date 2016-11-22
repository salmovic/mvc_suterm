<?php
$allDelg = $delegado->getDelegados();
foreach ($allDelg as $dts) {
 ?>
<tr>
	<td><?php echo $dts->rpe_empleado; ?></td>
	<td><?php echo $dts->nombre; ?></td>
	<td><?php echo $dts->no_dep; ?></td>
	<td><?php echo $dts->descripcion; ?></td>
	<td align="center">
		<button type="button" data-toggle="modal" data-target="#modaldeleg" onclick="carga_ajax(<?php echo $dts->id_delegado; ?>,'ajax.php?mode=modaldeleg','modaldeleg');"
			title="Editar" class="btn btn-success"><i class="fa fa-edit"></i></button>

	 <button type="button" onclick="eliminarDelegado(<?php echo $dts->id_delegado; ?>);"
	 title="Eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></button>
	 </td>
	</td>
</tr>
<?php }; ?>
