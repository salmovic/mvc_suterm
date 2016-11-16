
<?php
$depto=$departamento->getDepartamentosById($_POST['id']);
 ?>
 <div class="modal-dialog">
	 <!-- Modal content-->
	 <div class="modal-content">
		 <div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal">&times;</button>
			 <h4 class="modal-title">Actualizar Departamento </h4>
		 </div>
		 <div class="modal-body">
			 <!-- form -->
			<form class="form-horizontal form-label-left" novalidate method="post" id="frmUpDepartamento">
				<!-- id departamente -->
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_departamento">No. Departamento<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
						<input type="text" class="form-control has-feedback-left" id="id_departamento" name="id_departamento" value="<?php echo $depto[0]->id_departamento; ?>" readonly="">
						<span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
					</div>
				</div>
				<!-- Nombre -->
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
						<input type="text" class="form-control has-feedback-left" id="nombre" name="nombre" onfocus="true" value="<?php echo $depto[0]->nombre; ?>">
						<span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
					</div>
				</div>
				<!-- Extencion -->
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="extencion">Extencion<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
						<input type="text" class="form-control has-feedback-left" id="extencion" name="extencion" value="<?php echo $depto[0]->no_extencion; ?>">
						<span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
					</div>
				</div>
				<!-- Telefono -->
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Telefono<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
						<input type="text" class="form-control has-feedback-left" id="telefono" name="telefono" value="<?php echo $depto[0]->telefono; ?>">
						<span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
					</div>
				</div>
				<!-- token -->
				<input type="hidden" name="token" value="up_departamento">
				<!-- Botones -->
				<div class="form-group">
					<div class="col-md-6 col-md-offset-3">
						<button type="button" data-dismiss="modal" class="btn btn-primary">Cancel</button>
						<button id="upDepto" type="submit" class="btn btn-success">Submit</button>
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
 $('#upDepto').on('click',function(e)
 {
  e.preventDefault();
  $.ajax({
 		 //ruta archivo php
 		 url: 'ajax.php?mode=departamento',
 		 type: 'post',
 		 data:$('#frmUpDepartamento').serialize(),
 		 success: function(respuesta) {
 			 console.log(respuesta);
 			 if(respuesta==1){
 				 alertify.success('Muy bien');
 				carga_ajax(null,'ajax.php?mode=refresh_depto','tb_depto');

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
