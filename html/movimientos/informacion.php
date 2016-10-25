	<?php
		$dts = $movimientos->getEmpleadoByRpe($_POST['id']);
		if (sizeof($dts)>0)
		{
	 ?>
	 <div class="col-xs-5">
	  Nombre Empleado:
	 	<input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" readonly>
	 </div>
	 <div class="col-xs-3">
	  Categoría:
	 	<input type="text" class="form-control" name="categoria" placeholder="Categoría" readonly value="categorias desde lejos">
	 </div>

	 <div class="col-xs-2">
	  No. Plaza:
	 	<input type="text" class="form-control" name="no_plaza" placeholder="No. Plaza" readonly value="33">
	 </div>
	 <div class="col-xs-1">
	  Grupo:
	 	<input type="text" class="form-control" name="grupo" placeholder="Eje: 1" readonly>
	 </div>
	 <div class="col-xs-1">
	  Unidad:
	 	<input type="text" class="form-control" name="unidad" placeholder="Eje: 3" readonly>
	 </div>
	<?php }else{ ?>
		<div class="col-xs-5">
		 Nombre Empleado:
			<input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" readonly>
		</div>
		<div class="col-xs-3">
		 Categoría:
			<input type="text" class="form-control" name="categoria" placeholder="Categoría" readonly value="cat">
		</div>

		<div class="col-xs-2">
		 No. Plaza:
			<input type="text" class="form-control" name="no_plaza" placeholder="No. Plaza" readonly value="33">
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
