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
                <h3>Centro de Trabajo</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_panel">
                  <div class="x_title">
                    <h2>Agregar un centro de trabajo </h2>
                    <ul class="nav navbar-right panel_toolbox">
											<li><a >&nbsp;</a></li>
											<li><a >&nbsp;</a></li>
											<li><a >&nbsp;</a></li>
											<li><a class="collapse-link" data-toggle="tooltip" data-placement="top" title="Ocultar / Mostrar"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
										<!-- formulario  -->
										<form class="form-horizontal form-label-left" novalidate method="post" id="frmCenTrabajo">
											<!-- Nomnbre -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="nombre" name="nombre" placeholder="Nombre del centro de trabajo">
													<span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Domicilio -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="domicilio">Domicilio<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="domicilio" name="domicilio" placeholder="Domicilio">
													<span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Código Postal -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo_postal">Código Postal<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="codigo_postal" name="codigo_postal" placeholder="Codigo Postal">
													<span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Municipio -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="municipio">Municipio<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="municipio" name="municipio" placeholder="Municipio">
													<span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Entidad Federativa -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="entidad_fed">Entidad Federativa<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="entidad_fed" name="entidad_fed" placeholder="Entidad Federativa">
													<span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Numero de telefono -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Telefono<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="telefono" name="telefono" placeholder="Nivel de remuneración">
													<span class="fa fa-building form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- token -->
											<input type="hidden" name="token" value="set_centrab">
											<!-- Botones -->
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="button" class="btn btn-primary" onclick="resetForm('frmCenTrabajo');">Cancelar</button>
                          <button id="setCenTrab" type="submit" class="btn btn-success">Enviar</button>
                        </div>
                      </div>
                    </form>
										<!-- End form -->
                  </div>
                </div>
								<!-- Panel Categorias -->
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de Centros de Trabajo</h2>
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
                          <th>Nombre Centro de Trabajo</th>
                          <th>Domicilio</th>
                          <th>Código Postal</th>
													<th>Municipio</th>
													<th>Entidad Federativa</th>
													<th>Teléfono</th>
													<th>Operaciones</th>
                        </tr>
                      </thead>
                      <tbody id="refresh_centrab">
												<?php
												$allCt = $centroTrabajo->getCentroTrabajo();
												foreach ($allCt as $dts)
												{
												?>
                        <tr>
                          <td><?php echo $dts->nombre; ?></td>
                          <td><?php echo $dts->domicilio; ?></td>
													<td><?php echo $dts->codigo_postal; ?></td>
                          <td><?php echo $dts->municipio; ?></td>
													<td><?php echo $dts->entidad_fed; ?></td>
                          <td><?php echo $dts->telefono; ?></td>
													<td align="center">
														<button type="button" data-toggle="modal" data-target="#up_centrab" onclick="carga_ajax(<?php echo $dts->id_centro_trabajo; ?>,'ajax.php?mode=modalcentrab','up_centrab');"
															title="Editar" class="btn btn-success"> <i class="fa fa-edit"></i> </button>
														<button type="button" onclick="delCenTrab(<?php echo $dts->id_centro_trabajo; ?>);"
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
				<!-- Actualizar Centro de Trabajo -->
				<!-- Modal -->
				<div id="up_centrab" class="modal fade" role="dialog">
				 </div>
				<!-- end modal -->
		<?php include 'html/overall/container_base_footer.php'; ?>

		<!-- funciones centro de trabajo -->
		<script src="views/app/js/centro_trabajo/centro_trabajo.js"></script>

		<!-- jQuery Smart Wizard -->
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
