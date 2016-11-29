	<?php
	if (empty($_POST['txt'])){ echo -1; exit;}
		$dtsEmp = $movimientos->getEmpleadoSol($_POST['txt']);
		if (sizeof($dtsEmp)>0)
		{
	 ?>
	 <div class="row" >
			<div class="col-xs-6">
					<label for="tipoperm" class="col-sm-3 control-label">Tipo de Permiso:</label>
					<div class="col-sm-9">
					 <select class="form-control dtsMovimiento" name="tipo_perm">
						 <option value="1">--Seleccione el Tipo de Permiso--</option>
						 <?php
						 $allTp=$tipoPermiso->getTipoPermiso();
						 foreach ($allTp as $dts) {?>
							<option value="<?php echo $dts->id_tipo_permiso; ?>"><?php echo $dts->nombre; ?></option>
							<?php } ?>
					 </select>
				</div>
			 </div>
			 <div class="col-xs-3">
					 <div class="form-group">
						<label for="inputEmail3" class="col-sm-6 control-label">Folio:</label>
						<div class="col-sm-6">
							<input type="text" class="form-control dtsMovimiento" name="folio_mov" readonly="" value="<?php echo FOLIO;?>">
						</div>
					 </div>
			 </div>
			<div class="col-xs-3">
					 <div class="form-group">
					 <label for="rpe_empleado" class="col-sm-6 control-label">RPE Empleado:</label>
					 <div class="col-sm-6">
					 <input type="text" class="form-control dtsMovimiento" name="rpe_empleado" id="rpe_empleado" value="<?php echo $dtsEmp[0]->rpe; ?>" placeholder="Buscar..." readonly >
					 </div>
					 </div>
			 </div>
		 <div class="col-xs-5">
			Nombre Empleado:
			 <input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" readonly value="<?php echo $dtsEmp[0]->nombre; ?>">
		 </div>
		 <div class="col-xs-3">
			Categoría:
			 <input type="text" class="form-control" name="categoria" placeholder="Categoría" readonly value="<?php echo $dtsEmp[0]->categoria; ?>">
		 </div>

		 <div class="col-xs-2">
			No. Plaza:
			 <input type="text" class="form-control" name="no_plaza" placeholder="No. Plaza" readonly value="<?php echo $dtsEmp[0]->no_plaza; ?>">
		 </div>
		 <div class="col-xs-1">
			Grupo:
			 <input type="text" class="form-control" name="grupo" placeholder="Eje: 1" readonly value="<?php echo $dtsEmp[0]->grupo; ?>">
		 </div>
		 <div class="col-xs-1">
			Unidad:
			 <input type="text" class="form-control" name="unidad" placeholder="Eje: 3" readonly value="<?php echo $dtsEmp[0]->unidad; ?>">
		 </div>
	 </div>
	 <div class="row">
			<div class="ln_solid"></div>
			<div class="col-xs-6">
				 <div class="item form-group">
							<label class="control-label col-md-3">Adscrito al area: </label>
							<div class="controls">
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control" name="areaadscrita" placeholder="Eje: 3" readonly value="<?php echo $dtsEmp[0]->area_adscrita; ?>">
								</div>
							</div>
					 </div>
			</div>
		 <div class="col-xs-3">
				<div class="item form-group">
						 <label for="fecha_nacimiento" class="control-label col-md-3">Inicio</label>
						 <div class="controls">
							 <div class="col-md-9 col-sm-9 col-xs-12">
								 <input type="text" class="form-control has-feedback-left calendario dtsMovimiento" placeholder="Fecha de Inicio" aria-describedby="inputSuccess2Status4" name="fechainicio">
								 <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
								 <span id="inputSuccess2Status4" class="sr-only">(success)</span>
							 </div>
						 </div>
					</div>
		 </div>
		 <div class="col-xs-3">
				<div class="item form-group">
				<label for="fecha_nacimiento" class="control-label col-md-4">Fecha Fin</label>
						 <div class="controls">
							 <div class="col-md-8 col-sm-8 col-xs-12">
								 <input type="text" class="form-control has-feedback-left calendario dtsMovimiento" placeholder="Fecha Fin" aria-describedby="inputSuccess2Status4" name="fechafin">
								 <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
								 <span id="inputSuccess2Status4" class="sr-only">(success)</span>
							 </div>
						 </div>
					</div>
		 </div>
		</div>
	 </form>
	<?php }else{ ?>
		<div class="row" >
			 <div class="col-xs-6">
					 <label for="tipoperm" class="col-sm-3 control-label">Tipo de Permiso:</label>
					 <div class="col-sm-9">
						<select class="form-control dtsMovimiento" name="tipo_perm">
							<option value="1">--Seleccione el Tipo de Permiso--</option>
							<?php
							$allTp=$tipoPermiso->getTipoPermiso();
							foreach ($allTp as $dts) {?>
							 <option value="<?php echo $dts->id_tipo_permiso; ?>"><?php echo $dts->nombre; ?></option>
							 <?php } ?>
						</select>
				 </div>
				</div>
				<div class="col-xs-3">
						<div class="form-group">
						 <label for="inputEmail3" class="col-sm-6 control-label">Folio:</label>
						 <div class="col-sm-6">
							 <input type="text" class="form-control dtsMovimiento" name="folio_mov" readonly="" value="">
						 </div>
						</div>
				</div>
			 <div class="col-xs-3">
						<div class="form-group">
						<label for="rpe_empleado" class="col-sm-6 control-label">RPE Empleado:</label>
						<div class="col-sm-6">
						<input type="text" class="form-control dtsMovimiento" name="rpe_empleado" id="rpe_empleado" placeholder="Buscar..." readonly>
						</div>
						</div>
				</div>
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
		</div>
		<div class="row">
			 <div class="ln_solid"></div>
			 <div class="col-xs-6">
					<div class="item form-group">
							 <label class="control-label col-md-3">Adscrito al area: </label>
							 <div class="controls">
								 <div class="col-md-9 col-sm-9 col-xs-12">
									 <select class="form-control dtsMovimiento" name="areaadscrita" editable readonly>
										 <option value="OPERACION">OPERACION</option>
									</select>
								 </div>
							 </div>
						</div>
			 </div>
			<div class="col-xs-3">
				 <div class="item form-group">
							<label for="fecha_nacimiento" class="control-label col-md-3">Inicio</label>
							<div class="controls">
								<div class="col-md-9 col-sm-9 col-xs-12">
									<input type="text" class="form-control has-feedback-left calendario dtsMovimiento" placeholder="Fecha de Inicio" aria-describedby="inputSuccess2Status4" name="fechainicio">
									<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
									<span id="inputSuccess2Status4" class="sr-only">(success)</span>
								</div>
							</div>
					 </div>
			</div>
			<div class="col-xs-3">
				 <div class="item form-group">
				 <label for="fecha_nacimiento" class="control-label col-md-4">Fecha Fin</label>
							<div class="controls">
								<div class="col-md-8 col-sm-8 col-xs-12">
									<input type="text" class="form-control has-feedback-left calendario dtsMovimiento" placeholder="Fecha Fin" aria-describedby="inputSuccess2Status4" name="fechafin">
									<span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
									<span id="inputSuccess2Status4" class="sr-only">(success)</span>
								</div>
							</div>
					 </div>
			</div>
		 </div>
		</form>
	<?php } ?>
	<script type="text/javascript">
	/*/bootstrap-daterangepicker*/
	$('.calendario').daterangepicker({
	singleDatePicker: true,
	showDropdowns: true
	});

	</script>
