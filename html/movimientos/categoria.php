<?php
$id=$_POST['id'];
$emp=$movimientos->getEmpleadoSol($id);
if (sizeof($emp)>0) {
?>
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat_propuesta">Categoria Propuesta<span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12 form-group">
			<input type="text" class="form-control has-feedback-left" name="cat_propuesta" readonly="true" value="<?php echo $emp[0]->categoria; ?>">
			<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		</div>
	</div>
	<?php }else {?>
	<div class="form-group">
		<label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat_propuesta">Categoria Propuesta<span class="required">*</span>
		</label>
		<div class="col-md-6 col-sm-6 col-xs-12 form-group">
			<input type="text" class="form-control has-feedback-left" name="cat_propuesta" readonly="true" value="">
			<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		</div>
	</div>
<?php } ?>
