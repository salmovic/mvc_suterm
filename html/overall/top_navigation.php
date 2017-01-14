<div class="top_nav">
	<div class="nav_menu">
		<nav>
			<div class="nav toggle">
				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="">
					<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="views/app/fotos/<?php echo $_SESSION['foto']; ?>" alt=""><?php echo "<span style='color:white'>".$_SESSION['nombreComp']."</span>"; ?>
						<span class=" fa fa-angle-down"></span>
					</a>
					<ul class="dropdown-menu dropdown-usermenu pull-right">
						<li><a data-toggle="modal" data-target="#fotoperfil" onclick="carga_ajax(0,'ajax.php?mode=modal_foto','fotoperfil');"><i class="fa fa-user pull-right"></i>Cambiar foto</a></li>
						<li><a onclick="cerrarSession();"><i class="fa fa-sign-out pull-right"></i> Cerrar Sesión</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>

<!-- modal -->
		<div id="fotoperfil" class="modal fade" role="dialog">
		</div>
