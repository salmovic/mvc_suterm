<?php
	$myCat = $categoria->getCategoriasById( $_POST['id'] );
	echo $myCat->rpe;
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
			 <form class="form-horizontal form-label-left" novalidate method="post" id="frmCatUp">
				 <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
				 <!--rpe Empleado -->
				 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rpe">Empleado<span class="required">*</span>
					 </label>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<select  class="form-control has-feedback-left" name="rpe_empleado" autofocus="" onblur="validarSelect(this)">
							 <option value="-1">--Seleccione un empleado--</option>
							 <?php
								$allEmp = $empleado->getEmpleados();
								echo $myCat->rpe;
								foreach ($allEmp as $dts) {
									if( $dts->rpe == $myCat->rpe ){
							 ?>
							 <option selected="" value="<?php echo $dts->rpe; ?>"><?php echo $dts->nombre." ".$dts->apellidos; ?></option>
							 <?php }else{?>
								 <option value="<?php echo $dts->rpe; ?>"><?php echo $dts->nombre." ".$dts->apellidos; ?></option>
								 <?php } }?>
							</select>
						 <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>
					</div>
				 <!-- Numero de Plaza -->
				 <div class="item form-group">
					 <label for="no_plaza" class="control-label col-md-3">Plaza<span class="required">*</span></label>
					 <div class="col-md-6 col-sm-6 col-xs-12">
						 <select class="form-control has-feedback-left" name="no_plaza" onblur="validarSelect(this)">
							 <option value="-1">--Seleccionar Plaza--</option>
							 <?php
								$allPlaza = $plazas->getPlazas();
								foreach ($allPlaza as $dts) {
									if( $dts->no_plaza == $myCat->no_plaza ){
							 ?>
							 <option selected="" value="<?php echo $dts->no_plaza; ?>"><?php echo $dts->no_plaza." | ".$dts->nombre_cat; ?></option>
							 <?php }else{?>
								 <option value="<?php echo $dts->no_plaza; ?>"><?php echo $dts->no_plaza." | ".$dts->nombre_cat; ?></option>
								 <?php } } ?>
						 </select>
						 <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
					 </div>
				 </div>
				 <div class="item form-group">
					 <label for="no_plaza" class="control-label col-md-3">Estado en el puesto<span class="required">*</span></label>
					 <div class="col-md-6 col-sm-6 col-xs-12">
						 <?php $aptitud=""; $base="";
						 	if($myCat->estatus==0){ $aptitud='checked';}
							else { $base='checked';}
						 ?>
							 <label for="status" class="radio-inline">
								 <input <?php echo $aptitud; ?> type="radio" name="status" value="0" > Aptitud
							 </label>
						 <label for="status" class="radio-inline">
							 <input <?php echo $base;?> type="radio" name="status" value="1" > Base
						 </label>
					 </div>
				 </div>
				 <div class="form-group">
					 <div class="col-md-6 col-md-offset-3">
						<input type="hidden" name="token" value="upcategoria">
						 <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
						 <button id="upCat" type="button" class="btn btn-success">Submit</button>
					 </div>
				 </div>
			 </div>
				</form>
	 		<!-- End form -->
			<div class="modal-footer">
 			 <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
 		 </div>
		 </div>
	 </div>
 </div>
 <script src="views/app/js/categorias/categorias.js"></script>
 <script type="text/javascript">
 /*Actualizar centro de trabajo*/
 $('#upCat').on('click',function(e)
 {
  e.preventDefault();
  $.ajax({
 		 //ruta archivo php
 		 url: 'ajax.php?mode=categoria',
 		 type: 'post',
 		 data:$('#frmCatUp').serialize(),
 		 success: function(respuesta)
		 {
 			 console.log(respuesta);
 			 if(respuesta==1){
 				 alertify.success('Se actualizo correctamente');
 				carga_ajax(null,'ajax.php?mode=refreshCat','tb_cat');
 			 }else{
 				 alertify.error("No se pudo actualizar");
 			 }
 		 },
 		 //ejecuta cuando hay un error en la peticion
 		 error: function(jqXHR,estado,error) {
 				 alertify.error('Ocurrio un error: '+error);
 		 },
 		 //ejecuta al completar exitosamente la peticion
 		 complete: function(jqXHR,estado) {},
 		 timeout: 10000
  });
 });
 </script>
