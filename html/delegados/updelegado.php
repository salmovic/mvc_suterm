<?php
$myDel=$delegado->getDelegadosById($_POST['id']);
 ?>
 <div class="modal-dialog">
	 <!-- Modal content-->
	 <div class="modal-content">
		 <div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal">&times;</button>
			 <h4 class="modal-title">Actualizar Delegado <small>(Debe activar las teclas mayúsculas.)</small></h4>
		 </div>
		 <div class="modal-body">
			 <!-- form -->
			 <form class="form-horizontal form-label-left" novalidate method="post" id="frmUpDeleg">
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_delegado">Id delegado <span class="required">*</span>
 					</label>
 					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="id_delegado" name="id_delegado" readonly="true" value="<?php echo $myDel[0]->id_delegado; ?>">
 						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
 				<!--rpe Empleado -->
 				<div class="form-group">
 					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="rpe_empleado">RPE Empleado <span class="required">*</span>
 					</label>
 					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
 						<input type="text" class="form-control has-feedback-left" id="rpe_empleado" name="rpe_empleado" readonly="true" value="<?php echo $myDel[0]->rpe_delegado; ?>">
 						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
 					</div>
 				</div>
				<!-- Descripcion -->
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">Descripción <span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
						<!-- <input type="text" class="form-control has-feedback-left" id="descripcion" name="descripcion" placeholder="Descripcion"> -->
						<textarea name="descripcion" id="descripcion" rows="3" cols="5" class="form-control" placeholder="Agregar una descripción" onblur="_descripcion(this)"><?php echo $myDel[0]->descripcion; ?></textarea>
					</div>
				</div>
 				<div class="form-group">
 					<div class="col-md-6 col-md-offset-3">
 						<input type="hidden" name="token" value="updatedeleg">
 						<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
 						<button id="updatedeleg" type="submit" class="btn btn-success">Actualizar</button>
 					</div>
 				</div>
 			</form>
	 		<!-- End form -->
		 </div>
		 <div class="modal-footer">
			 <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
		 </div>
	 </div>
 </div>
 <script type="text/javascript">
 /*Actualizar centro de trabajo*/
 $('#updatedeleg').on('click',function(e)
 {
  e.preventDefault();
  $.ajax({
 		 //ruta archivo php
 		 url: 'ajax.php?mode=delegado',
 		 type: 'post',
 		 data:$('#frmUpDeleg').serialize(),
 		 success: function(respuesta) {
 			 console.log(respuesta);
 			 if(respuesta==1){
 				 alertify.success('El registro se actualizo correctamente');
 				carga_ajax(null,'ajax.php?mode=refresh_deleg','tb_deleg');
 			 }else{
 				 alertify.error(respuesta);
 			 }
 		 }
  });
 });
 </script>
