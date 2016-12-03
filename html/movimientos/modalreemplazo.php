<?php
 $dtsEmp = $movimientos->getEmpleadoSol($_POST['rpe']);
 ?>
 <div class="modal-dialog">
	 <!-- Modal content-->
	 <div class="modal-content">
		 <div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal">&times;</button>
			 <h4 class="modal-title">Seleccionar Sustituto</h4>
		 </div>
		 <div class="modal-body">
			 <!-- form -->
			<form class="form-horizontal form-label-left" novalidate id="setSustituto">
				<!-- folio movimiento -->
				<div class="form-group">
						<input type="hidden" name="folio_mov" value="<?php echo FOLIO; ?>" readonly="">
				</div>
				<!-- rpe_empleado -->
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="rpe_empleado">Empleado:<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
						<select class="form-control" name="rpe_empleado">
								<option value="-1">--Seleccionar Empleado--</option>
								<?php
								$no_plaza = $dtsEmp[0]->no_plaza; //numero de plaza
								$sugerido = $movimientos->getEmpleadoSugerido($no_plaza);
								foreach ($sugerido as $datos) {
									?>
									<option value="<?php echo $datos->rpe; ?>"><?php echo $datos->rpe." | ".$datos->nombre; ?></option>
									<?php } ?>
						 </select>
					</div>
				</div>
				<div class="ln_solid"></div>
				<div id="getCategoria">
						<div class="form-group">
							<label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat_actual">Categoria Actual<span class="required">*</span>
							</label>
							<div class="col-md-6 col-sm-6 col-xs-12 form-group">
								<input type="text" class="form-control has-feedback-left" name="cat_actual" readonly="true" value="">
								<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
							</div>
						</div>
				</div>
					<div class="form-group">
						<label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat_propuesta">Categoria Propuesta<span class="required">*</span>
						</label>
						<div class="col-md-6 col-sm-6 col-xs-12 form-group">
							<input type="text" class="form-control has-feedback-left" name="cat_propuesta" readonly="true" value="<?php echo $dtsEmp[0]->categoria; ?>">
							<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
						</div>
					</div>

				<!--Numero de Plaza -->
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_plaza">No. Plaza<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
						<input type="text" class="form-control has-feedback-left" name="no_plaza" readonly="true" value="<?php echo $dtsEmp[0]->no_plaza; ?>">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>
				</div>
				<!--Fecha de Inicio -->
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="fecha_in">Fecha Incio<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
						<input type="text" class="form-control has-feedback-left calendario" name="fecha_in"  value="">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>
				</div>
				<!--Fecha Fin -->
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="fecha_fin">Fecha Fin<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12 form-group">
						<input type="text" class="form-control has-feedback-left calendario" name="fecha_fin"  value="">
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>
				</div>
				<!-- token -->
 				<input type="hidden" name="token" value="setSustituto">
 				<div class="form-group">
 					<div class="col-md-6 col-md-offset-3">
 						<button type="button" data-dismiss="modal" class="btn btn-primary">Cancel</button>
 						<input type="submit" class="btn btn-success" id="sustituto" value="Guardar">
 					</div>
 				</div>
			</form>
	 		<!-- End form -->
			<div id="resp">

			</div>
		 </div>
		 <div class="modal-footer">
			 <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
		 </div>
	 </div>
 </div>
 <script type="text/javascript">
$(document).ready(function(){
	/***
	* guardar informacion del empleado sustituto
	*/
	$('#sustituto').on('click',function(e){
		e.preventDefault();
		var dts = $('#setSustituto').serialize();
		$('#resp').text( dts );
		$.ajax({
			url:'ajax.php?mode=movimiento',
			type:'POST',
			data: dts,
			success:function(resp) {
				console.log(resp);
				if( resp == 1 ) {
					alertify.success('Se ha guardado correctamente');
					 carga_ajax(null,'ajax.php?mode=refresh_mov','tbMovimiento');
				 }
			}
		});
	});
	/**
	* cargar imformacion del sustituto
	*/
	$("select[name='rpe_empleado']").on('change',function() {
	 var rpe = $("select[name='rpe_empleado']").val();
	 if (rpe==-1) return;
	 carga_ajax(rpe,'ajax.php?mode=getcat_emp','getCategoria');
	});
	/***
	* calendario
	*/
	$('.calendario').daterangepicker({
	singleDatePicker: true,
	showDropdowns: true
	});
});
 </script>
