<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>User
			<small>Add User</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo site_url('C_dashboard')?>">
					<i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li>
				<a href="<?php echo site_url('C_user')?>">
					<i class="fa fa-user"></i> User</a>
			</li>
			<li>
				<a href="<?php echo site_url('C_user/toadd')?>">
					</i>Add User</a>
			</li>
		</ol>
	</section>
	<section class="content">
		<form role="form" enctype="multipart/form-data" class="form-validate" method="post" action="<?php echo base_url('index.php/C_user/add'); ?>">
			<div class="row">
				<div class="col-md-6">
					<!-- general form elements -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">User Profile</h3>
						</div>
						<!-- /.box-header -->
						<!-- form start -->
						<!-- Form Media social -->
						<div class="box-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Lengkap</label>
								<input type="text" class="form-control rounded" name="namauser" id="namaUser" require>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">E-mail</label>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<input type="text" class="form-control" id="" name="emailuser" require>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<input type="password" class="form-control" id="" name="passworduser" require>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Level</label>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<select class="form-control" name="leveluser">
											<option value="user">User</option>
											<option value="admin">Admin</option>										
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<div class="form-group">
											<label for="exampleInputEmail1">Operator</label>
											<input type="text" class="form-control" name="operator" id="touroperator" placeholder="Enter your name">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- End Form medsos -->
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
				<!--/.col (left) -->
				<!-- right column -->
				<div class="col-md-6">
					<!-- Horizontal Form -->
					<div class="box box-info">
						<div class="box-header with-border">
							<h3 class="box-title">Profil Foto</h3>
						</div>
						<!-- /.box-header -->
						<!-- form start -->
						<div class="box-body">
							<h4>Upload your image</h4>
							<!-- <div class="form-group">
								<input type="text" name="judul" class="form-control" placeholder="Judul">
							</div> -->
							<div class="form-group">
								<input id="media" type="file" name="filefoto" class="dropify" data-height="300">
								<input type="hidden" name="id_media" value="">
							</div>

						</div>
						<!-- /.box -->
						<!-- /.box -->
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					<button class="btn btn-success" type="submit">Simpan</button>
					<span></span>
					<button class="btn btn-danger" type="reset">Cancel</button>
				</div>
			</div>
		</form>
	</section>
</div>
