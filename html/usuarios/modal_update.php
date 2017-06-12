<?php
	$myUsr=$usr->getUsuarioById($_POST['id']);
 ?>
 <div class="modal-dialog">
	 <!-- Modal content-->
	 <div class="modal-content">
		 <div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal">&times;</button>
			 <h4 class="modal-title">Actualizar Usuario</h4>
		 </div>
		 <div class="modal-body">
			 <form class="form-horizontal form-label-left" novalidate id="frmUpUsuario" enctype="multipart/form-data">
				 <input type="hidden" name="id" value="<?php echo $_POST['id'];?>">
				 <!--rpe Empleado -->
				 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rpe">Empleado<span class="required">*</span>
					 </label>
					 <div class="col-md-6 col-sm-6 col-xs-12">
						 <input  class="form-control has-feedback-left" name="rpe" id="rpe"  readonly="" value="<?php echo $myUsr->rpe_emp; ?>">
						 <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					 </div>
				 </div>
				 <!--Tipo de Usuario -->
				<div class="form-group">
					<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo_usr">Tipo de usuario<span class="required">*</span>
					</label>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<select  class="form-control has-feedback-left" name="tipo_usr">
							<?php
							$tipoUsr = array(0=>'Estandar',1=>'Administrador');
							foreach($tipoUsr as $key=>$tus) {
								if( $key == $myUsr->tipo_usuario){ ?>
							<option selected="" value="<?php echo $key; ?>"><?php echo $tus; ?></option>
							<?php } else {?>
							<option value="<?php echo $key; ?>" ><?php echo $tus; ?></option>
							<?php }} ?>
						</select>
						<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					</div>
				</div>
				 <!-- Nombre Usuario -->
				 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="usr">Usuario<span class="required">*</span>
					 </label>
					 <div class="col-md-6 col-sm-6 col-xs-12 form-group">
						 <input type="text" class="form-control has-feedback-left" id="usr" name="usr" placeholder="Ingrese un nombre de usuario" value="<?php echo $myUsr->usr; ?>" onblur="_usr(this)">
						 <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					 </div>
				 </div>
				 <!-- Password -->
				 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pass">Contraseña<span class="required">*</span>
					 </label>
					 <div class="col-md-6 col-sm-6 col-xs-12 form-group">
						 <input type="password" class="form-control has-feedback-left" id="pass" name="pass" placeholder="Escriba una nueva contraseña" onblur="_passwd(this)">
						 <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					 </div>
				 </div>
				 <div class="form-group">
					 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pass2">Verificar Contraseña<span class="required">*</span>
					 </label>
					 <div class="col-md-6 col-sm-6 col-xs-12 form-group">
						 <input type="password" class="form-control has-feedback-left" id="pass2" name="pass2" placeholder="Confirmar Contraseña">
						 <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
					 </div>
				 </div>

				 <!-- token -->
				 <input type="hidden" name="token" value="upUsr">
				 <div class="form-group">
					 <div class="col-md-6 col-md-offset-3">
						 <button type="button"  class="btn btn-primary" data-dismiss="modal">Cancelar</button>
						 <button type="button" class="btn btn-success" id="upUsr">Actualizar</button>
					 </div>
				 </div>
			 </form>
			 <!-- prueba -->

		 <div>
		 <div class="modal-footer">
			 <button type="button" class="btn btn-default" data-dismiss="modal">Salir</button>
		 </div>
	 </div>
 </div>
 <script src="views/app/js/usuario/validaciones.js"></script>
 <script type="text/javascript">
 /*Actualizar categorias*/
 $('#upUsr').on('click',function(e)
 {
	 e.preventDefault();
	 $.ajax({
			 //ruta archivo php
			 url: 'ajax.php?mode=usr',
			 type: 'post',
			 data:$('#frmUpUsuario').serialize(),
			 success: function(respuesta) {
				 if(respuesta==1){
					 alertify.success('Se ha actualizado correctamente');
					carga_ajax( null, 'ajax.php?mode=refresh_usr','tb_usr' );
				 }else{
					 alertify.error(respuesta);
				 }
			 }
	 });
 });
 //passwd
 $('#pass').keyup(function(e) {

  var dom = $(this);
  if( dom.val().length < 25) {
 	dom.unbind('keypress');
  if(dom.val()!="") return;
  return;
  }
  lockTeclado(dom);
 });
 function _passwd(campo) {
 	var exR = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{4,15}/;
 	var msj = "Debe contener mayúsculas, minusculas, numeros y al menos un caracter especial.";
 	regExPattern(campo,exR,msj);
 }

 // Verificar contrasenia
 $('#pass2').keyup(function() {
	 console.log(1);
 	var pass2 = $(this).val();
 	var pass = $("#pass").val();
 	if( pass2!=pass ) {
 		$('#pass2').css({border: "1px solid red" });
 		return;
 	}
 	$('#pass2').css({border: "1px solid green" });
 });
 </script>
