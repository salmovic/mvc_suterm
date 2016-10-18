<!DOCTYPE html>
<html lang="es">
<head>
<?php include HTML_DIR.'/overall/head.inc' ?>
</head>
<body class="nav-md">
	<?php include 'html/overall/container_base_head.php'; ?>
        <!-- page content -->
				<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Agregar Empleado</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Agregar Empleado </h2>
                    <ul class="nav navbar-right panel_toolbox">
											<li><a >&nbsp;</a></li>
											<li><a >&nbsp;</a></li>
											<li><a >&nbsp;</a></li>
											<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!-- Smart Wizard -->
										<div id="wizard" class="form_wizard wizard_verticle">
                      <ul class="list-unstyled wizard_steps">
                        <li>
                          <a href="#step-11">
                            <span class="step_no">1</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-22">
                            <span class="step_no">2</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-33">
                            <span class="step_no">3</span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-44">
                            <span class="step_no">4</span>
                          </a>
                        </li>
                      </ul>
											<!-- Datos Generales -->
                      <div id="step-11">
                        <h2 class="StepTitle">Paso 1 | Datos Generales</h2>
												<form class="form-horizontal form-label-left empleado" method="post">
													<div class="ln_solid"></div>
													<!-- rpe -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rpe">RPE <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="rpe" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="1" name="rpe" placeholder="RPE empleado." required="required" type="text">
		                        </div>
		                      </div>
													<!-- nombre	 -->
													<div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="nombre" name="nombre" required="required" class="form-control col-md-7 col-xs-12">
		                        </div>
		                      </div>
													<!-- apellidos -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidos">Apellidos <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="apellidos" name="apellidos" data-validate-linked="text" required="required" class="form-control col-md-7 col-xs-12">
		                        </div>
		                      </div>
													<!-- rfc -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rfc">RFC <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="rfc" name="rfc" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
		                        </div>
		                      </div>
													<!-- curp -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="curp">CURP <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="curp" name="curp" required="required" placeholder="Curp" class="form-control col-md-7 col-xs-12">
		                        </div>
		                      </div>
													<!-- no. seguro -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_seguro">No. Seguro <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="no_seguro" type="text" name="no_seguro" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
		                        </div>
		                      </div>
													<!-- tipo de sangre -->
		                      <div class="item form-group">
		                        <label for="tipo_sangre" class="control-label col-md-3">Tipo de sangre</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="tipo_sangre" type="type" name="tipo_sangre" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- fecha nacimiento -->
													<div class="item form-group">
														 <label for="fecha_nacimiento" class="control-label col-md-3">Fecha de Nacimiento</label>
														 </label>
	                            <div class="controls">
	                              <div class="col-md-6 col-sm-6 col-xs-12">
	                                <input type="text" class="form-control has-feedback-left calendario" id="calendario" placeholder="Fecha de Nacimiento" aria-describedby="inputSuccess2Status4" name="fecha_nacimiento">
	                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
	                              </div>
	                            </div>
													 </div>
													<!-- lugar de nacimiento -->
													<div class="item form-group">
		                        <label for="lugar_nacimiento" class="control-label col-md-3">Lugar nacimiento</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="lugar_nacimiento" type="type" name="lugar_nacimiento" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- entidad federativa nacimiento -->
													<div class="item form-group">
		                        <label for="entidad_federativa_nac" class="control-label col-md-3">Entidad federativa nac.</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="entidad_federativa_nac" type="type" name="entidad_federativa_nac" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required" placeholder="Entidad federativa nacimineto.">
		                        </div>
		                      </div>
													<!-- nacionalidad -->
													<div class="item form-group">
		                        <label for="nacionalidad" class="control-label col-md-3">Nacionalidad</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="nacionalidad" type="type" name="nacionalidad" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
			                      <div class="ln_solid"></div>
												</form>
                      </div>
											<!-- Datos personales y familiar -->
											<div id="step-22">
                        <h2 class="StepTitle">Paso 2 | Datos Personales y familiar</h2>
												<form class="form-horizontal form-label-left empleado" novalidate method="post">
													<div class="ln_solid"></div>
													<!-- Domicilio -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rpe">Domicilio <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="domicilio" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="1" name="domicilio" placeholder="Domicilio" required="required" type="text">
		                        </div>
		                      </div>
													<!-- colonia	 -->
													<div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="colonia">Colonia <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="colonia" name="colonia" required="required" class="form-control col-md-7 col-xs-12">
		                        </div>
		                      </div>
													<!-- codigo postal -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo_postal">Código Postal <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="codigo_postal" name="codigo_postal" data-validate-linked="text" required="required" class="form-control col-md-7 col-xs-12">
		                        </div>
		                      </div>
													<!-- municipio domicilio -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="municipio_dom">Municipio <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="municipio_dom" name="municipio_dom" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
		                        </div>
		                      </div>
													<!-- Entidad federativa dom -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="entidad_federativa_dom">Entidad federativa dom <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="entidad_federativa_dom" name="entidad_federativa_dom" required="required" placeholder="Entidad federeativa domicilio." class="form-control col-md-7 col-xs-12">
		                        </div>
		                      </div>
													<!-- E-Mail -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Correo Electrónico <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="email" type="text" name="email" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
		                        </div>
		                      </div>
													<!-- Telefono -->
		                      <div class="item form-group">
		                        <label for="telefono" class="control-label col-md-3">Telefono</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="telefono" type="type" name="telefono" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- Celular -->
													<div class="item form-group">
		                        <label for="celular" class="control-label col-md-3">Celular</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="celular" type="type" name="celular" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- fotografia -->
													<div class="item form-group">
		                        <label for="foto" class="control-label col-md-3">Fotografia</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="foto" type="type" name="foto" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- estado civil -->
													<div class="item form-group">
		                        <label for="estado_civil" class="control-label col-md-3">Estado Civil</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="estado_civil" type="type" name="estado_civil" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required" placeholder="Entidad federativa nacimineto.">
		                        </div>
		                      </div>
													<!-- nombre conyugue -->
													<div class="item form-group">
		                        <label for="nombre_conyugue" class="control-label col-md-3">Nombree Conyugue</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="nombre_conyugue" type="type" name="nombre_conyugue" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- dom conyugue -->
													<div class="item form-group">
														<label for="dom_conyugue" class="control-label col-md-3">Domicilio Conyugue</label>
														<div class="col-md-6 col-sm-6 col-xs-12">
															<input id="dom_conyugue" type="type" name="dom_conyugue" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
														</div>
													</div>
													<!-- nacimiento conyugue -->
													<div class="item form-group">
														 <label for="fecha_nac_conyugue" class="control-label col-md-3">Fecha Nacimiento Conyugye</label>
														 </label>
	                            <div class="controls">
	                              <div class="col-md-6 col-sm-6 col-xs-12">
	                                <input type="text" class="form-control has-feedback-left calendario" id="calendario" placeholder="Fecha de Nacimiento" aria-describedby="inputSuccess2Status4" name="fecha_nac_conyugue">
	                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
	                              </div>
	                            </div>
													 </div>
													<!-- Dependientes economicos -->
													<div class="item form-group">
		                        <label for="num_depen_econ" class="control-label col-md-3">No. Dependientes economicos</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="num_depen_econ" type="type" name="num_depen_econ" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>

			                    <div class="ln_solid"></div>
												</form>
                      </div>
											<!-- Datos ref empresa -->
											<div id="step-33">
                        <h2 class="StepTitle">Paso 3 | Datos asociadas a la empresa</h2>
												<form class="form-horizontal form-label-left empleado" method="post">
													<div class="ln_solid"></div>

													<!-- tipo de contrato -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo_contrato">Tipo Contrato <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="tipo_contrato" name="tipo_contrato" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
		                        </div>
		                      </div>

													<!-- Fecha ingreso empresa -->
													<div class="item form-group">
														 <label for="fecha_ingreso_empresa" class="control-label col-md-3">Fecha de Ingreso Empresa</label>
														 </label>
	                            <div class="controls">
	                              <div class="col-md-6 col-sm-6 col-xs-12">
	                                <input type="text" class="form-control has-feedback-left calendario" id="calendario" placeholder="Fecha de Nacimiento" aria-describedby="inputSuccess2Status4" name="fecha_ingreso_empresa">
	                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
	                              </div>
	                            </div>
													 </div>
													<!-- Fecha ingreso suterm -->
													<div class="item form-group">
														 <label for="fecha_ingreso_suterm" class="control-label col-md-3">Fecha de Ingreso SUTERM</label>
														 </label>
	                            <div class="controls">
	                              <div class="col-md-6 col-sm-6 col-xs-12">
	                                <input type="text" class="form-control has-feedback-left calendario" name="fecha_ingreso_suterm" id="calendario" placeholder="Fecha de Nacimiento" aria-describedby="inputSuccess2Status4">
	                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
	                              </div>
	                            </div>
													 </div>
													<!-- Fecha ingreso empresa sector elctrico-->
													<div class="item form-group">
														 <label for="fecha_ing_sector_electrico" class="control-label col-md-3">Fecha de Ingreso Sector Electrico</label>
														 </label>
	                            <div class="controls">
	                              <div class="col-md-6 col-sm-6 col-xs-12">
	                                <input type="text" class="form-control has-feedback-left calendario" id="calendario" placeholder="Fecha de Nacimiento" aria-describedby="inputSuccess2Status4" name="fecha_ing_sector_electrico">
	                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
	                              </div>
	                            </div>
													 </div>
													<!-- Antiguedad-->
													<div class="item form-group">
		                        <label for="antiguedad" class="control-label col-md-3">Antigüedad</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="antiguedad" type="type" name="antiguedad" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- id categoria -->
													<div class="item form-group">
		                        <label for="id_categoria" class="control-label col-md-3">Categoria</label>
															<div class="col-md-6 col-sm-6 col-xs-12">
			                          <select class="form-control"  class="form-control has-feedback-left" name="id_categoria">
																	<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
																	<!-- <option value="">--Seleccione una categoria--</option>
																	<?php //$allCat=$cat->getCategorias();
																		// foreach ($allCat as $dts)
																		// {
																	?>
			                            <option value="<?php //echo $dts->id_categorias; ?>"><?php //echo $dts->categoria; ?></option>
																	<?php //}; ?> -->
			                          </select>

		                        </div>
		                      </div>
													<!-- id centro trabajo -->
													<div class="item form-group">
		                        <label for="id_centro_trabajo" class="control-label col-md-3">Centro de Trabajo</label>
															<div class="col-md-6 col-sm-6 col-xs-12">
			                          <select class="form-control"  class="form-control has-feedback-left" name="id_centro_trabajo">
																	<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
																	<option value="">--Seleccione un Centro de Trabajo--</option>
																	<?php //$allCt=$ct->getCentroTrabajo();
																		// foreach ($allCt as $dts)
																		// {
																	?>
			                            <option value="<?php //echo $dts->id_centro_trabajo; ?>"><?php //echo $dts->nombre; ?></option>
																	<?php //}; ?>
			                          </select>
		                        </div>
		                      </div>
													<!-- departamento -->
													<div class="item form-group">
		                        <label for="id_departamento" class="control-label col-md-3">Departamentos</label>
															<div class="col-md-6 col-sm-6 col-xs-12">
			                          <select class="form-control"  class="form-control has-feedback-left" name="id_departamento">
																	<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
																	<option value="">--Seleccione un departamento--</option>
																	<?php //$allDep=$dep->getDepartamentos();
																		// foreach ($allDep as $dts)
																		// {
																	?>
			                            <option value="<?php //echo $dts->id_departamento; ?>"><?php //echo $dts->nombre; ?></option>
																	<?php //}; ?>
			                          </select>
		                        </div>
		                      </div>

			                    <div class="ln_solid"></div>
												</form>
                      </div>
											<!-- Datos Escolares -->
											<div id="step-44">
                        <h2 class="StepTitle">Paso 4 | Datos Progesionales</h2>
												<form class="form-horizontal form-label-left empleado" method="post">
													<div class="ln_solid"></div>
													<!-- nivel escolaridad -->
													<div class="item form-group">
		                        <label for="nivel_escolaridad" class="control-label col-md-3">Nivel Escolaridad</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="nivel_escolaridad" type="type" name="nivel_escolaridad" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- Esc egresado -->
													<div class="item form-group">
		                        <label for="escuela_egresado" class="control-label col-md-3">Escuela Egresado</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="escuela_egresado" type="type" name="escuela_egresado" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- cedula_profesional -->
													<div class="item form-group">
		                        <label for="cedula_profesional" class="control-label col-md-3">Cédula porofesional</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="cedula_profesional" type="type" name="cedula_profesional" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- Idiomas -->
													<div class="item form-group">
		                        <label for="idioma" class="control-label col-md-3">Idiomas</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="idioma" type="type" name="idioma" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- Token -->
													<input type="hidden" name="token" value="ok">
			                    <div class="ln_solid"></div>
												</form>
                      </div>
                    </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php include 'html/overall/container_base_footer.php'; ?>
<script src="views/build/datepicker/moment.min.js"></script>
<script src="views/build/datepicker/daterangepicker.js"></script>

		<!-- /bootstrap-daterangepicker -->
<script>
	$(document).ready(function() {
		$('#wizard').smartWizard({
          transitionEffect: 'slide'
        });
		$('.buttonNext').addClass('btn btn-success');
		$('.buttonPrevious').addClass('btn btn-primary');
		$('.buttonFinish').addClass('btn btn-default').on('click',function(e){
        //deshabilitar el envio por default
        e.preventDefault();

        $.ajax({
                //antes de que se envie la peticion
                beforeSend: function() {
                    // $("#status").html('<span class="glyphicon glyphicon-hourglass label-success"></span>');
                },
                //ruta archivo php
                url: 'peticion.php',
                //typo o metodo de envio
                type: 'post',
                //envio de datos
                data:$(".empleado").serialize(),
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
                timeout: 1000
            });
		});
	});
</script>
<!-- /jQuery Smart Wizard -->

<script>
	$(document).ready(function() {
		$('.calendario').daterangepicker({
			singleDatePicker: true,
			showDropdowns: true
		});
	});
</script>
</body>
</html>
