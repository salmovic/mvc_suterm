<?php
	$allCat= $plazas->getPlazas();
	foreach ($allCat as $dts) {
 ?>
<tr>
	<td><?php echo $dts->no_plaza; ?></td>
	<td><?php echo $dts->nombre_cat; ?></td>
	<td><?php echo grupoOrganico($dts->grupo_organico); ?></td>
	<td><?php echo nivelDesempenio($dts->nivel_desempenio); ?></td>
	<td><?php echo "$ ".$dts->nivel_remuneracion; ?></td>
	<td><?php echo $dts->grupo_nivel; ?></td>
	<td><?php echo $dts->plan_carrera; ?></td>
	<td><?php echo $dts->grupo; ?></td>
	<td><?php echo $dts->unidad; ?></td>
	<td align="center">
		<button type="button" data-toggle="modal" data-target="#myModal" onclick="carga_ajax('<?php echo $dts->no_plaza; ?>','ajax.php?mode=modal_plaza','myModal');"
		title="Editar" class="btn btn-success"> <i class="fa fa-edit"></i> </button>
		 <button type="button" onclick="eliminarPlaza('<?php echo $dts->no_plaza; ?>');"
			title="Eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></button>
	</td>
</tr>
<?php } ?>
