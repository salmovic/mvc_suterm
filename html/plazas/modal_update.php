<?php
$myPlaza=$plazas->getPlazasById($_POST['id']);
 ?>
 <div class="modal-dialog">
	 <!-- Modal content-->
	 <div class="modal-content">
		 <div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal">&times;</button>
			 <h4 class="modal-title">Actualizar Categoría <small>(Debe activar las teclas mayusculas.)</small></h4>
		 </div>
		 <div class="modal-body">
			 <!-- form -->
			 <form class="form-horizontal form-label-left" novalidate id="frmplaza_update">
 				<!-- Numro plaza -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_plaza">Número Plaza<span class="required">*</span>
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
 						<input type="text" class="form-control has-feedback-left" id="nombre_cat" name="nombre_cat" value="<?php echo $myPlaza[0]->nombre_cat;?>" onblur="_nombre_cat(this)">
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- Grupo Organico -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-6" for="grupo_organico">Grupo Orgánico / Nivel de Desempleño<span class="required">*</span>
 					</label>
 					<div class="col-md-3 col-sm-3 col-xs-3">
 						<select class="form-control has-feedback-left" name="grupo_organico" onblur="validarSelect(this)">
 							<option value="-1">--Grupo Orgánico--</option>
							<?php for ($i=1; $i <= 16; $i++) {
								if ($myPlaza[0]->grupo_organico==$i) {
								?>
										<option value="<?php echo $i; ?>" selected=""><?php echo grupoOrganico($i); ?></option>
									<?php
								}
									?>
									<option value="<?php echo $i; ?>"><?php echo grupoOrganico($i); ?></option>
									<?php
								}?>
 						</select>
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 					<div class="col-md-3 col-sm-3 col-xs-3 ">
 						<select class="form-control has-feedback-left" name="nivel_desempenio" onblur="validarSelect(this)">
 							<option value="-1">--Nivel de Desempeño--</option>
							<?php for ($i=1; $i <= 16; $i++) {
								if ($myPlaza[0]->nivel_desempenio==$i) {
								?>
										<option value="<?php echo $i; ?>" selected=""><?php echo nivelDesempenio($i); ?></option>
									<?php
								}
									?>
									<option value="<?php echo $i; ?>"><?php echo nivelDesempenio($i); ?></option>
									<?php
								}?>
 						</select>
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- Nivel de remuneracion -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nivel_remuneracion">Nivel de remuneración<span class="required">*</span>
 					</label>
 					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="nivel_remuneracion" name="nivel_remuneracion" placeholder="Nivel de remuneración ( $ )"
						value="<?php echo $myPlaza[0]->nivel_remuneracion;?>" onblur="_nivel_remuneracion(this)">
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- Grupo Nivel -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="grupo_nivel">Grupo Nivel<span class="required">*</span>
 					</label>
 					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="grupo_nivel" name="grupo_nivel" placeholder="Grupo Nivel" value="<?php echo $myPlaza[0]->grupo_nivel;?>" onblur="_grupo_nivel(this)">
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- Plan Carrera -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="plan_carrera">Plan de Carrera / Grupo / Unidad<span class="required">*</span>
 					</label>
 					<div class="col-md-2 col-sm-2 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="plan_carrera" name="plan_carrera" placeholder="Numero de plan de carrera" value="<?php echo $myPlaza[0]->plan_carrera;?>" onblur="_plan_carrera(this)">
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 					<div class="col-md-2 col-sm-2 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="grupo" name="grupo" placeholder="Grupo" value="<?php echo $myPlaza[0]->grupo;?>" onblur="_grupo(this)">
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 					<div class="col-md-2 col-sm-2 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="unidad" name="unidad" placeholder="Unidad" value="<?php echo $myPlaza[0]->unidad;?>" onblur="_unidad(this)">
 						<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- token -->
 				<input type="hidden" name="token" value="updateplaza">
 				<div class="form-group">
 					<div class="col-md-6 col-md-offset-3">
 						<button type="button" data-dismiss="modal" class="btn btn-primary">Cancelar</button>
 						<button type="submit" class="btn btn-success" id="updateplaza">Actualizar</button>
 					</div>
 				</div>
 			</form>
	 		<!-- End form -->
		 <div>
		 <div class="modal-footer">
			 <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
		 </div>
	 </div>
 </div>
 <script src="views/app/js/plazas/validaciones.js"></script>
 <script type="text/javascript">
 /*Actualizar categorias*/
 $('#updateplaza').on('click',function(e)
 {
	 e.preventDefault();
	 $.ajax({
			 //ruta archivo php
			 url: 'ajax.php?mode=update_plaza',
			 type: 'post',
			 data:$('#frmplaza_update').serialize(),
			 success: function(respuesta) {
				 if(respuesta==1){
					 alertify.success('Se ha actualizado correctamente');
					carga_ajax(null,'ajax.php?mode=refresh_plaza','tb_plaza');
					return;
				 }else{
					 alertify.error(respuesta);
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
