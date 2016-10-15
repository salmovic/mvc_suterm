		<?php
			$allCat= $categoria->getCategorias();
			foreach ($allCat as $dts) {
		 ?>
		<tr>
			<td><?php echo $dts->id_categorias; ?></td>
			<td><?php echo $dts->no_plaza; ?></td>
			<td><?php echo $dts->categoria; ?></td>
			<td><?php echo $dts->plaza_actual; ?></td>
			<td><?php echo $dts->grupo_organico; ?></td>
			<td><?php echo $dts->nivel_desempenio; ?></td>
			<td><?php echo $dts->nivel_remuneracion; ?></td>
			<td><?php echo $dts->grupo_nivel; ?></td>
			<td><?php echo $dts->plan_carrera; ?></td>
			<td align="center">
			 <a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" onclick="carga_ajax(<?php echo $dts->id_categorias; ?>,'ajax.php?mode=mod_update_cat','myModal');"
				 data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-success"><i class="fa fa-edit"></i></a>

					<a href="javascript:void(0);" data-toggle="modal" onclick="elimiarCat(<?php echo $dts->id_categorias; ?>);"
					data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></a>
			</td>
		</tr>
		<?php } ?>
