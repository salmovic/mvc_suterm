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
								<h3>Movimientos</h3>
							</div>

							<div class="title_right" align="right">
								<div class="col-md-5 col-sm-5 col-xs-12 pull-right top_search">
									<div class="input-group">
										<input type="text" class="form-control" placeholder="Fecha" readonly="" value="Fehcha: <?php echo date('d F Y'); ?>">
									</div>
								</div>
							</div>
						</div>

            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_panel">
                  <div class="x_title">
                    <h2>Movimiento </h2>
                    <ul class="nav navbar-right panel_toolbox">
											<li><a >&nbsp;</a></li>
											<li><a >&nbsp;</a></li>
											<li><a >&nbsp;</a></li>
											<li><a class="collapse-link" data-toggle="tooltip" data-placement="top" title="Ocultar / Mostrar"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
										<!-- form -->
										<form class="form-horizontal form-label-left" novalidate method="post" id="frmDepartamento">
											<!-- id departamente -->
											<div class="item form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Tipo de Permiso<span class="required">*</span></label>
													<div class="col-md-6 col-sm-6 col-xs-6">
														<select class="form-control"  name="id_centro_trabajo">
															<option value="-1">--Seleccione tipo de permiso--</option>
															<option value="1"> Permiso 1</option>
															<option value="2"> Permiso 2</option>
															<option value="3"> Permiso 3</option>
														</select>
												</div>
											</div>
											<!-- RPE empleado -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="rpe_empleado">RPE empleado<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="rpe_empleado" name="rpe_empleado" placeholder="Buscar empleado por RPE">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>

											<div class="ln_solid"></div>

											<div id="resultado">

												<!-- Nombre -->
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre Empleado<span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12 form-group">
														<input type="text" class="form-control has-feedback-left" id="nombre" name="nombre" placeholder="Nombre completo" readonly="">
														<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
													</div>
												</div>
												<!-- Categoria -->
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoria">Categoria<span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12 form-group">
														<input type="text" class="form-control has-feedback-left" id="categoria" name="categoria" placeholder="Categoria" readonly="">
														<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
													</div>
												</div>
												<!-- Numero plaza -->
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="noplaza">Numero Plaza<span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12 form-group">
														<input type="text" class="form-control has-feedback-left" id="noplaza" name="noplaza" placeholder="Numero Plaza" readonly="">
														<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
													</div>
												</div>
												<!-- Grupo -->
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="grupo">Grupo<span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12 form-group">
														<input type="text" class="form-control has-feedback-left" id="grupo" name="grupo" placeholder="Grupo" readonly="">
														<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
													</div>
												</div>
												<!-- Area -->
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12" for="area">Area<span class="required">*</span>
													</label>
													<div class="col-md-6 col-sm-6 col-xs-12 form-group">
														<input type="text" class="form-control has-feedback-left" id="area" name="area" placeholder="Area" readonly="">
														<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
													</div>
												</div>

											</div>

											<!-- Fecha Inicio -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="fechaInicio">Fecha inicio<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="fechaInicio" name="fechaInicio" placeholder="Fecha Inicio">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Fecha Inicio -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="fechaFin">Fecha Fin<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="fechaFin" name="fechaFin" placeholder="Fecha Fin">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<div class="ln_solid"></div>
											<table id="datatable" class="table table-striped table-bordered">
	                      <thead>
	                        <tr>
	                          <th>RPE</th>
	                          <th>Nombre</th>
	                          <th>Categoria Actual</th>
	                          <th>Categoria Propuesta</th>
														<th>No. Plaza</th>
														<th>Periodo Propuesto</th>
	                        </tr>
	                      </thead>
	                      <tbody id="tb_depto">
													<?php
													$allDep = $departamento->getDepartamentos();
													foreach ($allDep as $dts)
													{
												 ?>
	                        <tr>
	                          <td><?php echo $dts->id_departamento; ?></td>
	                          <td><?php echo $dts->nombre; ?></td>
	                          <td><?php echo $dts->responsable; ?></td>
														<td><?php echo $dts->extencion; ?></td>
	                          <td><?php echo $dts->telefono; ?></td>
														<td align="center">

															<button type="button" data-toggle="modal" data-target="#updateDepto" onclick="carga_ajax(<?php echo $dts->id_departamento; ?>,'ajax.php?mode=modaldpto','updateDepto');"
																title="Editar" class="btn btn-success"><i class="fa fa-edit"></i></button>

																 <button type="button" onclick="eliminarDepto(<?php echo $dts->id_departamento; ?>);"
																 title="Eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></button>

														</td>
	                        </tr>
													<?php }; ?>

	                      </tbody>
	                    </table>
                    </form>
										<!-- End form -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
      <?php include 'html/overall/container_base_footer.php'; ?>
			<script src="views/app/js/movimientos/movimientos.js"></script>
  </body>
</html>
