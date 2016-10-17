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
		<a href="javascript:void(0);" data-toggle="modal" data-target="#up_centrab" onclick="carga_ajax(<?php echo $dts->id_centro_trabajo; ?>,'ajax.php?mode=modalcentrab','up_centrab');"
		 data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-success"><i class="fa fa-edit"></i></a>
		<a href="javascript:void(0);" data-toggle="modal" onclick="delCenTrab(<?php echo $dts->id_centro_trabajo; ?>)" data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-danger"><i class="fa fa-trash"></i></a>
	</td>
</tr>
<?php }; ?>
