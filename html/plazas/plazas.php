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
                <h3>Plazas</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
								<!-- Panel Categorias -->
								<div class="x_panel">
                  <div class="x_title">
                    <h2>Agregar una nueva Plaza.</h2>
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
										<form class="form-horizontal form-label-left" novalidate id="frmplaza">
											<!-- Numro plaza -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_plaza">Número Plaza<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="no_plaza" name="no_plaza" placeholder="Número de plaza." onblur="_no_plaza(this)">
													<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Nombre categoria -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre_cat">Nombre Categoría<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="nombre_cat" name="nombre_cat" placeholder="Nombre categoria" onblur="_nombre_cat(this)">
													<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Grupo Organico -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-6" for="grupo_organico">Grupo Orgánico / Nivel de Desempleño<span class="required">*</span>
												</label>
												<div class="col-md-3 col-sm-3 col-xs-3 form-group">
													<!-- <input type="text" class="form-control has-feedback-left" id="grupo_organico" name="grupo_organico" placeholder="Nivel de desempeño"> -->
													<select class="form-control has-feedback-left" name="grupo_organico" onblur="validarSelect(this)">
														<option value="-1">--Grupo Orgánico--</option>
															<?php for ($i=1; $i <=16; $i++) {
																?>
																	<option value="<?php echo $i; ?>"><?php echo grupoOrganico($i); ?></option>
																<?php
															} ?>
													</select>
													<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-3 form-group">
													<select class="form-control has-feedback-left" name="nivel_desempenio" onblur="validarSelect(this)">
														<option value="-1">--Nivel de Desempeño--</option>
														<?php for ($i=1; $i <=13; $i++) {
															?>
																<option value="<?php echo $i; ?>"><?php echo nivelDesempenio($i); ?></option>
															<?php
														} ?>
													</select>
													<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Nivel de remuneracion -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nivel_remuneracion">Nivel de remuneración<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="nivel_remuneracion" name="nivel_remuneracion" placeholder="Nivel de remuneración ( $ )" onblur="_nivel_remuneracion(this)">
													<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Grupo Nivel -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="grupo_nivel">Grupo Nivel<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="grupo_nivel" name="grupo_nivel" placeholder="Grupo Nivel" onblur="_grupo_nivel(this)">
													<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Plan Carrera -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="plan_carrera">Plan de Carrera / Grupo / Unidad<span class="required">*</span>
												</label>
												<div class="col-md-2 col-sm-2 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="plan_carrera" name="plan_carrera" placeholder="No. Plan de carrera" onblur="_plan_carrera(this)">
													<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
												</div>
												<div class="col-md-2 col-sm-2 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="grupo" name="grupo" placeholder="Grupo" onblur="_grupo(this)">
													<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
												</div>
												<div class="col-md-2 col-sm-2 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="unidad" name="unidad" placeholder="Unidad" onblur="_unidad(this)">
													<span class="fa fa-book form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- token -->
											<input type="hidden" name="token" value="setplaza">
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="button" onclick="resetForm('frmplaza');" class="btn btn-primary">Cancelar</button>
                          <button type="submit" class="btn btn-success" id="enviar_plaza">Guardar</button>
                        </div>
                      </div>
                    </form>
										<!-- End form -->
                  </div>
                </div>
								<!-- Panel Lista Categorias -->
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de Plazas </h2>
                    <ul class="nav navbar-right panel_toolbox">
											<li><a >&nbsp;</a></li>
											<li><a >&nbsp;</a></li>
											<li><a >&nbsp;</a></li>
											<li><a class="collapse-link" data-toggle="tooltip" data-placement="top" title="Ocultar / Mostrar"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>

									<div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Plaza</th>
                          <th>Categoria</th>
													<th>Grupo Orgánico</th>
													<th>Niv. Desempeño</th>
													<th>Niv. Remuneración</th>
													<th>Grupo Nivel</th>
													<th>Plan de Carrera</th>
													<th>Grupo</th>
													<th>Unidad</th>
													<th>Operación</th>
                        </tr>
                      </thead>
                      <tbody id="tb_plaza">
												<?php
													$allCat= $plazas->getPlazas();
													foreach ($allCat as $dts) {
												 ?>
                        <tr>
													<td><?php echo $dts->no_plaza; ?></td>
                          <td><?php echo $dts->nombre_cat; ?></td>
                          <td><?php echo grupoOrganico($dts->grupo_organico); ?></td>
													<td><?php echo nivelDesempenio($dts->nivel_desempenio); ?></td>
                          <td><?php echo "$ ".$dts->nivel_remuneracion; ?></td>
													<td><?php echo $dts->grupo_nivel; ?></td>
                          <td><?php echo $dts->plan_carrera; ?></td>
													<td><?php echo $dts->grupo; ?></td>
													<td><?php echo $dts->unidad; ?></td>
													<td align="center">
														<button type="button" data-toggle="modal" data-target="#myModal" onclick="carga_ajax('<?php echo $dts->no_plaza; ?>','ajax.php?mode=modal_plaza','myModal');"
														title="Editar" class="btn btn-success"> <i class="fa fa-edit"></i> </button>

														 <button type="button" onclick="eliminarPlaza('<?php echo $dts->no_plaza; ?>');"
														 	title="Eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></button>
													</td>
                        </tr>
												<?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
				<!-- modal actualizar-->
				<div id="myModal" class="modal fade" role="dialog">
				 </div>
				<!-- end modal -->
				<?php include 'html/overall/container_base_footer.php'; ?>
				<!-- Script Categorias -->
				<script src="views/app/js/plazas/validaciones.js"></script>
				<script src="views/app/js/plazas/plazas.js"></script>

		<!-- Datatables -->
    <script>
      $(document).ready(function() {

        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>

</body>
</html>
