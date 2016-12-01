<?php
$allSust = $movimientos->getSustitutos( FOLIO );
$cont = sizeof($allSust);
foreach ($allSust as $dts) {
?>
	<tr>
		<th scope="row"><?php echo $dts->rpe; ?></th>
			<td><?php echo $dts->nombre; ?></td>
			<td><?php echo $dts->cat_actual; ?></td>
			<td><?php echo $dts->cat_propuesta; ?></td>
			<td><?php echo $dts->no_plaza; ?></td>
			<td><?php echo $dts->fecha_inicio; ?></td>
			<td><?php echo $dts->fecha_fin; ?></td>
			<td align="center">
				<button type="button" title="Editar" class="btn btn-danger" onclick="deleteSust('<?php echo $dts->id; ?>','upMovimiento');"
				><span class="glyphicon glyphicon-trash"></span></i></button>
			</td>
	</tr>
<?php
}?>
<th scope="row">--</th>
	<td>--</td>
	<td>--</td>
	<td><?php echo $allSust[$cont-1]->cat_actual; ?></td>
	<td><?php echo $allSust[$cont-1]->plazaactual; ?></td>
	<td>--</td>
	<td>--</td>
	<td align="center">
		<button type="button" data-toggle="modal" data-target="#upMovimiento" title="Editar" class="btn btn-success" onclick="modalMovimiento('<?php echo $allSust[$cont-1]->rpe; ?>','upMovimiento');"
		><i class="fa fa-edit"></i></button>
	</td>
</tr>
