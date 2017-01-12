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
                <h3>Departamentos</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_panel">
                  <div class="x_title">
                    <h2>Agregar un nuevo departamento.</h2>
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
											<!-- Nombre -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="nombre" name="nombre" placeholder="Nombre del departamento" onblur="_nombre(this)">
													<span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Extencion -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="extencion">Extención <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="extencion" name="extencion" placeholder="Número de Extención" onblur="_extencion(this)">
													<span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Telefono -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Teléfono <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="telefono" name="telefono" placeholder="Número de Teléfono" onblur="_telefono(this)">
													<span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- token -->
											<input type="hidden" name="token" value="set_departamento">
											<!-- Botones -->
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="button" class="btn btn-primary" onclick="resetForm('frmDepartamento');">Cancelar</button>
                          <button id="setDepartamentos" type="submit" class="btn btn-success">Guardar</button>
                        </div>
                      </div>
                    </form>
										<!-- End form -->
                  </div>
                </div>

								<!-- Panel departamento-->
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de Departamentos. </h2>
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
                          <th>ID</th>
                          <th>Nombre</th>
                          <th>Extención</th>
													<th>Teléfono</th>
													<th>Operaciones</th>
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
													<td><?php echo $dts->no_extencion; ?></td>
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
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
				<!-- modal update -->
				<div id="updateDepto" class="modal fade" role="dialog">

				</div>
				<?php include 'html/overall/container_base_footer.php'; ?>
				<!-- script all -->
				<script src="views/app/js/departamentos/validaciones.js"></script>
				<script src="views/app/js/departamentos/departamentos.js"></script>

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
    <!-- /Datatables -->
</body>
</html>
