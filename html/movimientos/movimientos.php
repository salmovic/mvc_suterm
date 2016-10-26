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
                <h3>Form Validation</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Movimientos <small>Realizar movimiento</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal" id="frmmovimiento">
                    <div class="row">
                    		<div class="col-xs-6">
		                        <label for="tipoperm" class="col-sm-3 control-label">Tipo de Permiso:</label>
		                        <div class="col-sm-5">
		                         <select class="form-control" name="tipo_perm">
		                            <?php
																$tipoPerm = $tipoPermiso->getTipoPermiso();
																 foreach ($tipoPerm as $dts ): ?>
																 <option><?php echo $dts->nombre; ?></option>
		                            <?php endforeach; ?>
		                          </select>
		                      </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
                            <label for="rpe_empleado" class="col-sm-6 control-label">RPE Empleado:</label>
                            <div class="col-sm-6">
                            <input type="text" class="form-control" name="rpe_empleado" id="rpe_empleado" placeholder="Buscar...">
                            </div>
                            </div>
                        </div>
                        <div class="col-xs-3">
                            <div class="form-group">
	                            <label for="inputEmail3" class="col-sm-6 control-label">Folio:</label>
	                            <div class="col-sm-6">
	                            	<input type="text" class="form-control" name="folio_mov" readonly="" value="0001">
	                            </div>
                            </div>
                        </div>
                    </div>
										<div class="ln_solid"></div>
                     <div class="row" id="dtsSolicitante">
                      <div class="col-xs-5">
                       Nombre Empleado:
                        <input type="text" class="form-control" placeholder="Nombre Completo" name="nombre" readonly>
                      </div>
                      <div class="col-xs-3">
                       Categoría:
                        <input type="text" class="form-control" name="categoria" placeholder="Categoría" readonly value="cat">
                      </div>

                      <div class="col-xs-2">
                       No. Plaza:
                        <input type="text" class="form-control" name="no_plaza" placeholder="No. Plaza" readonly value="33">
                      </div>
                      <div class="col-xs-1">
                       Grupo:
                        <input type="text" class="form-control" name="grupo" placeholder="Eje: 1" readonly>
                      </div>
                      <div class="col-xs-1">
                       Unidad:
                        <input type="text" class="form-control" name="unidad" placeholder="Eje: 3" readonly>
                      </div>
                    </div>
                    <div class="row">
                       <div class="ln_solid"></div>
                      <div class="col-xs-6">
                       Fecha de Inicio:
                        <input type="text" class="form-control" name="fechain" placeholder="Eje: 3">
                      </div>
                      <div class="col-xs-6">
                       Fecha Fin:
                        <input type="text" class="form-control" placeholder="Eje: 3">
                      </div>
                     </div>
										</form>

                     <div class="ln_solid"></div>
                     <div class="row">
												<form class="form-horizontal">
													<div class="col-xs-12">
														<table class="table table-striped">
														<thead>
															<tr>
																<th>RPE</th>
																<th>Nombre</th>
																<th>Categoria Actual</th>
																<th>Categoria Propuesta</th>
																<th>No. Plaza</th>
																<th>Periodo Inicio</th>
																<th>Periodo Fin</th>
																<th>Operacion</th>
															</tr>
														</thead>
														<tbody id="tbMovimiento">

														</tbody>
														</table>
													</div>
												</form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
			<!-- modal -->
			<div id="upMovimiento" class="modal fade" role="dialog">

			</div>
      <?php include 'html/overall/container_base_footer.php'; ?>
			<script src="views/app/js/movimientos/movimientos.js"></script>
  </body>
</html>
