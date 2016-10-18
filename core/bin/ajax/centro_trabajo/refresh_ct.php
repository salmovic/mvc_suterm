<?php
$allCt = $centroTrabajo->getCentroTrabajo();
foreach ($allCt as $dts)
{
?>
<tr>
	<td><?php echo $dts->id_centro_trabajo; ?></td>
	<td><?php echo $dts->nombre; ?></td>
	<td><?php echo $dts->domicilio; ?></td>
	<td><?php echo $dts->codigo_postal; ?></td>
	<td><?php echo $dts->municipio; ?></td>
	<td><?php echo $dts->entidad_fed; ?></td>
	<td><?php echo $dts->telefono; ?></td>
	<td align="center">
		<button type="button" data-toggle="modal" data-target="#up_centrab" onclick="carga_ajax(<?php echo $dts->id_centro_trabajo; ?>,'ajax.php?mode=modalcentrab','up_centrab');"
			title="Editar" class="btn btn-success"> <i class="fa fa-edit"></i> </button>
		<button type="button" onclick="delCenTrab(<?php echo $dts->id_centro_trabajo; ?>);"
			 title="Eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></button>
	</td>
</tr>
<?php }; ?>
