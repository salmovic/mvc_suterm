<?php
$allDep = $departamento->getDepartamentos();
foreach ($allDep as $dts)
{
?>
<tr>
	<td><?php echo $dts->id_departamento; ?></td>
	<td><?php echo $dts->nombre; ?></td>
	<td><?php echo $dts->no_extencion; ?></td>
	<td><?php echo $dts->telefono; ?></td>
	<td align="center">

		<button type="button" data-toggle="modal" data-target="#updateDepto" onclick="carga_ajax(<?php echo $dts->id_departamento; ?>,'ajax.php?mode=modaldpto','updateDepto');"
			title="Editar" class="btn btn-success"><i class="fa fa-edit"></i></button>

		<button type="button" onclick="eliminarDepto(<?php echo $dts->id_departamento; ?>);"
		title="Eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></button>
	</td>
</tr>
<?php }; ?>
