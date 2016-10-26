	<?php
		$dts = $movimientos->getEmpleadoByRpe($_POST['rpe_emp']);
		if (sizeof($dts)>0)
		{
	 ?>
	 <div class="col-xs-5">
	  Nombre Empleado:
	 	<input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" readonly value="<?php echo $dts[0]->nombre; ?>">
	 </div>
	 <div class="col-xs-3">
	  Categoría:
	 	<input type="text" class="form-control" name="categoria" placeholder="Categoría" readonly value="<?php echo $dts[0]->nomcat; ?>">
	 </div>

	 <div class="col-xs-2">
	  No. Plaza:
	 	<input type="text" class="form-control" name="no_plaza" placeholder="No. Plaza" readonly value="<?php echo $dts[0]->noplaza; ?>">
	 </div>
	 <div class="col-xs-1">
	  Grupo:
	 	<input type="text" class="form-control" name="grupo" placeholder="Eje: 1" readonly value="<?php echo $dts[0]->grupo; ?>">
	 </div>
	 <div class="col-xs-1">
	  Unidad:
	 	<input type="text" class="form-control" name="unidad" placeholder="Eje: 3" readonly value="<?php echo $dts[0]->unidad; ?>">
	 </div>
	<?php }else{ ?>
		<div class="col-xs-5">
		 Nombre Empleado:
			<input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" readonly>
		</div>
		<div class="col-xs-3">
		 Categoría:
			<input type="text" class="form-control" name="categoria" placeholder="Categoría" readonly value="">
		</div>

		<div class="col-xs-2">
		 No. Plaza:
			<input type="text" class="form-control" name="no_plaza" placeholder="No. Plaza" readonly value="">
		</div>
		<div class="col-xs-1">
		 Grupo:
			<input type="text" class="form-control" name="grupo" placeholder="Eje: 1" readonly>
		</div>
		<div class="col-xs-1">
		 Unidad:
			<input type="text" class="form-control" name="unidad" placeholder="Eje: 3" readonly>
		</div>
	<?php } ?>
