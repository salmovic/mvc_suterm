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
                <h3>Actualizar Empleado</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Actualizar Empleado </h2>
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
										<div id="wizard" class="form_wizard wizard_horizontal">
                      <!-- <ul class="list-unstyled wizard_steps">
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
                      </ul> -->
											<ul class="list-unstyled wizard_steps">
                        <li>
													<a href="#step-11">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                Paso 1<br />
																<p>
																	Datos Generales
																</p>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-22">
														<span class="step_no">2</span>
                            <span class="step_descr">
                                Paso 2<br />
																<p>Datos Personales</p>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-33">
														<span class="step_no">3</span>
                            <span class="step_descr">
                                Paso 3<br />
																<p>Datos de empleado</p>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-44">
														<span class="step_no">4</span>
                            <span class="step_descr">
                                Paso 4<br />
																<p>Datos Escolares</p>
                            </span>
                          </a>
                        </li>
                      </ul>
											<!-- Datos Generales -->
                      <div id="step-11">
                        <h2 class="StepTitle">Paso 1 | Datos Generales</h2>
												<form class="form-horizontal form-label-left" novalidate>
													<div class="ln_solid"></div>
													<!-- rpe -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rpe">RPE <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="rpe" class="form-control col-md-7 col-xs-12" data-validate-length-range="10" data-validate-words="1" name="name" placeholder="RPE empleado." required="required" type="text">
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
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="noseguro">No. Seguro <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="noseguro" type="text" name="noseguro" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
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
		                        <label for="fecha_nacimiento" class="control-label col-md-3">Fecha nacimiento</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="fecha_nacimiento" type="type" name="fecha_nacimiento" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
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
		                        <label for="ent_fed_nac" class="control-label col-md-3">Entidad federativa nac.</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="ent_fed_nac" type="type" name="ent_fed_nac" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required" placeholder="Entidad federativa nacimineto.">
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
												<form class="form-horizontal form-label-left" novalidate>
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
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="municipio">Municipio <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="municipio" name="municipio" required="required" data-validate-minmax="10,100" class="form-control col-md-7 col-xs-12">
		                        </div>
		                      </div>
													<!-- Entidad federativa dom -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="entidad_fed_dom">Entidad federativa dom <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="entidad_fed_dom" name="entidad_fed_dom" required="required" placeholder="Entidad federeativa domicilio." class="form-control col-md-7 col-xs-12">
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
		                        <label for="fotografia" class="control-label col-md-3">Fotografia</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="fotografia" type="type" name="fotografia" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
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
		                        <label for="nom_conyugue" class="control-label col-md-3">Nombree Conyugue</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="nom_conyugue" type="type" name="nom_conyugue" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- nacimiento conyugue -->
													<div class="item form-group">
		                        <label for="fecha_nac_cony" class="control-label col-md-3">Nacimiento Conyugue</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="fecha_nac_cony" type="type" name="fecha_nac_cony" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
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
												<form class="form-horizontal form-label-left" novalidate>
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
		                        <label for="fech_ing_emp" class="control-label col-md-3">Ingreso Empresa</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="fech_ing_emp" type="type" name="fech_ing_emp" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- Fecha ingreso suterm -->
		                      <div class="item form-group">
		                        <label for="fech_ing_suterm" class="control-label col-md-3">Ingreso Suterm</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="fech_ing_suterm" type="type" name="fech_ing_suterm" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- Fecha ingreso empresa sector elctrico-->
		                      <div class="item form-group">
		                        <label for="fech_ing_se" class="control-label col-md-3">Ingreso Sector Electrico</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="fech_ing_se" type="type" name="fech_ing_se" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
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
		                          <input id="id_categoria" type="type" name="id_categoria" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- id centro trabajo -->
													<div class="item form-group">
		                        <label for="centr_trab" class="control-label col-md-3">Centro Trabajo</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="centr_trab" type="type" name="centr_trab" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- departamento -->
													<div class="item form-group">
		                        <label for="id_dep" class="control-label col-md-3">Departamento</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="id_dep" type="type" name="id_dep" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>

			                    <div class="ln_solid"></div>
												</form>
                      </div>
											<!-- Datos Escolares -->
											<div id="step-44">
                        <h2 class="StepTitle">Paso 4 | Datos Progesionales</h2>
												<form class="form-horizontal form-label-left" novalidate>
													<div class="ln_solid"></div>
													<!-- nivel escolaridad -->
													<div class="item form-group">
		                        <label for="niv_escolaridad" class="control-label col-md-3">Nivel Escolaridad</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="niv_escolaridad" type="type" name="niv_escolaridad" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- nivel escolaridad -->
													<div class="item form-group">
		                        <label for="esc_egresado" class="control-label col-md-3">Escuela Egresado</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="esc_egresado" type="type" name="esc_egresado" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- nivel escolaridad -->
													<div class="item form-group">
		                        <label for="ced_prof" class="control-label col-md-3">Cédula porofesional</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="ced_prof" type="type" name="ced_prof" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>
													<!-- Idiomas -->
													<div class="item form-group">
		                        <label for="idiomas" class="control-label col-md-3">Idiomas</label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="idiomas" type="type" name="idiomas" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
		                        </div>
		                      </div>

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

<script>
	$(document).ready(function() {
		$('#wizard').smartWizard({
          transitionEffect: 'slide'
        });
		$('.buttonNext').addClass('btn btn-success');
		$('.buttonPrevious').addClass('btn btn-primary');
		$('.buttonFinish').addClass('btn btn-default');
	});
</script>
<!-- /jQuery Smart Wizard -->

<!-- validator -->
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
    <!-- /validator -->
</body>
</html>
