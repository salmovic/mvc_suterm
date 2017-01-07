 <div class="modal-dialog">
	 <!-- Modal content-->
	 <div class="modal-content">
		 <div class="modal-header">
			 <button type="button" class="close" data-dismiss="modal">&times;</button>
			 <h4 class="modal-title">Actualizar foto de perfil</h4>
		 </div>
		 <div class="modal-body">
			 <!-- form -->
			 <form class="form-horizontal form-label-left" novalidate method="post" enctype="multipart/form-data" id="frmPerfil">
				 <!-- Fotografia -->
				 <div class="form-group">
						 <div class="col-md-12 form-group">
							 <input type="file" class="form-control has-feedback-left" id="foto1" name="foto">
							 <span class="fa fa-file-photo-o form-control-feedback left" aria-hidden="true"></span>
						 </div>
					</div>
				 <div class="form-group">
					 <div class="col-md-6 col-md-offset-3">
						 <input type="hidden" name="token" value="upfoto">
						 <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
						 <button id="upfoto" type="button" class="btn btn-success">Actualizar</button>
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
 <script type="text/javascript">

 /**
 * Subir fotografia al servidor
 */
$(document).ready(function(){
	/**
	* Cargar foto
	*/
	$("input[name='foto']").on('change',function(e){
	 var target = $(this);
	 var formData = new FormData($('#frmPerfil')[0]);
	 $.ajax({
		 url:'ajax.php?mode=foto_perfil',
			type:'POST',
			data:formData,
			contentType:false,
			processData:false,
		 success:function( resp ) {
			 console.log(resp);
			 if( resp != 1) {
				 alertify.error('Error: '+resp);
				 target.css({border: "1px solid red" });
				 return;
			 }
			 target.css({border: "1px solid green" });
			 alertify.success('la imagen se ha cargado correctamente.');
		 }
	 });
	});

	/**
	* Actualizar foto de perfil
	*/
	$('#upfoto').on('click',function(e){
		$.ajax({
			url:'ajax.php?mode=usr',
			type:'post',
			data:$('#frmPerfil').serialize(),
			success:function(resp){
				if(resp!=1){
					alertify.error('Error: '+resp);
					return;
				}
				alertify.confirm("¿Desea reiniciar sesion para ver los cambios?",function(e){
					if(e) {
						$.ajax({
							url:'ajax.php?mode=salir',
							type:'post',
							data:"token=out",
							success:function( resp ) {
								if(resp!=1){
									alertify.error("No se puede cerrar sesion");
									return;
								}
								$(location).attr('href','index.php');
							}
						});
					}
				});
			}
		});
	});
});

 </script>
