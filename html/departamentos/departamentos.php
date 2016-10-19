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
										<form class="form-horizontal form-label-left" novalidate method="post" id="frmDepartamento">
											<!-- id departamente -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="id_departamento">No. Departamento<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="id_departamento" name="id_departamento" placeholder="Numero de plaza">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Nombre -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nombre">Nombre<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="nombre" name="nombre" placeholder="Eje. Profesionista">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Responsable -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="responsable">Nombre<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="responsable" name="responsable" placeholder="Eje. Profesionista">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Extencion -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="extencion">Extencion<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="extencion" name="extencion" placeholder="Grupo Organico">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Telefono -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="telefono">Telefono<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="telefono" name="telefono" placeholder="Nivel de desempeño">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- token -->
											<input type="hidden" name="token" value="set_departamento">
											<!-- Botones -->
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="button" class="btn btn-primary" onclick="resetForm('frmDepartamento');">Cancel</button>
                          <button id="setDepartamentos" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
										<!-- End form -->
                  </div>
                </div>

									<!-- TE QUIERO MUCHO MI AMOR  -->

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
                          <th>Responsable</th>
                          <th>Extencion</th>
													<th>Telefono</th>
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
				<script src="views/app/js/departamentos/departamentos.js"></script>

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
