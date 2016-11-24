<!DOCTYPE html>
<html lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<base href="<?php echo APP_URL; ?>" target="_blank" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Titulo -->
	<title><?php echo APP_TITLE; ?></title>

	<!-- Bootstrap -->
	<link href="views/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="views/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Alertify -->
	<link rel="stylesheet" href="views/build/alertify/themes/alertify.core.css" />
	<link rel="stylesheet" href="views/build/alertify/themes/alertify.default.css" id="toggleCSS" />
	<style>
        body {
            background-color: gray;
            padding: 1.5em;
            margin: 2.5em;
        }
        h2 {
            color: black !important;
            font-size: 2.5em;
            font-weight: bold;
        }
        #sesion {
            background-color: lightgray;
            padding: 2.5em;
        }
        #imagen {
            padding-bottom: 1em;
        }
    </style>

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<h2 class="text-center text-primary">
				INICIAR SESIÓN
			</h2>
		</div>
		<div class="col-md-4">
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4" id="sesion">

			    <div id="imagen" align="center" class="img-responsive img-responsive" width=140 height=140>
			        <img alt="Iniciar Sesión" src="views/app/images/koala.jpg" class="img-circle img-responsive">
			    </div>

			<form role="form" id='frmLogin'>

				<!--  -->
				<div class="form-group">
					<label>
						Tipo de Usuario
					</label>
					<select class="form-control" name="tipo_usr">
						<option value="0">Estandar</option>
						<option value="1">Administrador</option>
					</select>
				</div>
				<div class="form-group">
					<label for="usr">
						RPE ó Usr
					</label>
					<input type="text" class="form-control" id="usr" name="usr" placeholder="Ingrese su RPE o Nombre de usuario...">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">
						Contraseña
					</label>
					<input type="password" class="form-control" id="passwd" name="passwd" placeholder="Dijite su contraseña...">
				</div>

				<input type="hidden" name="token" value="login">
				<button type="button" class="btn btn-primary" id="login">
					Iniciar Sesión
				</button>
				<button type="button" onclick="resetForm('frmLogin')" class="pull-right btn btn-success"><span class="glyphicon glyphicon-remove"></span> Cancelar </button>
			</form>
			<div id="resp"></div>
		</div>
		<div class="col-md-4">
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
		</div>
	</div>
</div>
<!-- jQuery -->
<script src="views/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="views/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Alertify -->
<script src="views/build/alertify/lib/alertify.min.js"></script>

<script src="views/app/js/index/login.js"></script>

</body>

</html>
