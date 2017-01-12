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
                <h3>Usuarios</h3>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
								<!-- Panel Categorias -->
								<div class="x_panel">
                  <div class="x_title">
                    <h2>Agregar un nuevo usuario</h2>
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
										<form class="form-horizontal form-label-left" novalidate id="frmUsuario" >
											<!--rpe Empleado -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="rpe">Empleado<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<select  class="form-control has-feedback-left" name="rpe" id="rpe" onblur="validarSelect(this)">
														<option value="-1">--Seleccione un empleado--</option>
														<?php
														 $allEmp = $empleado->getEmpleados();
														 foreach ($allEmp as $dts) {
														?>
														<option value="<?php echo $dts->rpe; ?>"><?php echo $dts->rpe." | ". $dts->nombre." ".$dts->apellidos; ?></option>
														<?php } ?>
													</select>
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>

											<div id="dtsPersonal">

											</div>
											<!--Tipo de Usuario -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="tipo_usr">Tipo de usuario<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<select  class="form-control has-feedback-left" name="tipo_usr" onblur="validarSelect(this)">
														<option value="-1">--Tipo de Usuario--</option>
														<option value="0">Estándar</option>
														<option value="1">Administrador</option>
													</select>
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Nombre Usuario -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="usr">Usuario<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="text" class="form-control has-feedback-left" id="usr" name="usr" placeholder="Ingrese un nombre de usuario" onblur="_usr(this)">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<!-- Password -->
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="passwd">Contraseña<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="password" class="form-control has-feedback-left" id="passwd" name="passwd" placeholder="Escriba una contraseña" onblur="_passwd(this)">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="passwd2">Verificar Contraseña<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="password" class="form-control has-feedback-left" id="passwd2" name="passwd2" placeholder="Vuelva a escribir la contraseña">
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>


											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="foto">Fotografia<span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12 form-group">
													<input type="file" class="form-control has-feedback-left" id="foto" name="foto" >
													<span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
												</div>
											</div>

											<!-- token -->
											<input type="hidden" name="token" value="setUsr">
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="button" onclick="resetForm('frmUsuario');" class="btn btn-primary">Cancelar</button>
                          <button type="button" class="btn btn-success" id="sendUsr">Guardar</button>
                        </div>
                      </div>
                    </form>
										<!-- End form -->
                  </div>
                </div>
								<!-- Panel Lista Categorias -->
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lista de Usuarios</h2>
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
                          <th>RPE</th>
                          <th>Nombre</th>
													<th>Usuario</th>
													<th>E-Mail</th>
													<th>Tipo Usuario</th>
													<th>Operacion</th>
                        </tr>
                      </thead>
                      <tbody id="tb_usr">
												<?php
													$allUsr= $usr->getUsuarios();
													foreach ($allUsr as $dts) {
												 ?>
                        <tr>
													<td><?php echo $dts->rpe_emp; ?></td>
													<td><?php echo $dts->nombre; ?></td>
													<td><?php echo $dts->usr; ?></td>
													<td><?php echo $dts->email; ?></td>
													<td><?php echo $dts->tipo_usuario==0?"ESTANDAR":"ADMINISTRADOR"; ?></td>
													<td align="center">
														<button type="button" data-toggle="modal" data-target="#myModal" onclick="carga_ajax('<?php echo $dts->id_usuario; ?>','ajax.php?mode=modal_usr','myModal');"
														title="Editar" class="btn btn-success"> <i class="fa fa-edit"></i> </button>

														 <button type="button" onclick="delUsr('<?php echo $dts->id_usuario; ?>');"
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
				<!-- Script user -->
				<script src="views/app/js/usuario/validaciones.js"></script>
				<script src="views/app/js/usuario/usuario.js"></script>


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
