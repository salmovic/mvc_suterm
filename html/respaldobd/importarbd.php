<div class="modal-dialog">
	<!-- Modal content-->
	<div class="modal-content">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">&times;</button>
			<h4 class="modal-title">Seleccionar Backup desde el ordenador.</h4>
		</div>
		<div class="modal-body">
			<!-- form -->
			<form class="form-horizontal form-label-left" novalidate method="post" enctype="multipart/form-data" id="frmzip">
				<!-- Fotografia -->
				<div class="form-group">
						<div class="col-md-12 form-group">
							<input type="file" class="form-control has-feedback-left" id="archivo" name="archivo">
							<span class="fa fa-file-photo-o form-control-feedback left" aria-hidden="true"></span>
						</div>
				 </div>
				<div class="form-group">
					<div class="col-md-6 col-md-offset-3">
						<input type="hidden" name="token" value="upfoto">
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
						<button id="cargarbd" type="button" class="btn btn-success">Actualizar</button>
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
var band=false;
$("input[name='archivo']").on("change",function(){
	var target = $(this);
	var formData = new FormData($('#frmzip')[0]);
	var ruta = "ajax.php?mode=backupbd";
	$.ajax({
		url:ruta,
		type:'POST',
		data:formData,
		contentType:false,
		processData: false,
		success:function( resp ) {
			
			if( resp != 1) {
				alertify.error('Error: '+resp);
				target.css({border: "1px solid red" });
				return;
			}
			target.css({border: "1px solid green" });			
			band = true;
		},
		timeout: 10000
	});
});

$("#cargarbd").on("click",function(e){
	e.preventDefault();

	$.ajax({
		url:"ajax.php?mode=bd",
		type:'POST',
		data:"id=1",
		success:function(resp) {
			if(resp == 0 )
			{
				alertify.success("El respaldo se ha cargado exitosamente.");
			}else {
				alertify.error("No se pudo cargar el respaldo.");
			}
		}
	});

});

</script>
