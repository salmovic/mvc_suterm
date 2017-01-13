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
                <h3>Historial de Movimientos</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
								<!-- Lista movimientos -->
								<div class="x_panel">
                  <div class="x_title">
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
                          <th>Folio</th>
                          <th>Fecha</th>
                          <th>Solicitante</th>
													<th>Periodo</th>
                          <th>Operación</th>
                        </tr>
                      </thead>
                      <tbody id="tb_historial">
												<?php
												$allMov = $movimientos->getHistorial();
												foreach ($allMov as $dts) {
												 ?>
                        <tr>
													<td><?php echo $dts->no_folio; ?></td>
													<td><?php echo $dts->fecha; ?></td>
													<td><?php echo $dts->solicitante; ?></td>
													<td><?php echo $dts->periodo; ?></td>
													<td align="center">
														<button type="button"  onclick="imprimirPDF('<?php echo $dts->no_folio;?>');"
															title="Ver PDF" class="btn btn-success"><i class="fa fa-eye"></i></button>
													<button type="button" onclick="deleteMovimiento('<?php echo $dts->no_folio; ?>');"
													 title="Eliminar" class="btn btn-danger" <?php echo $desabilitar; ?>><i class="fa fa-trash"></i></button>

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
	 <script src="views/app/js/movimientos/historial.js"></script>

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
