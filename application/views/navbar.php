<header class="main-header box-material-md">

	<!-- Logo -->
	<a href="index2.html" class="logo">
		<!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>P</b>M</span>
		<!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><img height="30px" src="https://phinemo.com/s/images/xphinemo-logo-red.png.pagespeed.ic.-7PjMG-qEd.webp"
			 alt="Phinemo Logo"></span>
	</a>

	<!-- Header Navbar: style can be found in header.less -->
	<nav class="navbar navbar-static-top ">
		<!-- Sidebar toggle button-->
		<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>
		<!-- Navbar Right Menu -->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- Messages: style can be found in dropdown.less-->

				<!-- Notifications: style can be found in dropdown.less -->

				<!-- Tasks: style can be found in dropdown.less -->

				<!-- User Account: style can be found in dropdown.less -->
				<?php
				foreach ($profil as $data){
					if($data->gambar == NULL || $data->resized == NULL){
						$data->resized = 'default_profile_thumb.png';
						$data->gambar = 'default_profile.png';
					}
				?>
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo base_url().'upload/images/'.$data->resized;?>" class="user-image" alt="User Image">
						<span class="hidden-xs"><?php echo $data->full_name;?></span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<img src="<?php echo base_url().'upload/images/'.$data->gambar;?>" class="img-circle" alt="User Image">

							<p>
								<?php echo $data->email;?>
								<small><?php echo $this->session->userdata('level');?></small>
							</p>
						</li>
						<!-- Menu Body -->
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-left">
								<a href="#" class="btn btn-default btn-flat">Profile</a>
							</div>
							<div class="pull-right">
								<a href="<?php echo site_url('C_login/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
							</div>
						</li>
					</ul>
				</li>
				<!-- Control Sidebar Toggle Button -->
			</ul>
		</div>

	</nav>
</header>


<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo base_url().'upload/images/'.$data->gambar;?>" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p><?php echo $data->full_name;?></p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search...">
				<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat">
						<i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
		<!-- /.search form -->
		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu" data-widget="tree">
			<li class="header">MAIN NAVIGATION</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span></a>
				<ul class="treeview-menu">
					<li><a href="<?php echo site_url('C_dashboard/index') ?>"><i class="fa fa-circle-o text-aqua"></i>Statistic</a></li>
				</ul>
			</li>
			<!-- Chart data mahasiswa -->

			<li>
				<a href="<?php echo site_url('C_operator/index') ?>">
					<i class="fa fa-desktop"></i> <span>Tour Operator</span>
					<span class="pull-right-container">
						<!-- <small class="label pull-right bg-green">new</small> -->
					</span>
				</a>
			</li>
			<li>
				<a href="<?php echo site_url('C_product/index') ?>">
					<i class="fa fa-gift"></i> <span>Product</span>
					<span class="pull-right-container">
						<!-- <small class="label pull-right bg-green">new</small> -->
					</span>
				</a>
			</li>
			<li class="treeview">
				<a href="#"><i class="fa fa-user"></i> <span>User</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span></a>
				<ul class="treeview-menu">
					<li><a href="<?php echo site_url('C_user/password') ?>"><i class="fa fa-circle-o text-aqua"></i>Change Password</a></li>
					<?php 
					if ($this->session->userdata('level') == 'superadmin' || $this->session->userdata('level') == 'admin'){
						echo '<li><a href="'.site_url("C_user/index").'"><i class="fa fa-circle-o text-aqua"></i>List User</a></li>';
					}?>
					
				</ul>
			</li>
		</ul>
		<?php }?>
	</section>
	<!-- /.sidebar -->
</aside>

