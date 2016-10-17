<?php
$allDep = $departamento->getDepartamentos();
foreach ($allDep as $dts)
{
?>
<tr>
	<td><?php echo $dts->id_departamento; ?></td>
	<td><?php echo $dts->nombre; ?></td>
	<td><?php echo $dts->responsable; ?></td>
	<td><?php echo $dts->extencion; ?></td>
	<td><?php echo $dts->telefono; ?></td>
	<td align="center">

		<a href="javascript:void(0);" data-toggle="modal" data-target="#updateDepto" onclick="carga_ajax(<?php echo $dts->id_departamento; ?>,'ajax.php?mode=modaldpto','updateDepto');"
			data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-success"><i class="fa fa-edit"></i></a>

			 <a href="javascript:void(0);" data-toggle="modal" onclick="eliminarDepto(<?php echo $dts->id_departamento; ?>);"
			 data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></a>

	</td>
</tr>
<?php }; ?>
