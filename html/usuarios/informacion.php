<?php
if (isset( $_POST['id'] )) {
	$x = $usr->getEmpleado($_POST['id']);
 ?>
<!-- Nombre  -->
<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre<span class="required">*</span>
	</label>
	<div class="col-md-6 col-sm-6 col-xs-12 form-group">
		<input type="text" class="form-control has-feedback-left" id="nombre" name="nombre" placeholder="Ingrese un nombre de usuario" readonly="" value="<?php echo $x->nombre; ?>">
		<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
	</div>
</div>
<!-- Apellidos -->
<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="app">Apellidos<span class="required">*</span>
	</label>
	<div class="col-md-6 col-sm-6 col-xs-12 form-group">
		<input type="text" class="form-control has-feedback-left" id="app" name="app" placeholder="Ingrese un nombre de usuario" readonly="" value="<?php echo $x->apellidos; ?>">
		<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
	</div>
</div>
<!-- Correo -->
<div class="form-group">
	<label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Correo<span class="required">*</span>
	</label>
	<div class="col-md-6 col-sm-6 col-xs-12 form-group">
		<input type="text" class="form-control has-feedback-left" id="email" name="email" placeholder="Ingrese un nombre de usuario" readonly="" value="<?php echo $x->email; ?>">
		<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
	</div>
</div>
<?php } ?>
