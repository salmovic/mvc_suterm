<div class="top_nav">
	<div class="nav_menu">
		<nav>
			<div class="nav toggle">
				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
			</div>
			<ul class="nav navbar-nav navbar-right">
				<li class="">
					<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<img src="views/app/fotos/<?php echo $_SESSION['foto']; ?>" alt=""><?php echo $_SESSION['nombreComp']; ?>
						<span class=" fa fa-angle-down"></span>
					</a>
					<ul class="dropdown-menu dropdown-usermenu pull-right">
						<li><a onclick="cerrarSession();"><i class="fa fa-sign-out pull-right"></i> Carrar Sesión</a></li>
					</ul>
				</li>
			</ul>
		</nav>
	</div>
</div>
