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
				<button type="button" data-toggle="modal" data-target="#myModal" onclick="carga_ajax(<?php echo $dts->id_categorias; ?>,'ajax.php?mode=mod_update_cat','myModal');"
				title="Editar" class="btn btn-success"> <i class="fa fa-edit"></i> </button>

				 <button type="button" onclick="elimiarCat(<?php echo $dts->id_categorias; ?>);"
					title="Eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></button>
			</td>
		</tr>
		<?php } ?>
