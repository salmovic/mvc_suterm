<?php
$myPlaza=$plazas->getPlazasById($_POST['id']);
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
			 <form class="form-horizontal form-label-left" novalidate id="frmplaza">
 				<!-- Numro plaza -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_plaza">Numero Plaza<span class="required">*</span>
 					</label>
 					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="no_plaza" name="no_plaza" value="<?php echo $myPlaza[0]->no_plaza;?>" readonly="">
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- Nombre categoria -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre_cat">Nombre Categoria<span class="required">*</span>
 					</label>
 					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="nombre_cat" name="nombre_cat" value="<?php echo $myPlaza[0]->nombre_cat;?>">
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- Grupo Organico -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-6" for="grupo_organico">Grupo Organico / Nivel de Desempleño<span class="required">*</span>
 					</label>
 					<div class="col-md-3 col-sm-3 col-xs-3 form-group">
 						<!-- <input type="text" class="form-control has-feedback-left" id="grupo_organico" name="grupo_organico" placeholder="Nivel de desempeño"> -->
 						<select class="form-control has-feedback-left" name="grupo_organico">
 							<option value="-1">--Grupo Orgánico--</option>
							<?php for ($i=1; $i <= 16; $i++) {
								if ($myPlaza[0]->grupo_organico==$i) {
								?>
										<option value="<?php echo $i; ?>" selected=""><?php echo grupoOrganico($i); ?></option>
									<?php
								} else {
									?>
									<option value="<?php echo $i; ?>"><?php echo grupoOrganico($i); ?></option>
									<?php
								}}?>
 						</select>
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 					<div class="col-md-3 col-sm-3 col-xs-3 form-group">
 						<select class="form-control has-feedback-left" name="nivel_desempenio">
 							<option value="-1">--Nivel de Desempeño--</option>
 							<option value="1">Uno</option>
 							<option value="2">Dos</option>
 							<option value="3">Tres</option>
 							<option value="4">Cuatro</option>
 							<option value="5">Cinco</option>
 							<option value="6">Seis</option>
 							<option value="7">Siete</option>
 							<option value="8">Ocho</option>
 							<option value="9">Nueve</option>
 							<option value="10">Diez</option>
 							<option value="11">Once</option>
 							<option value="12">Doce</option>
 							<option value="13">Trece</option>
 						</select>
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- Nivel de remuneracion -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nivel_remuneracion">Nivel de remuneracion<span class="required">*</span>
 					</label>
 					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="nivel_remuneracion" name="nivel_remuneracion" placeholder="Nivel de remuneración ( $ )">
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- Grupo Nivel -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="grupo_nivel">Grupo Nivel<span class="required">*</span>
 					</label>
 					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="grupo_nivel" name="grupo_nivel" placeholder="Grupo Nivel">
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- Plan Carrera -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="plan_carrera">Plan de Carrera / Grupo / Unidad<span class="required">*</span>
 					</label>
 					<div class="col-md-2 col-sm-2 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="plan_carrera" name="plan_carrera" placeholder="Numero de plan de carrera">
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 					<div class="col-md-2 col-sm-2 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="grupo" name="grupo" placeholder="Grupo">
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 					<div class="col-md-2 col-sm-2 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="unidad" name="unidad" placeholder="Unidad">
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- token -->
 				<input type="hidden" name="token" value="setplaza">
 				<div class="form-group">
 					<div class="col-md-6 col-md-offset-3">
 						<button type="button" onclick="resetForm('frmplaza');" class="btn btn-primary">Cancel</button>
 						<button type="submit" class="btn btn-success" id="enviar_plaza">Enviar</button>
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
 <script type="text/javascript">
 /*Actualizar categorias*/
 $('#updatecat').on('click',function(e)
 {
	 e.preventDefault();
	 $.ajax({
			 //ruta archivo php
			 url: 'ajax.php?mode=update_cat',
			 type: 'post',
			 data:$('#frmcat_update').serialize(),
			 success: function(respuesta) {
				 console.log(respuesta);
				 if(respuesta==1){
					 alertify.success('Muy bien');
					carga_ajax(null,'ajax.php?mode=refresh_cat','tb_categoria');

				 }else{
					 alertify.error("No se pudo actualizar");
				 }
			 },
			 //ejecuta cuando hay un error en la peticion
			 error: function(jqXHR,estado,error) {
					 alertify.error('Ocurrio un error '+error);
			 },
			 //ejecuta al completar exitosamente la peticion
			 complete: function(jqXHR,estado) {

			 },
			 timeout: 10000
	 });
 });
 </script>
