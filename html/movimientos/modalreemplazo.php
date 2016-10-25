 <div class="modal-dialog">
	 <!-- Modal content-->
	 <div class="modal-content">
		 <div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal">&times;</button>
			 <h4 class="modal-title">Seleccionar Sustituto</h4>
		 </div>
		 <div class="modal-body">
			 <!-- form -->
			<form class="form-horizontal form-label-left" novalidate>
				<!-- folio movimiento -->
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="folio_mov">Folio Movimiento<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
						<input type="text" class="form-control has-feedback-left" name="folio_mov" readonly="true" value="<?php echo $_POST['folio_mov']; ?>" readonly="">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>
				</div>
				<div class="ln_solid"></div>
				<!-- rpe_empleado -->
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="rpe_empleado">No. Departamento<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
						<select class="form-control">
							 <option>Choose option</option>
							 <option>Option one</option>
							 <option>Option two</option>
							 <option>Option three</option>
							 <option>Option four</option>
						 </select>
					</div>
				</div>
				<div class="ln_solid"></div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat_actual">Categoria Actual<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
						<input type="text" class="form-control has-feedback-left" name="cat_actual" readonly="true" value="">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat_propuesta">Categoria Propuesta<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
						<input type="text" class="form-control has-feedback-left" name="cat_propuesta" readonly="true" value="<?php echo $_POST['categoria']; ?>">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>
				</div>
				<!--Numero de Plaza -->
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_plaza">No. Plaza<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
						<input type="text" class="form-control has-feedback-left" name="no_plaza" readonly="true" value="<?php echo $_POST['no_plaza']; ?>">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>
				</div>
				<!--Fecha de Inicio -->
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_plaza">Fecha Incio<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
						<input type="text" class="form-control has-feedback-left" name="no_plaza"  value="">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>
				</div>
				<!--Fecha Fin -->
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_plaza">Fecha Fin<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
						<input type="text" class="form-control has-feedback-left" name="no_plaza"  value="">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>
				</div>
			</form>
	 		<!-- End form -->
		 </div>
		 <div class="modal-footer">
			 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		 </div>
	 </div>
 </div>
