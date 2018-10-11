<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Dashboard
			<small>Version 2.0</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="#">
					<i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li class="active">Dashboard</li>
		</ol>
	</section>
	<section class="content">
		<?php foreach ($operator as $data){
			// var_dump($operator);
		$medsos = json_decode($data->contact);?>
		<form role="form" class="form-validate" method="post" action="<?php echo base_url('index.php/C_operator/update'); ?>      "
		 enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<!-- general form elements -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Operator Data</h3>
						</div>
						<!-- /.box-header -->
						<!-- form start -->
						<!-- Form Media social -->
						<div class="box-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Operator</label>
								<input type="hidden" class="form-controll" name="id" id="idOperator" value="<?php echo $data->id_operator ?>">
								<input type="text" class="form-control rounded" name="namaoperator" id="namaOperator" placeholder="Enter your name"
								 value="<?php echo $data->nama_operator ?>">
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Phone</label>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<input type="text" class="form-control" id="" name="number" placeholder="Phone number" value="<?php echo $medsos->number ?>">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Twitter</label>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<input type="text" class="form-control" id="" name="twitter" placeholder="Twitter" value="<?php echo $medsos->twitter ?>">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Instagram</label>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<input type="text" class="form-control" id="" name="instagram" placeholder="Instagram" value="<?php echo $medsos->instagram ?>">
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Facebook</label>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<input type="text" class="form-control" id="" name="facebook" placeholder="Facebook" value="<?php echo $medsos->facebook ?>">
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
							<form class="form-horizontal" method="post">
								<!-- <div class="form-group">
								<input type="text" name="judul" class="form-control" placeholder="Judul">
							</div> -->
								<div class="form-group">
									<?php 
									if ($gambar != null){
										// var_dump($gambar); //tambahkan $_FILES untuk pengecualian
										foreach ($gambar as $pic){
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
						<!-- <textarea name="biografi" id="biografi" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea> -->
							<textarea id="biografi" name="biografi" placeholder="Place some text here" ><?php echo $data->biografi ?></textarea>
						</div>
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
		<?php } ?>
	</section>
</div>
