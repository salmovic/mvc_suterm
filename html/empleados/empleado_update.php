<?php
$rpe = $_SESSION['rpe_emp'];
$dtsEmp = $empleado->getEmpleadoById( $rpe );
?>
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
	<!-- Icon -->
	<link rel="shortcut icon" type="image/png" href="views/app/images/favicon.png"/>
	<!-- Bootstrap -->
	<link href="views/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="views/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Alertify -->
	<link rel="stylesheet" href="views/build/alertify/themes/alertify.core.css" />
	<link rel="stylesheet" href="views/build/alertify/themes/alertify.default.css" id="toggleCSS" />

	<!-- Custom Theme Style -->
	<link href="views/build/css/custom.css" rel="stylesheet">
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
										<div id="wizard" class="form_wizard wizard_horizontal">
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
												<div class="ln_solid"></div>
												<form class="form-horizontal form-label-left set_empleado" method="post">
													<!-- rpe -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rpe">RPE <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
															<input id="rpe" type="text" name="rpe" class="optional form-control has-feedback-left" readonly="" value="<?php echo $dtsEmp->rpe_empleado; ?>">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
														</div>
		                      </div>
													<!-- nombre	 -->
													<div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombres <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="nombre" name="nombre" class="optional form-control has-feedback-left" placeholder="Nombre(s) del empleado" value="<?php echo $dtsEmp->nombre; ?>" onblur="_nombre(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- apellidos -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="apellidos">Apellidos <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="apellidos" name="apellidos" class="optional form-control has-feedback-left" placeholder="Ingrese los apelidos." value="<?php echo $dtsEmp->apellidos; ?>"  onblur="_apellidos(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- rfc -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rfc">RFC <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="rfc" name="rfc" class="optional form-control has-feedback-left" placeholder="Registro Federal de Contribuyentes." value="<?php echo $dtsEmp->rfc; ?>" onblur="_rfc(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- curp -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="curp">CURP <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="curp" name="curp" class="optional form-control has-feedback-left" placeholder="Ingrese la CURP." value="<?php echo $dtsEmp->curp; ?>" onblur="_curp(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- no. seguro -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_seguro">No. Seguro | Tipo de Sangre <span class="required">*</span>
		                        </label>
		                        <div class="col-md-3 col-sm-3 col-xs-6">
		                          <input id="no_seguro" type="text" name="no_seguro" class="optional form-control has-feedback-left" placeholder="Ingrese el No. de Seguro Social" value="<?php echo $dtsEmp->no_seguro; ?>" onblur="_noseguro(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
														<div class="col-md-3 col-sm-3 col-xs-6">
		                          <input id="tipo_sangre" type="type" name="tipo_sangre" class="form-control has-feedback-left" placeholder="Ingrese el tipo de sangre (Ej. O+)" value="<?php echo $dtsEmp->tipo_sangre; ?>" onblur="_tipo_sangre(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
														</div>
		                      </div>
													<!-- fecha nacimiento -->
													<div class="item form-group">
														 <label for="fecha_nacimiento" class="control-label col-md-3">Fecha de Nacimiento <span class="required">*</span></label>
	                            <div class="controls">
	                              <div class="col-md-6 col-sm-6 col-xs-12">
	                                <input type="text" class="form-control has-feedback-left calendario" id="calendario" placeholder="Fecha de Nacimiento" aria-describedby="inputSuccess2Status4" name="fecha_nacimiento" value="<?php echo $dtsEmp->fecha_nacimiento; ?>">
	                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
	                              </div>
	                            </div>
													 </div>
													<!-- lugar de nacimiento -->
													<div class="item form-group">
		                        <label for="lugar_nacimiento" class="control-label col-md-3">Lugar nacimiento <span class="required">*</span></label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="lugar_nacimiento" type="type" name="lugar_nacimiento" class="form-control has-feedback-left" placeholder="Lugar de nacimiento" value="<?php echo $dtsEmp->lugar_nacimiento;?>" onblur="_lug_nac(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- entidad federativa nacimiento -->
													<div class="item form-group">
		                        <label for="entidad_federativa_nac" class="control-label col-md-3">Entidad federativa nac. <span class="required">*</span></label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="entidad_federativa_nac" type="type" name="entidad_federativa_nac" class="form-control has-feedback-left" placeholder="Entidad federativa nacimineto." value="<?php echo $dtsEmp->entidad_federativa_nac;?>" onblur="_entidad_federativa_nac(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- nacionalidad -->
													<div class="item form-group">
		                        <label for="nacionalidad" class="control-label col-md-3">Nacionalidad <span class="required">*</span></label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="nacionalidad" type="type" name="nacionalidad" class="form-control has-feedback-left" placeholder="Nacionalida" value="<?php echo $dtsEmp->nacionalidad;?>" onblur="_nacionalidad(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
												</form>
                      </div>
											<!-- Datos personales y familiar -->
											<div id="step-22">
												<h2 class="StepTitle">Paso 2 | Datos Personales</h2>
												<form class="form-horizontal form-label-left set_empleado" novalidate method="post">
													<div class="ln_solid"></div>
													<!-- Domicilio -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rpe">Domicilio <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="domicilio" class="form-control has-feedback-left" name="domicilio" placeholder="Domicilio" type="text" value="<?php echo $dtsEmp->domicilio; ?>" onblur="_domicilio(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- colonia	 -->
													<div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="colonia">Colonia <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="colonia" name="colonia" class="form-control has-feedback-left" value="<?php echo $dtsEmp->colonia; ?>" onblur="_colonia(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- codigo postal -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo_postal">Código Postal <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="codigo_postal" name="codigo_postal" class="form-control has-feedback-left" value="<?php echo $dtsEmp->codigo_postal; ?>" onblur="_codigo_postal(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- municipio domicilio -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="municipio_dom">Municipio <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="municipio_dom" name="municipio_dom" class="form-control has-feedback-left" value="<?php echo $dtsEmp->municipio_dom; ?>" onblur="_municipio_dom(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- Entidad federativa dom -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="entidad_federativa_dom">Entidad federativa dom <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input type="text" id="entidad_federativa_dom" name="entidad_federativa_dom" placeholder="Entidad federeativa domicilio." class="form-control has-feedback-left" value="<?php echo $dtsEmp->entidad_federativa_dom; ?>" onblur="_entidad_federativa_dom(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- E-Mail -->
		                      <div class="item form-group">
		                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Correo Electrónico <span class="required">*</span>
		                        </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="email" type="text" name="email" class="optional form-control has-feedback-left" value="<?php echo $dtsEmp->email; ?>" onblur="_email(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- Telefono -->
		                      <div class="item form-group">
		                        <label for="telefono" class="control-label col-md-3">Teléfono <span class="required">*</span></label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="telefono" type="type" name="telefono" class="form-control has-feedback-left" value="<?php echo $dtsEmp->telefono; ?>" onblur="_telefono(this)">
															<span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- Celular -->
													<div class="item form-group">
		                        <label for="celular" class="control-label col-md-3">Celular <span class="required">*</span></label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="celular" type="type" name="celular" class="form-control has-feedback-left" value="<?php echo $dtsEmp->celular; ?>" onblur="_celular(this)">
															<span class="fa fa-mobile form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- estado civil -->
													<div class="item form-group">
		                        <label for="estado_civil" class="control-label col-md-3">Estado Civil <span class="required">*</span></label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
															<select class="form-control has-feedback-left" id="estado_civil" name="estado_civil" onblur="validarSelect(this)">
																<option value="-1">--Seleccione un estado civil--</option>
																<?php
																	$estCivil = ['SOLTERO(A)','COMPROMETIDO(A)','CASADO(A)','DIVORCIADO(A)','VIUDO(A)'];
																	foreach ($estCivil as $dts) {
																		if($dts==$dtsEmp->estado_civil){
																 ?>
																<option value="<?php echo $dts; ?>" selected=""><?php echo $dts; ?></option>
																<?php }else{ ?>
																	<option value="<?php echo $dts; ?>"><?php echo $dts; ?></option>
																	<?php }} ?>
															</select>
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- nombre conyugue -->
													<div class="item form-group">
		                        <label for="nombre_conyugue" class="control-label col-md-3">Nombre Cónyugue </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="nombre_conyugue" type="type" name="nombre_conyugue" class="form-control has-feedback-left" placeholder="Nombre cónyugue." value="<?php echo $dtsEmp->nombre_conyugue; ?>">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- dom conyugue -->
													<div class="item form-group">
														<label for="dom_conyugue" class="control-label col-md-3">Domicilio Cónyugue </label>
														<div class="col-md-6 col-sm-6 col-xs-12">
															<input id="dom_conyugue" type="type" name="dom_conyugue" class="form-control has-feedback-left" placeholder="Domicilio cónyugue." value="<?php echo $dtsEmp->dom_conyugue;?>">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
														</div>
													</div>
													<!-- nacimiento conyugue -->
													<div class="item form-group">
														 <label for="fecha_nac_conyugue" class="control-label col-md-3">Fecha Nacimiento Cónyugue </label>
	                            <div class="controls">
	                              <div class="col-md-6 col-sm-6 col-xs-12">
	                                <input type="text" class="form-control has-feedback-left calendario" id="fecha_nac_conyugue" placeholder="Fecha de Nacimiento." aria-describedby="inputSuccess2Status4" name="fecha_nac_conyugue" value="<?php echo $dtsEmp->fecha_nac_conyugue;?>">
	                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
	                              </div>
	                            </div>
													 </div>
													<!-- Dependientes economicos. -->
													<div class="item form-group">
		                        <label for="num_depen_econ" class="control-label col-md-3">No. Dependientes economicos </label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="num_depen_econ" type="type" name="num_depen_econ" class="form-control has-feedback-left" placeholder="Numero de dependientes económicos." value="<?php echo $dtsEmp->num_depen_econ;?>">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>

			                    <div class="ln_solid"></div>
												</form>
                      </div>
											<!-- Datos ref empresa -->
											<div id="step-33">
                        <h2 class="StepTitle">Paso 3 | Datos referentes a la empresa</h2>
												<form class="form-horizontal form-label-left set_empleado" method="post">
													<div class="ln_solid"></div>

													<!-- tipo de contrato -->
													<div class="item form-group">
														 <label for="tipo_contrato" class="control-label col-md-3">Tipo de Contrato <span class="required">*</span></label>
	                            <div class="controls">
	                              <div class="col-md-6 col-sm-6 col-xs-12">
	                                <select class="form-control has-feedback-left" name="tipo_contrato" onblur="validarSelect(this)">
																		<option value="-1">--Seleccione el Tipo de Contrato--</option>
																		<?php
																		$tipoCon = ['TEMPORAL','BASE'];
																		foreach ($tipoCon as $dts) {
																		 if($dtsEmp->tipo_contrato==$dts){
																			 ?>
	                                	<option value="<?php echo $dts; ?>" selected="" ><?php echo $dts; ?></option>
																		<?php }else { ?>
																		<option value="<?php echo $dts; ?>"><?php echo $dts; ?></option>
																		<?php }}?>
	                                </select>
	                                <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
	                              </div>
	                            </div>
													 </div>

													<!-- Fecha ingreso empresa -->
													<div class="item form-group">
														 <label for="fecha_ingreso_empresa" class="control-label col-md-3">Fecha de Ingreso Empresa <span class="required">*</span></label>
	                            <div class="controls">
	                              <div class="col-md-6 col-sm-6 col-xs-12">
	                                <input type="text" class="form-control has-feedback-left calendario" id="fecha_ingreso_empresa" placeholder="Fecha de Nacimiento" aria-describedby="inputSuccess2Status4" name="fecha_ingreso_empresa" value="<?php echo $dtsEmp->fecha_ingreso_empresa;?>">
	                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
	                              </div>
	                            </div>
													 </div>
													<!-- Fecha ingreso suterm -->
													<div class="item form-group">
														 <label for="fecha_ingreso_suterm" class="control-label col-md-3">Fecha de Ingreso SUTERM <span class="required">*</span></label>
	                            <div class="controls">
	                              <div class="col-md-6 col-sm-6 col-xs-12">
	                                <input type="text" class="form-control has-feedback-left calendario" name="fecha_ingreso_suterm" id="fecha_ingreso_suterm" placeholder="Fecha de Nacimiento" aria-describedby="inputSuccess2Status4" value="<?php echo $dtsEmp->fecha_ingreso_suterm;?>">
	                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
	                              </div>
	                            </div>
													 </div>
													<!-- Fecha ingreso empresa sector elctrico-->
													<div class="item form-group">
														 <label for="fecha_ing_sector_electrico" class="control-label col-md-3">Fecha de Ingreso Sector Electrico <span class="required">*</span></label>
	                            <div class="controls">
	                              <div class="col-md-6 col-sm-6 col-xs-12">
	                                <input type="text" class="form-control has-feedback-left calendario" id="fecha_ing_sector_electrico" placeholder="Fecha de Nacimiento" aria-describedby="inputSuccess2Status4" name="fecha_ing_sector_electrico" value="<?php echo $dtsEmp->fecha_ing_sector_electrico;?>">
	                                <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
	                                <span id="inputSuccess2Status4" class="sr-only">(success)</span>
	                              </div>
	                            </div>
													 </div>
													<!-- Antiguedad-->
													<div class="item form-group">
		                        <label for="antiguedad" class="control-label col-md-3">Antigüedad <span class="required">*</span></label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="antiguedad" type="type" name="antiguedad" class="form-control has-feedback-left" value="<?php echo $dtsEmp->antiguedad;?>" onblur="_antiguedad(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- id centro trabajo -->
													<div class="item form-group">
		                        <label for="id_centro_trabajo" class="control-label col-md-3">Centro de Trabajo <span class="required">*</span></label>
															<div class="col-md-6 col-sm-6 col-xs-12">
			                          <select class="form-control has-feedback-left"  name="id_centro_trabajo" onblur="validarSelect(this)">
																	<option value="-1">--Seleccione un Centro de Trabajo--</option>
																	<?php $allCt=$centroTrabajo->getCentroTrabajo();
																		foreach ($allCt as $dts)
																		{
																			if($dts->id_centro_trabajo==$dtsEmp->id_centro_trabajo){
																	?>
			                            <option value="<?php echo $dts->id_centro_trabajo; ?>" selected=""> <?php echo $dts->nombre; ?></option>
																	<?php }else { ?>
																		<option value="<?php echo $dts->id_centro_trabajo; ?>"> <?php echo $dts->nombre;?></option>
																		<?php }}?>
			                          </select>
																<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- departamento -->
													<div class="item form-group">
		                        <label for="id_departamento" class="control-label col-md-3">Departamentos <span class="required">*</span></label>
															<div class="col-md-6 col-sm-6 col-xs-12">
			                          <select class="form-control has-feedback-left"  name="id_departamento" onblur="validarSelect(this)">

																	<option value="-1">--Seleccione un departamento--</option>
																	<?php $allDep=$departamento->getDepartamentos();
																		foreach ($allDep as $dts)
																		{
																			if( $dts->id_departamento == $dtsEmp->id_departamento ) {
																	?>
			                            <option value="<?php echo $dts->id_departamento; ?>" selected=""><?php echo $dts->nombre; ?></option>
																	<?php } else { ?>
																		<option value="<?php echo $dts->id_departamento; ?>"><?php echo $dts->nombre; ?></option>
																		<?php }} ?>
			                          </select>
																<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>

			                    <div class="ln_solid"></div>
												</form>
                      </div>
											<!-- Datos Escolares -->
											<div id="step-44">
                        <h2 class="StepTitle">Paso 4 | Datos Profesionales</h2>
												<form class="form-horizontal form-label-left set_empleado" method="post">
													<div class="ln_solid"></div>
													<!-- nivel escolaridad -->
													<div class="item form-group">
		                        <label for="nivel_escolaridad" class="control-label col-md-3">Nivel Escolaridad <span class="required">*</span></label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
															<select class="form-control has-feedback-left" name="nivel_escolaridad" onblur="validarSelect(this)">
																<option value="-1">--Seleccione el nivel de escolaridad--</option>
																<?php $esc = ['PRIMARIA','SECUNDARIA','PREPARATORIA','LICENCIATURA','MAESTRIA','DOCTORADO'];
																foreach ($esc as $dts) {
																if($dtsEmp->nivel_escolaridad==$dts) {
																?>
																<option value="<?php echo $dts; ?>" selected=""><?php echo $dts;?></option>
																<?php }else{?>
																<option value="<?php echo $dts; ?>" ><?php echo $dts;?></option>
																<?php }} ?>
															</select>
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- Esc egresado -->
													<div class="item form-group">
		                        <label for="escuela_egresado" class="control-label col-md-3">Escuela Egresado <span class="required">*</span></label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="escuela_egresado" type="type" name="escuela_egresado" class="form-control has-feedback-left" value="<?php echo $dtsEmp->escuela_egresado;?>" onblur="_escuela_egresado(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- cedula_profesional -->
													<div class="item form-group">
		                        <label for="cedula_profesional" class="control-label col-md-3">Cédula porofesional <span class="required">*</span></label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="cedula_profesional" type="text" name="cedula_profesional" class="form-control has-feedback-left" value="<?php echo $dtsEmp->cedula_profesional;?>" onblur="_cedula_profesional(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- Idiomas -->
													<div class="item form-group">
		                        <label for="idioma" class="control-label col-md-3">Idiomas <span class="required">*</span></label>
		                        <div class="col-md-6 col-sm-6 col-xs-12">
		                          <input id="idioma" type="text" name="idioma" class="form-control has-feedback-left" placeholder="Separar los idiomas por (,)" value="<?php echo $dtsEmp->idioma;?>" onblur="_idioma(this)">
															<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
		                        </div>
		                      </div>
													<!-- Token -->
													<input type="hidden" name="token" value="upempleado">

													</div>
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
	</div>
</div>
				<!-- jQuery -->
<script src="views/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="views/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="views/vendors/fastclick/lib/fastclick.js"></script>
<!-- jQuery Smart Wizard -->
<script src="views/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

<!-- Alertify -->
<script src="views/build/alertify/lib/alertify.min.js"></script>

<script src="views/build/datepicker/moment.min.js"></script>
<script src="views/build/datepicker/momentES.js"></script>
<script src="views/build/datepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="views/build/js/custom.min.js"></script>

<!-- funciones rutas -->
<script src="views/app/js/url.js"></script>
<!-- funciones generales-->
<script src="views/app/js/funciones.js"></script>

<script src="views/app/js/empleado/validaciones.js"></script>
<script src="views/app/js/empleado/empleado.js"></script>
</body>
</html>
