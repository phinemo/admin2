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
				// var_dump($profil);
				foreach ($profil as $data){?>
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?php echo base_url().'upload/images/'.$data->resized;?>" class="user-image" alt="User Image">
						<span class="hidden-xs"><?php echo $data->nama_operator;?></span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<img src="<?php echo base_url().'upload/images/'.$data->gambar;?>" class="img-circle" alt="User Image">

							<p>
								<?php echo $data->nama_operator;?>
								<small>Member since Nov. 2012</small>
							</p>
						</li>
						<!-- Menu Body -->
						<li class="user-body">
							<div class="row">
								<div class="col-xs-4 text-center">
									<a href="#">Followers</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Sales</a>
								</div>
								<div class="col-xs-4 text-center">
									<a href="#">Friends</a>
								</div>
							</div>
							<!-- /.row -->
						</li>
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
				<p><?php echo $data->nama_operator;?></p>
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
					<i class="fa fa-th"></i> <span>Tour Operator</span>
					<span class="pull-right-container">
						<!-- <small class="label pull-right bg-green">new</small> -->
					</span>
				</a>
			</li>
			<li>
				<a href="<?php echo site_url('C_product/index') ?>">
					<i class="fa fa-th"></i> <span>Produk</span>
					<span class="pull-right-container">
						<!-- <small class="label pull-right bg-green">new</small> -->
					</span>
				</a>
			</li>
			<!-- <li>
				<a href="<?php } //echo site_url('C_media/index') ?>">
                <i class="fa fa-th"></i> <span>Widgets</span>
                <span class="pull-right-container">
                    <small class="label pull-right bg-green">new</small>
                </span>
            </a>
        </li> -->
		</ul>
	</section>
	<!-- /.sidebar -->
</aside>

