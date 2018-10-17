<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Tour Operator
			<small>Add Operator</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo site_url('C_dashboard')?>">
					<i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li>
				<a href="<?php echo site_url('C_operator')?>">
					<i class="fa fa-desktop"></i> Operator</a>
			</li>
			<li>
				<a href="<?php echo site_url('C_operator/toadd')?>">
					</i>Add Operator</a>
			</li>
		</ol>
	</section>
	<section class="content">
		<form role="form" enctype="multipart/form-data" class="form-validate" method="post" action="<?php echo base_url('index.php/C_operator/add'); ?>">
			<div class="row">
				<div class="col-md-6">
					<!-- general form elements -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Data Operator</h3>
						</div>
						<!-- /.box-header -->
						<!-- form start -->
						<!-- Form Media social -->
						<div class="box-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Operator</label>
								<input type="text" class="form-control rounded" required name="namaoperator" id="namaOperator" placeholder="Enter your name">
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-md-12 col-lg-12">
										<label for="alamatoperator">Address</label>
										<textarea rows="4" class="form-control" id="alamatoperator" name="alamatoperator"></textarea>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-xs-6 col-md-6">
										<label for="exampleInputPassword1">Phone</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-phone"></i>
											</div>
											<input type="text" class="form-control" id="" required name="numberoperator" placeholder="+62">
										</div>
									</div>
									<div class="col-xs-6 col-md-6">
										<label for="exampleInputPassword1">E-mail</label>
										<div class="input-group">
											<div class="input-group-addon">
												<b>@</b>
											</div>
											<input type="text" class="form-control" id="" required name="emailoperator" placeholder="Email">
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-xs-6 col-md-6">
										<label for="twitter">Twitter</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-twitter"></i>
											</div>
											<input type="text" class="form-control" id="twitter" name="twitter" placeholder="Twitter">
										</div>
									</div>
									<div class="col-xs-6 col-md-6">
										<label for="facebook">Facebook</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-facebook"></i>
											</div>
											<input type="text" class="form-control" id="facebook" name="facebook" placeholder="Facebook">
										</div>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-xs-6 col-md-6">
										<label for="instagram">Instagram</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-instagram"></i>
											</div>
											<input type="text" class="form-control" id="instagram" name="instagram" placeholder="Instagram">
										</div>
									</div>
									<div class="col-xs-6 col-md-6">
										<label for="whatsapp">Whatsapp</label>
										<div class="input-group">
											<div class="input-group-addon">
												<i class="fa fa-whatsapp"></i>
											</div>
											<input type="text" class="form-control" id="whatsapp" required name="whatsapp" placeholder="Instagram">
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
							<h3 class="box-title">Logo</h3>
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
				<div class="col-md-12 col-xs-12 col-lg-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Biografi
								<small>Simple and fast</small>
							</h3>
							<!-- tools box -->
							<!-- /. tools -->
						</div>
						<!-- /.box-header -->
						<div class="box-body pad">
							<textarea name="biografi" id="biografi" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-9">
					<button class="btn btn-success" type="submit">Simpan</button>
					<span></span>
					<button class="btn btn-danger" type="cancel" onclick="">Cancel</button>
				</div>
			</div>
		</form>
	</section>
</div>
