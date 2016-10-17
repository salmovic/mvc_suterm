<?php
$myCt=$centroTrabajo->getCentroTrabajoById($_POST['id']);
 ?>
 <div class="modal-dialog">
	 <!-- Modal content-->
	 <div class="modal-content">
		 <div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal">&times;</button>
			 <h4 class="modal-title">Actualizar Centro de Trabajo </h4>
		 </div>
		 <div class="modal-body">
			 <!-- form -->
			 <form class="form-horizontal form-label-left" novalidate method="post" id="frmUpCenTrabajo">
 				<!-- Nomnbre -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_centro_trabajo">Id Centro de Trabajo<span class="required">*</span>
 					</label>
 					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="id_centro_trabajo" name="id_centro_trabajo" autofocus value="<?php echo $myCt[0]->id_centro_trabajo; ?>" readonly="true">
 						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- Nomnbre -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre Centro de Trabajo<span class="required">*</span>
 					</label>
 					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="nombre" name="nombre" value="<?php echo $myCt[0]->nombre; ?>">
 						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- Domicilio -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="domicilio">Domicilio<span class="required">*</span>
 					</label>
 					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="domicilio" name="domicilio"value="<?php echo $myCt[0]->domicilio; ?>">
 						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- Código Postal -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo_postal">Código Postal<span class="required">*</span>
 					</label>
 					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="codigo_postal" name="codigo_postal" value="<?php echo $myCt[0]->codigo_postal; ?>">
 						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- Municipio -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="municipio">Municipio<span class="required">*</span>
 					</label>
 					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="municipio" name="municipio" value="<?php echo $myCt[0]->municipio; ?>">
 						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- Entidad Federativa -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="entidad_fed">Entidad Federativa<span class="required">*</span>
 					</label>
 					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="entidad_fed" name="entidad_fed" value="<?php echo $myCt[0]->entidad_fed; ?>">
 						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- Numero de telefono -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Telefono<span class="required">*</span>
 					</label>
 					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="telefono" name="telefono" value="<?php echo $myCt[0]->telefono; ?>">
 						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!-- token -->
 				<input type="hidden" name="token" value="up_centrab">
 				<!-- Botones -->
 				<div class="form-group">
 					<div class="col-md-6 col-md-offset-3">
 						<button type="button" data-dismiss="modal" class="btn btn-primary">Salir</button>
 						<button id="updatect" type="submit" class="btn btn-success">Enviar</button>
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
 /*Actualizar centro de trabajo*/
 $('#updatect').on('click',function(e)
 {
  e.preventDefault();
  $.ajax({
 		 //ruta archivo php
 		 url: 'ajax.php?mode=updatecentrab',
 		 type: 'post',
 		 data:$('#frmUpCenTrabajo').serialize(),
 		 success: function(respuesta) {
 			 console.log(respuesta);
 			 if(respuesta==1){
 				 alertify.success('Muy bien');
 				carga_ajax(null,'ajax.php?mode=refresh_centrab','refresh_centrab');

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
