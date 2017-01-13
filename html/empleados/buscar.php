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
                <h3>Búsqueda Avanzada</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
								<!-- Lista Empleados -->
								<div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de Empleados</h2>
                    <ul class="nav navbar-right panel_toolbox">
											<li><a >&nbsp;</a></li>
											<li><a >&nbsp;</a></li>
											<li><a >&nbsp;</a></li>
											<li><a class="collapse-link" data-toggle="tooltip" title="Ocultar / Mostrar"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
									<div class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>RPE</th>
                          <th>Nombre</th>
													<th>E-Mail</th>
                          <th>Celular</th>
                          <th>Ingreso Empresa</th>
													<th>Ingreso Suterm</th>
                          <th>Departamento</th>
                          <th>Operacion</th>
                        </tr>
                      </thead>
                      <tbody id="tb_deleg">
												<?php
												$desabilitar ="";
											// deshabilitar btn eliminar si es usuario es estandar
											if( $_SESSION['tipo_usr']==0 ) $desabilitar='disabled="true"';

												$ellEmp = $empleado->getEmpleados();
												foreach ($ellEmp as $dts) {
												 ?>
                        <tr>
													<td><?php echo $dts->rpe; ?></td>
													<td><?php echo $dts->nombre; ?></td>
													<td><?php echo $dts->email; ?></td>
													<td><?php echo $dts->celular; ?></td>
													<td><?php echo $dts->in_empresa; ?></td>
													<td><?php echo $dts->in_suterm; ?></td>
													<td><?php echo $dts->departamento; ?></td>
													<td align="center">
														<button type="button" onclick="updateEmpleado('<?php echo $dts->rpe; ?>');"
															title="Editar" class="btn btn-success" <?php echo $desabilitar; ?>><i class="fa fa-edit"></i></button>
													 <button type="button" onclick="eliminarEmpleado('<?php echo $dts->rpe; ?>');"
													 title="Eliminar" class="btn btn-danger" <?php echo $desabilitar; ?>><i class="fa fa-trash"></i></button>
													 </td>
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

	 <?php include 'html/overall/container_base_footer.php'; ?>
	 <script src="views/app/js/empleado/update.js"></script>

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
