<!DOCTYPE html>
<html lang="es">
<head>
<?php include HTML_DIR.'/overall/head.inc' ?>
<!-- Datatables -->
    <link href="views/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="views/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="views/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="views/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="views/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

</head>
<body class="nav-md">
			<?php include 'html/overall/container_base_head.php'; ?>
        <!-- page content -->

        <!-- page content -->
				<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Centro de Trabajo</h3>
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
										<!-- form -->
										<form class="form-horizontal form-label-left" novalidate method="post">
											<!-- Nomnbre -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre Centro de Trabajo<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="nombre" name="nombre" placeholder="Numero de plaza">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Domicilio -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="domicilio">Domicilio<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="domicilio" name="domicilio" placeholder="Eje. Profesionista">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Código Postal -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo_postal">Código Postal<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="codigo_postal" name="codigo_postal" placeholder="Plaza Actual">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Municipio -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="municipio">Municipio<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="municipio" name="municipio" placeholder="Grupo Organico">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Entidad Federativa -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="entidad_fed">Entidad Federativa<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="entidad_fed" name="entidad_fed" placeholder="Nivel de desempeño">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Numero de telefono -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Telefono<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="telefono" name="telefono" placeholder="Nivel de remuneración">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- token -->
											<input type="hidden" name="token" value="ok">
											<!-- Botones -->
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary">Cancel</button>
                          <button id="send" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
										<!-- End form -->
                  </div>
                </div>
								<!-- Panel Categorias -->
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de Categorías </h2>
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
                          <th>Domicilio</th>
                          <th>Código Postal</th>
													<th>Municipio</th>
													<th>Entidad Federativa</th>
													<th>Teléfono</th>
													<th>Operaciones</th>
                        </tr>
                      </thead>
                      <tbody>
												<?php foreach ($allCt as $dts)
												{
												?>
                        <tr>
                          <td><?php echo $dts->id_centro_trabajo; ?></td>
                          <td><?php echo $dts->nombre; ?></td>
                          <td><?php echo $dts->domicilio; ?></td>
													<td><?php echo $dts->codigo_postal; ?></td>
                          <td><?php echo $dts->municipio; ?></td>
													<td><?php echo $dts->entidad_fed; ?></td>
                          <td><?php echo $dts->telefono; ?></td>
													<td align="center">
														<a href="javascript:void(0);" data-toggle="modal" data-target="#editar" data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-success"><i class="fa fa-edit"></i></a>
														<a href="javascript:void(0);" data-toggle="modal" data-target="#alert" data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
			<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">Actualizar Datos</h4>
						</div>
						<div class="modal-body">
							<!-- form -->
							<form class="form-horizontal form-label-left" novalidate method="post">
								<!-- ID -->

								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="id">ID<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12 form-group">
										<input type="text" class="form-control has-feedback-left" id="id" name="id" value="<?php echo $dts->id_centro_trabajo; ?>">
										<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
									</div>
								</div>
								<!-- Nomnbre -->
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre Centro de Trabajo<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12 form-group">
										<input type="text" class="form-control has-feedback-left" id="nombre" name="nombre" placeholder="Numero de plaza">
										<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
									</div>
								</div>
								<!-- Domicilio -->
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="domicilio">Domicilio<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12 form-group">
										<input type="text" class="form-control has-feedback-left" id="domicilio" name="domicilio" placeholder="Eje. Profesionista">
										<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
									</div>
								</div>
								<!-- Código Postal -->
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="codigo_postal">Código Postal<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12 form-group">
										<input type="text" class="form-control has-feedback-left" id="codigo_postal" name="codigo_postal" placeholder="Plaza Actual">
										<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
									</div>
								</div>
								<!-- Municipio -->
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="municipio">Municipio<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12 form-group">
										<input type="text" class="form-control has-feedback-left" id="municipio" name="municipio" placeholder="Grupo Organico">
										<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
									</div>
								</div>
								<!-- Entidad Federativa -->
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="entidad_fed">Entidad Federativa<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12 form-group">
										<input type="text" class="form-control has-feedback-left" id="entidad_fed" name="entidad_fed" placeholder="Nivel de desempeño">
										<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
									</div>
								</div>
								<!-- Numero de telefono -->
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Telefono<span class="required">*</span>
									</label>
									<div class="col-md-6 col-sm-6 col-xs-12 form-group">
										<input type="text" class="form-control has-feedback-left" id="telefono" name="telefono" placeholder="Nivel de remuneración">
										<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
									</div>
								</div>
								<!-- token -->
								<input type="hidden" name="token_up" value="ok">
								<!-- Botones -->
								<div class="form-group">
									<div class="col-md-6 col-md-offset-3">
										<button class="btn btn-primary">Cancel</button>
										<button id="send" type="submit" class="btn btn-success">Submit</button>
									</div>
								</div>
							</form>
							<!-- End form -->
						</div>
						<div class="modal-footer">
					<h4>Pie de Pagina</h4>
						</div>
					</div>
				</div>
			</div>
				<!-- end modal -->

				<!-- Mensaje alerta -->
				<div class="modal fade" id="alert" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title" id="myModalLabel">¿Desea aumentar su salario?</h4>
						</div>
						<div class="modal-body">
							<!-- form -->
							<div align="center">
								<button type="button" name="button" class="btn btn-default">No</button>
								<button type="submit" name="button" class="btn btn-success">Eliminar</button>
							</div>
							<!-- End form -->
						</div>
						<div class="modal-footer">
					<h4>Pie de Pagina</h4>
						</div>
					</div>
				</div>
				</div>
				<!-- end modal -->


		<?php include 'html/overall/container_base_footer.php'; ?>
    <!-- FastClick -->
    <script src="views/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="views/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="views/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
		<!-- validator -->
    <script src="views/vendors/validator/validator.js"></script>
		<!-- Datatables -->
    <script src="views/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="views/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="views/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="views/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="views/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="views/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="views/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="views/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="views/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="views/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="views/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="views/vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="views/vendors/jszip/dist/jszip.min.js"></script>
    <script src="views/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="views/vendors/pdfmake/build/vfs_fonts.js"></script>

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
