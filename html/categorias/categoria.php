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
                <h3>Categorías</h3>
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
                    <h2>Agregar Categoria </h2>
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
											<!-- Numro plaza -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="no_plaza">Numero Plaza <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="no_plaza" name="no_plaza" placeholder="Numero de plaza">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Categoría -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="categoria">Categoría<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="categoria" name="categoria" placeholder="Eje. Profesionista">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Plaza actual -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="plaza_actual">Plaza Actual<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="plaza_actual" name="plaza_actual" placeholder="Plaza Actual">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Grupo Organico -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="grupo_organico">Grupo Organico<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="grupo_organico" name="grupo_organico" placeholder="Grupo Organico">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Nivel de desempeño -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nivel_desempenio">Nivel de desempeño<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="nivel_desempenio" name="nivel_desempenio" placeholder="Nivel de desempeño">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Nivel de remuneracion -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="nivel_remuneracion">Nivel de remuneracion<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="nivel_remuneracion" name="nivel_remuneracion" placeholder="Nivel de remuneración">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Grupo Nivel -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="grupo_nivel">Grupo Nivel<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="grupo_nivel" name="grupo_nivel" placeholder="Grupo Nivel">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Plan Carrera -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="plan_carrera">Plan de Carrera<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="plan_carrera" name="plan_carrera" placeholder="Plan de Carrera">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- token -->
											<input type="hidden" name="token" value="ok">
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
                          <th>No. de Plaza</th>
                          <th>Categoría</th>
                          <th>Plaza Actual</th>
													<th>Grupo Organico</th>
													<th>Niv. Desempeño</th>
													<th>Niv. Remuneración</th>
													<th>Grupo Nivel</th>
													<th>Plan de Carrera</th>
													<th>Operaciones</th>
                        </tr>
                      </thead>
                      <tbody>

                        <tr>
                          <td><?php echo '$dts->id_categorias;' ?></td>
													<td><?php echo '$dts->no_plaza;' ?></td>
                          <td><?php echo '$dts->categoria;' ?></td>
                          <td><?php echo '$dts->plaza_actual;' ?></td>
													<td><?php echo '$dts->grupo_organico;' ?></td>
													<td><?php echo '$dts->nivel_desempenio;' ?></td>
                          <td><?php echo '$dts->nivel_remuneracion;' ?></td>
													<td><?php echo '$dts->grupo_nivel;' ?></td>
                          <td><?php echo '$dts->plan_carrera;' ?></td>
													<td>
														<a href="javascript:void(0);" data-toggle="modal" data-target="#modal" onclick="carga_ajax('i','modal','../modulos/categorias.php');" data-toggle="tooltip" data-placement="top" title="Editar" class="btn btn-success"><i class="fa fa-edit"></i></a>
														<a href="#" data-toggle="tooltip" data-placement="top" title="Eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></a>
													</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
				<!-- Modal -->
				<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h4 class="modal-title" id="myModalLabel">Modal Normal</h4>
				      </div>
				      <div class="modal-body">
				        Texto #manosenelcodigo Normal
				      </div>
				      <div class="modal-footer">
						<h4>Pie de Pagina</h4>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- End Modal -->

				<?php include 'html/overall/container_base_footer.php'; ?>

  

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

</body>
</html>
