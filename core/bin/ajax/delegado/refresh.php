<?php
$allDelg = $delegado->getDelegados();
foreach ($allDelg as $dts) {
 ?>
<tr>
	<td><?php echo $dts->id_delegado; ?></td>
	<td><?php echo $dts->nombre; ?></td>
	<td><?php echo $dts->descripcion; ?></td>
	<td align="center">
		<a href="javascript:void(0);" data-toggle="modal" data-target="#modaldeleg" onclick="carga_ajax(<?php echo $dts->id_delegado; ?>,'ajax.php?mode=modaldeleg','modaldeleg');"
			data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-success"><i class="fa fa-edit"></i></a>

			 <a href="javascript:void(0);" data-toggle="modal" onclick="eliminarDelegado(<?php echo $dts->id_delegado; ?>);"
			 data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></a>
	 </td>
	</td>
</tr>
<?php }; ?>
