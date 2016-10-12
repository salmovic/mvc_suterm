$(document).ready(function(){
//Enviar formulario
	$('#enviar').on('click',function(e)	{
		//deshabilitar el envio por default
		e.preventDefault();
		$.ajax({
		    //antes de que se envie la peticion
		    beforeSend: function() {
		        // $("#status").html('<span class="glyphicon glyphicon-hourglass label-success"></span>');
		    },
		    //ruta archivo php
		    url: 'ajax.php?mode=categoria',
		    //typo o metodo de envio
		    type: 'post',
		    //envio de datos
		    data:$("#frmcat").serialize(),
		    //suscectible
		    success: function(respuesta) {
		      console.log(respuesta);
		    },
		    //ejecuta cuando hay un error en la peticion
		    error: function(jqXHR,estado,error) {
		        // $("#status").html('<span class="glyphicon glyphicon-remove-circle label-warning"></span>');
		        console.log("estado "+ estado );
		        console.log("error"+ error );
		    },
		    //ejecuta al completar exitosamente la peticion
		    complete: function(jqXHR,estado) {
		        console.log("complete "+estado);
		    },
		    timeout: 10000
		});

});

// Agregar titulo al pasar por el mouse
		$('#up_cat').click(function(){
			$('#btn').attr("data-toggle","tooltip");
			$('#btn').removeAttr("data-placement");
			$('#btn').removeAttr("title");
			});

});
