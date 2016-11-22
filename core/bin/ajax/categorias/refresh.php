<?php
$allCat = $categoria->getCategorias();
foreach ($allCat as $dts) {
 ?>
<tr>
	<td><?php echo $dts->rpe; ?></td>
	<td><?php echo $dts->nombre; ?></td>
	<td><?php echo $dts->no_plaza; ?></td>
	<td><?php echo $dts->nombre_cat; ?></td>
	<td><?php echo estatus($dts->estatus); ?></td>
	<td align="center">
		<button type="button" data-toggle="modal" data-target="#modalcat" onclick="carga_ajax(<?php echo $dts->id; ?>,'ajax.php?mode=modalcat','modalcat');"
			title="Editar" class="btn btn-success"><i class="fa fa-edit"></i></button>

	 <button type="button" onclick="eliminarCategoria(<?php echo $dts->id; ?>);"
	 title="Eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></button>
	 </td>
	</td>
</tr>
<?php }; ?>
