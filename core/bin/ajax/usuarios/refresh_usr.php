<?php
	$allUsr= $usr->getUsuarios();
	foreach ($allUsr as $dts) {
 ?>
<tr>
	<td><?php echo $dts->rpe_emp; ?></td>
	<td><?php echo $dts->nombre; ?></td>
	<td><?php echo $dts->email; ?></td>
	<td><?php echo $dts->passwd; ?></td>
	<td><?php echo $dts->tipo_usuario==0?"ESTANDAR":"ADMINISTRADOR"; ?></td>
	<td align="center">
		<button type="button" data-toggle="modal" data-target="#myModal" onclick="carga_ajax('<?php echo $dts->id_usuario; ?>','ajax.php?mode=modal_usr','myModal');"
		title="Editar" class="btn btn-success"> <i class="fa fa-edit"></i> </button>

		 <button type="button" onclick="delUsr('<?php echo $dts->id_usuario; ?>');"
			title="Eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></button>
	</td>
</tr>
<?php } ?>
