<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>User
			<small>Edit User</small>
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
				<a href="#">
					</i>Edit User</a>
			</li>
		</ol>
	</section>
	<section class="content">
		<?php foreach($user as $data){
			 //var_dump($user) ?>
		<form role="form" enctype="multipart/form-data" class="form-validate" method="post" action="<?php echo base_url('index.php/C_user/update'); ?>">
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
								<input type="hidden" class="form-control rounded" name="id" id="namaUser" value="<?php echo $data->id_user?>" require>
								<input type="text" class="form-control rounded" name="namauser" id="namaUser" value="<?php echo $data->full_name?>" require>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">E-mail</label>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<input type="text" class="form-control" id="" name="emailuser" require value="<?php echo $data->email?>">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<input type="password" class="form-control" id="" name="passworduser" require value="<?php echo $data->pass?>">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Level</label>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<select class="form-control" name="leveluser">
											<?php if($data->level == 'admin')
											{ echo '<option value="user">User</option>
											<option value="admin" selected >Admin</option>';
											}elseif($data->level == 'user'){
												echo '<option selected value="user">User</option>
											<option value="admin" >Admin</option>';
											} ?>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Operator</label>
								<div class="row">
									<div class="col-xs-12 col-md-12">
									<div class="form-group">
											<input type="text" class="form-control" name="operator" id="touroperator">
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
								<?php 
									if ($media != null){
										// var_dump($media); //tambahkan $_FILES untuk pengecualian
										foreach ($media as $pic){
											echo '<input type="hidden" name="id_foto_old" value="'.$pic->id_media.'">';
											echo '<input type="hidden" name="id_foto" value="'.$pic->id_media.'">';
											echo '<input type="file" name="filefoto" class="dropify" data-height="300" data-default-file="'.base_url().'upload/images/'.$pic->gambar.'">';
										}
									}
									else{
										echo '<input type="file" name="filefoto" class="dropify" data-height="300">';	
									}
								?>
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
					<button class="btn btn-danger" type="cancel">Cancel</button>
				</div>
			</div>
		</form>
<?php }?>
	</section>
</div>
