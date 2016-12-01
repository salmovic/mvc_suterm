<div class="container body">
	<div class="main_container">
		<div class="col-md-3 left_col">
			<div class="left_col scroll-view">
				<div class="navbar nav_title" style="border: 0;">
					<a href="javascript:void(0);" class="site_title" id="suterm"><i class="fa fa-building "></i> <span>SUTERM</span></a>
				</div>
				<div class="clearfix"></div>
				<!-- menu profile quick info -->
				<div class="profile">
					<div class="profile_pic">
						<img src="views/app/images/user.png" class="img-circle profile_img">
					</div>
					<div class="profile_info">
						<span>Privilegios: <?php echo $_SESSION['tipo_usr']==1?"Admin":"Estandar";?></span>
						<h2><span>Usuario:</span> <?php echo $_SESSION['usr'] ?></h2>
					</div>
				</div>
				<!-- /menu profile quick info -->
				<br />
				<!-- sidebar menu -->
				<?php
				if($_SESSION['tipo_usr']==1) {include HTML_DIR.'overall/sidebar_menu.inc';}
				else
				include HTML_DIR.'overall/sidebar_menu2.inc';
				?>
				<!-- /sidebar menu -->

				<!-- /menu footer buttons -->
				<?php include HTML_DIR.'overall/menu_footer_buttons.inc' ?>
				<!-- /menu footer buttons -->
			</div>
		</div>

		<!-- top navigation -->
		<?php include HTML_DIR.'overall/top_navigation.php'; ?>
		<!-- /top navigation -->
