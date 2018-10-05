<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 2 | Dashboard</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url('admintemplate/dropify/dropify.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('admintemplate/bower_components/bootstrap/dist/css/bootstrap.min.css')?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url('admintemplate/bower_components/font-awesome/css/font-awesome.min.css')?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url('admintemplate/bower_components/Ionicons/css/ionicons.min.css')?>">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url('admintemplate/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('admintemplate/bower_components/bootstrap-daterangepicker/daterangepicker.css')?>">
	<!-- jvectormap -->
	<link rel="stylesheet" href="<?php echo base_url('admintemplate/bower_components/jvectormap/jquery-jvectormap.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('admintemplate/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css')?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('admintemplate/dist/css/AdminLTE.min.css')?>">
	<!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url('admintemplate/dist/css/skins/_all-skins.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('admintemplate/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">
	<link href="<?php echo base_url('admintemplate/fileinput/css/fileinput.css')?>" media="all" rel="stylesheet" type="text/css"/>
    <link href="<?php echo base_url('admintemplate/fileinput/themes/explorer-fa/theme.css')?>" media="all" rel="stylesheet" type="text/css"/>
	


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

	<!-- Google Font -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
	<header class="main-header">

		<!-- Logo -->
		<a href="index2.html" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>A</b>LT</span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>Admin</b>TE</span>
		</a>

		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
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
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="<?php site_url('upload/images/user.jpg')?>" class="user-image" alt="User Image">
							<span class="hidden-xs">Alexander Pierce</span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img src="<?php site_url('upload/images/user.jpg')?>" class="img-circle" alt="User Image">

								<p>
									Alexander Pierce - Web Developer
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
									<a href="#" class="btn btn-default btn-flat">Sign out</a>
								</div>
							</li>
						</ul>
					</li>
					<!-- Control Sidebar Toggle Button -->
				</ul>
			</div>

		</nav>
	</header>

	<div class="wrapper">
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">
			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">
				<!-- Sidebar user panel -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="<?php site_url('upload/images/user.jpg')?>" class="img-circle" alt="User Image">
					</div>
					<div class="pull-left info">
						<p>Alexander Pierce</p>
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
					<li class="treeview">
						<a href="#">
							<i class="fa fa-files-o"></i>
							<span>Menu</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="<?php echo site_url('C_operator/index') ?>"><i class="fa fa-circle-o text-aqua"></i>Tour Operator</a></li>
							<li><a href="<?php echo site_url('C_product/index') ?>"><i class="fa fa-circle-o text-aqua"></i>Produk</a></li>
						</ul>
					</li>
					<li class="header">LABELS</li>
					<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
					<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
					<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
				</ul>
			</section>
			<!-- /.sidebar -->
		</aside>
