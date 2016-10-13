<?php
$myCat=$categoria->getCategoriasById($_POST['id']);
 ?>
 <div class="modal-dialog">
	 <!-- Modal content-->
	 <div class="modal-content">
		 <div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal">&times;</button>
			 <h4 class="modal-title">Actualizar Categoria</h4>
		 </div>
		 <div class="modal-body">
			 <!-- form -->
	 		<form class="form-horizontal form-label-left" novalidate id="frmcat">
	 			<!-- Id Categoria -->
	 			<div class="form-group">
	 				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_categorias">ID categoria <span class="required">*</span>
	 				</label>
	 				<div class="col-md-6 col-sm-6 col-xs-12 form-group">
	 					<input type="text" class="form-control has-feedback-left" id="id_categorias" name="id_categorias" readonly value="<?php echo $myCat[0]->id_categorias; ?>">
	 					<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	 				</div>
	 			</div>
	 			<!-- Numro plaza -->
	 			<div class="form-group">
	 				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_plaza">Numero Plaza <span class="required">*</span>
	 				</label>
	 				<div class="col-md-6 col-sm-6 col-xs-12 form-group">
	 					<input type="text" class="form-control has-feedback-left" id="no_plaza" name="no_plaza" value="<?php echo $myCat[0]->no_plaza; ?>">
	 					<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	 				</div>
	 			</div>
	 			<!-- Categoría -->
	 			<div class="form-group">
	 				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoria">Categoría<span class="required">*</span>
	 				</label>
	 				<div class="col-md-6 col-sm-6 col-xs-12 form-group">
	 					<input type="text" class="form-control has-feedback-left" id="categoria" name="categoria" value="<?php echo $myCat[0]->categoria; ?>">
	 					<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	 				</div>
	 			</div>
	 			<!-- Plaza actual -->
	 			<div class="form-group">
	 				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="plaza_actual">Plaza Actual<span class="required">*</span>
	 				</label>
	 				<div class="col-md-6 col-sm-6 col-xs-12 form-group">
	 					<input type="text" class="form-control has-feedback-left" id="plaza_actual" name="plaza_actual" value="<?php echo $myCat[0]->plaza_actual; ?>">
	 					<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	 				</div>
	 			</div>
	 			<!-- Grupo Organico -->
	 			<div class="form-group">
	 				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="grupo_organico">Grupo Organico<span class="required">*</span>
	 				</label>
	 				<div class="col-md-6 col-sm-6 col-xs-12 form-group">
	 					<input type="text" class="form-control has-feedback-left" id="grupo_organico" name="grupo_organico" value="<?php echo $myCat[0]->grupo_organico; ?>">
	 					<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	 				</div>
	 			</div>
	 			<!-- Nivel de desempeño -->
	 			<div class="form-group">
	 				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nivel_desempenio">Nivel de desempeño<span class="required">*</span>
	 				</label>
	 				<div class="col-md-6 col-sm-6 col-xs-12 form-group">
	 					<input type="text" class="form-control has-feedback-left" id="nivel_desempenio" name="nivel_desempenio" value="<?php echo $myCat[0]->nivel_desempenio; ?>">
	 					<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	 				</div>
	 			</div>
	 			<!-- Nivel de remuneracion -->
	 			<div class="form-group">
	 				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nivel_remuneracion">Nivel de remuneracion<span class="required">*</span>
	 				</label>
	 				<div class="col-md-6 col-sm-6 col-xs-12 form-group">
	 					<input type="text" class="form-control has-feedback-left" id="nivel_remuneracion" name="nivel_remuneracion" value="<?php echo $myCat[0]->nivel_remuneracion; ?>">
	 					<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	 				</div>
	 			</div>
	 			<!-- Grupo Nivel -->
	 			<div class="form-group">
	 				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="grupo_nivel">Grupo Nivel<span class="required">*</span>
	 				</label>
	 				<div class="col-md-6 col-sm-6 col-xs-12 form-group">
	 					<input type="text" class="form-control has-feedback-left" id="grupo_nivel" name="grupo_nivel" value="<?php echo $myCat[0]->grupo_nivel; ?>">
	 					<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	 				</div>
	 			</div>
	 			<!-- Plan Carrera -->
	 			<div class="form-group">
	 				<label class="control-label col-md-3 col-sm-3 col-xs-12" for="plan_carrera">Plan de Carrera<span class="required">*</span>
	 				</label>
	 				<div class="col-md-6 col-sm-6 col-xs-12 form-group">
	 					<input type="text" class="form-control has-feedback-left" id="plan_carrera" name="plan_carrera" value="<?php echo $myCat[0]->plan_carrera; ?>">
	 					<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	 				</div>
	 			</div>
	 			<!-- token -->
	 			<input type="hidden" name="token" value="ok">
	 			<div class="form-group">
	 				<div class="col-md-6 col-md-offset-3">
	 					<button type="submit" class="btn btn-primary" data-dismiss="modal" >Cancel</button>
	 					<button type="submit" class="btn btn-success" id="enviar">Enviar</button>
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
