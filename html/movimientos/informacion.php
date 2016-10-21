	<?php
		$dts = $movimientos->getEmpleadoByRpe($_POST['id']);
		if (sizeof($dts)>0)
		{
	 ?>
	<!-- Nombre -->
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre Empleado<span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12 form-group">
			<input type="text" class="form-control has-feedback-left" id="nombre" name="nombre" placeholder="Nombre completo" readonly="" value="<?php echo $dts[0]->nombre; ?>">
			<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		</div>
	</div>
	<!-- Categoria -->
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoria">Categoria<span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12 form-group">
			<input type="text" class="form-control has-feedback-left" id="categoria" name="categoria" placeholder="Categoria" readonly="" value="<?php echo $dts[0]->categoria; ?>">
			<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		</div>
	</div>
	<!-- Numero plaza -->
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="noplaza">Numero Plaza<span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12 form-group">
			<input type="text" class="form-control has-feedback-left" id="noplaza" name="noplaza" placeholder="Numero Plaza" readonly="" value="<?php echo $dts[0]->plaza; ?>">
			<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		</div>
	</div>
	<!-- Grupo -->
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="grupo">Grupo<span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12 form-group">
			<input type="text" class="form-control has-feedback-left" id="grupo" name="grupo" placeholder="Grupo" readonly="" value="<?php echo $dts[0]->grupo; ?>">
			<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		</div>
	</div>
	<!-- Area -->
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="area">Area<span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12 form-group">
			<input type="text" class="form-control has-feedback-left" id="area" name="area" placeholder="Area" readonly="" value="<?php echo $dts[0]->departamento; ?>">
			<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		</div>
	</div>
	<?php }else{ ?>
		<!-- Nombre -->
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre Empleado<span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12 form-group">
				<input type="text" class="form-control has-feedback-left" id="nombre" name="nombre" placeholder="Nombre completo" readonly="" >
				<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
			</div>
		</div>
		<!-- Categoria -->
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoria">Categoria<span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12 form-group">
				<input type="text" class="form-control has-feedback-left" id="categoria" name="categoria" placeholder="Categoria" readonly="">
				<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
			</div>
		</div>
		<!-- Numero plaza -->
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="noplaza">Numero Plaza<span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12 form-group">
				<input type="text" class="form-control has-feedback-left" id="noplaza" name="noplaza" placeholder="Numero Plaza" readonly="">
				<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
			</div>
		</div>
		<!-- Grupo -->
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="grupo">Grupo<span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12 form-group">
				<input type="text" class="form-control has-feedback-left" id="grupo" name="grupo" placeholder="Grupo" readonly="">
				<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
			</div>
		</div>
		<!-- Area -->
		<div class="form-group">
			<label class="control-label col-md-3 col-sm-3 col-xs-12" for="area">Area<span class="required">*</span>
			</label>
			<div class="col-md-6 col-sm-6 col-xs-12 form-group">
				<input type="text" class="form-control has-feedback-left" id="area" name="area" placeholder="Area" readonly="">
				<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
			</div>
		</div>
	<?php } ?>
