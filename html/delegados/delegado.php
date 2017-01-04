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
                <h3>Agregar Delegado</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
								<!-- Add delegados -->
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Agregar Delegado </h2>
                    <ul class="nav navbar-right panel_toolbox">
											<li><a >&nbsp;</a></li>
											<li><a >&nbsp;</a></li>
											<li><a >&nbsp;</a></li>
											<li><a class="collapse-link" data-toggle="tooltip" title="Ocultar / Mostrar"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
										<!-- formulario -->
										<form class="form-horizontal form-label-left" novalidate method="post" id="frmDeleg">
											<!--rpe Empleado -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="rpe">Empleado<span class="required">*</span>
												</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control"  class="form-control has-feedback-left" name="rpe_delegado">
														<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
														<option value="-1">--Seleccione un empleado--</option>
														<?php
														 $allEmp = $empleado->getEmpleados();
														 foreach ($allEmp as $dts) {
														?>
														<option value="<?php echo $dts->rpe; ?>"><?php echo $dts->nombre." ".$dts->apellidos; ?></option>
														<?php } ?>
                          </select>
                        </div>
                      </div>
											<!-- Descripcion -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="descripcion">Descripcion <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
	                        <input type="text" class="form-control has-feedback-left" id="descripcion" name="descripcion" placeholder="Descripcion">
	                        <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
	                      </div>
											</div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
													<input type="hidden" name="token" value="setdeleg">
                          <button type="button" class="btn btn-primary" onclick="resetForm('frmDeleg');">Cancel</button>
                          <button id="setdeleg" type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>
                    </form>
										<!-- End form -->

										<div class="ln_solid"></div>
										<!--  -->
                  </div>
                </div>
								<!-- Lista delegados -->
								<div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de delegados </h2>
                    <ul class="nav navbar-right panel_toolbox">
											<li><a >&nbsp;</a></li>
											<li><a >&nbsp;</a></li>
											<li><a >&nbsp;</a></li>
											<li><a class="collapse-link" data-toggle="tooltip" title="Ocultar / Mostrar"><i class="fa fa-chevron-up"></i></a></li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
									<div class="x_content">
                    <h3>Delegados</h3>
										<div class="ln_solid"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>RPE</th>
                          <th>Nombre</th>
													<th>Departamento</th>
                          <th>Descripcion Delegado</th>
                          <th>Operacion</th>
                        </tr>
                      </thead>
                      <tbody id="tb_deleg">
												<?php
												$allDelg = $delegado->getDelegados();
												foreach ($allDelg as $dts) {
												 ?>
                        <tr>
													<td><?php echo $dts->rpe_empleado; ?></td>
													<td><?php echo $dts->nombre; ?></td>
													<td><?php echo $dts->no_dep; ?></td>
													<td><?php echo $dts->descripcion; ?></td>
													<td align="center">
														<button type="button" data-toggle="modal" data-target="#modaldeleg" onclick="carga_ajax(<?php echo $dts->id_delegado; ?>,'ajax.php?mode=modaldeleg','modaldeleg');"
															title="Editar" class="btn btn-success"><i class="fa fa-edit"></i></button>

													 <button type="button" onclick="eliminarDelegado(<?php echo $dts->id_delegado; ?>);"
													 title="Eliminar" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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
				<!-- update del -->
				<div id="modaldeleg" class="modal fade" role="dialog">

				</div>

	 <?php include 'html/overall/container_base_footer.php'; ?>
	 <script src="views/app/js/delegado/delegado.js"></script>


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
