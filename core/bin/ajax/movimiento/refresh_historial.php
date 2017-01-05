<?php
$allMov = $movimientos->getHistorial();
foreach ($allMov as $dts) {
 ?>
<tr>
	<td><?php echo $dts->no_folio; ?></td>
	<td><?php echo $dts->fecha; ?></td>
	<td><?php echo $dts->solicitante; ?></td>
	<td><?php echo $dts->periodo; ?></td>
	<td align="center">
		<button type="button"  onclick="imprimirPDF('<?php echo $dts->no_folio;?>');"
			title="Ver PDF" class="btn btn-success"><i class="fa fa-eye"></i></button>
	<button type="button" onclick="deleteMovimiento('<?php echo $dts->no_folio; ?>');"
	 title="Eliminar" class="btn btn-danger" <?php echo $desabilitar; ?>><i class="fa fa-trash"></i></button>

</tr>
<?php }; ?>
