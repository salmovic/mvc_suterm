<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

	<div class="menu_section">
		<h3>General</h3>
		<ul class="nav side-menu">
			<li><a><i class="fa fa-home"></i> Movimientos <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="javascript:void(0);" id="home">Permisos</a></li>
					<li><a href="javascript:void(0);" id="historial">Historial</a></li>
				</ul>
			</li>
			<li><a><i class="fa fa-male"></i> Empleado <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="javascript:void(0);" id="addempleado">Agregar</a></li>
					<li><a href="javascript:void(0);" id="buscarempleado">Buscar</a></li>
				</ul>
			</li>
			<li><a><i class="fa fa-users"></i> Usuarios <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="javascript:void(0);" id="usuario">Agregar</a></li>
				</ul>
			</li>
			<li><a><i class="fa fa-user"></i> Delegados <span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a href="javascript:void(0);"  id="delegado">Delegados</a></li>
					<li><a  href="javascript:void(0);" id="categorias">Categorias</a></li>
				</ul>
			</li>
		</ul>
	</div>
	<div class="menu_section">
		<h3>Datos</h3>
		<ul class="nav side-menu">
			<li><a><i class="fa fa-archive"></i>Agregar Datos<span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a  href="javascript:void(0);" id="plaza">Plazas</a></li>
					<li><a href="javascript:void(0);" id="departamento">Departamentos</a></li>
					<li><a  href="javascript:void(0);" id="centroTrabajo">Centro de Trabajo</a></li>
				</ul>
			</li>
			<li><a><i class="fa fa-cloud-download"></i>Respaldo DB<span class="fa fa-chevron-down"></span></a>
				<ul class="nav child_menu">
					<li><a  href="javascript:void(0);" id="respaldo">Generar Respaldo</a></li>
					<li><a  href="javascript:void(0);" onclick="carga_ajax(0,'ajax.php?mode=importarbd','importarbd');" data-toggle="modal" data-target="#importarbd">Importar BD</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div>
