<!DOCTYPE html>
<html lang="es">
<head>
<?php include HTML_DIR.'/overall/head.inc' ?>
</head>
<body class="nav-md">
  <div class="container body">
    <div class="main_container">
			<?php include 'html/overall/container_base_head.php'; ?>
        <!-- page content -->
				<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Realizar Movimiento</h3>
              </div>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" id="buscarSol" placeholder="Buscar por nombre.">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Buscar</button>
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
                    <h2>Llenar correctamente todos los campos.</h2>
										<ul class="nav navbar-right panel_toolbox">
											<li><a >&nbsp;</a></li>
											<li><a >&nbsp;</a></li>
											<li><a >&nbsp;</a></li>
											<li><a class="collapse-link" data-toggle="tooltip" data-placement="top" title="Ocultar / Mostrar"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                  <form class="form-horizontal" id="frmmovimiento">
                    <div class="row">
                    </div>
										<div id="dtsSolicitante">
										</div> <!--./Id solicitante--->
                     <div class="ln_solid"></div>
                     <div class="row">
												<form class="form-horizontal">
													<div class="col-xs-12">
														<table class="table table-striped">
														<thead>
															<tr>
																<th>RPE</th>
																<th>Nombre</th>
																<th>Categoría Actual</th>
																<th>Categoría Propuesta</th>
																<th>No. Plaza</th>
																<th>Periodo Inicio</th>
																<th>Periodo Fin</th>
																<th>Operación</th>
															</tr>
														</thead>
														<tbody id="tbMovimiento">
														</tbody>
														</table>
													</div>
												</form>
                  </div>
									<div class="ln_solid"></div>
                  <form class="dtsMovimiento" >
    									<div class="row">
    										<div class="col-xs-4">
    										 Secretario de Trabajo Sección 55 SUTERM
												 <select class="form-control" name="sec_suterm">
													 <option value="-1">--Seleccionar Secretario de Trabajo--</option>
													 <?php
													 $secT = $movimientos->getUsrAdmin();
													 foreach ($secT as $dts) { ?>
														<option value="<?php echo $dts->nombre; ?>"><?php echo $dts->nombre; ?></option>
														<?php } ?>
												 </select>
    										</div>

    										<div class="col-xs-4">
    										 Delegado Departamental
													<select class="form-control" name="delegado">
														<option value="-1">--Seleccionar Delegado--</option>
														<?php
														$allDel = $delegado->getDelegados();
														foreach ($allDel as $dts) { ?>
														 <option value="<?php echo $dts->id_delegado; ?>"><?php echo $dts->nombre; ?></option>
														 <?php } ?>
													</select>
    										</div>
    										<div class="col-xs-4">
    										 Jefe Inmediato Supremo
    											<input type="text" class="form-control" name="jefe_inmed" id="jefe_inmed" placeholder="Ingrese el nombre completo." onkeyup="minToMayuscula('jefe_inmed')">
    										</div>
    										<div class="col-xs-12">
    											Descripción
    											<textarea name="descripcion" id="descripcion" rows="3" cols="5" class="form-control" placeholder="Agregar una descripcion" onkeyup="minToMayuscula('descripcion')"></textarea>
    										</div>
    									</div>
                    </form>
									<div class="ln_solid">
									</div>
									<div class="row">
										<div class="col-xs-12">
											<input type="hidden" name="token" value="setmomvimiento" class="dtsMovimiento">
											<button type="button" id="sendmov" class="btn btn-primary">Generar PDF</button>
										</div>
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
      <!-- footer content -->
      <footer>
        <div class="pull-right">
          <?php echo FOOTER_COPY; ?> por CTPALM <a href="http://www.cfe.gob.mx/" target="_blank">CFE</a>
        </div>
        <div class="clearfix"></div>
      </footer>
    </div> <!-- end main_container-->
  </div> <!-- end container body-->
	<!-- jQuery -->
 <script src="views/vendors/jquery/dist/jquery.min.js"></script>
 <!-- Bootstrap -->
 <script src="views/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- Custom Theme Scripts -->
 <script src="views/build/js/custom.min.js"></script>
 <!-- Alertify -->
 <script src="views/build/alertify/lib/alertify.min.js"></script>

 <!-- funciones rutas -->
 <script src="views/app/js/url.js"></script>
 <!-- funciones generales-->
 <script src="views/app/js/funciones.js"></script>
 <script src="views/build/datepicker/moment.min.js"></script>
<script src="views/build/datepicker/momentES.js"></script>
 <script src="views/build/datepicker/daterangepicker.js"></script>

<script src="views/app/js/movimientos/movimientos.js"></script>



</body>
</html>
