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
		<?php foreach ($product as $data){
			// var_dump($gambar);
			$deskripsi = json_decode($data->deskripsi);?>
		<form role="form" class="form-validate" method="post" action="<?php echo base_url('index.php/C_product/update'); ?>      "
		 enctype="multipart/form-data">
			<div class="row">
				<div class="col-md-6">
					<!-- general form elements -->
					<div class="box box-primary">
						<div class="box-header with-border">
							<h3 class="box-title">Product Data</h3>
						</div>
						<!-- /.box-header -->
						<!-- form start -->
						<div class="box-body">
							<div class="form-group">
								<label for="exampleInputEmail1">Operator</label>
								<input type="text" class="form-control" name="touroperator" id="touroperator" placeholder="Enter your name" value="<?php 
								 if (!empty($operator)) echo $operator[0]->nama_operator; else echo "";
								 ?>">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Nama Product</label>
								<input type="hidden" class="form-control" name="id_produk" value="<?php echo $data->id_produk?>">
								<input type="hidden" class="form-control" name="id_operator" value="<?php echo $this->session->userdata('id_operator')?>">
								<input type="text" class="form-control" name="namaproduct" id="namaProduct" placeholder="Enter your name" value="<?php echo $data->nama_produk ?> ">
							</div>
							<div class="form-group">
								<label>Range trip period</label>
								<div class="input-group">
									<div class="input-group-addon">
										<i class="fa fa-calendar"></i>
									</div>
									<input type="text" name="range" class="form-control pull-right" id="reservation">
								</div>
								<!-- /.input group -->
							</div>
							<div class="form-group">
								<div class="row">
									<div class="col-xs-6">
										<label for="exampleInputEmail1">Kota</label>
										<input type="text" class="form-control" name="kotaproduct" id="kota" placeholder="Pilih kota" value="<?php if(!empty($kota))echo $kota[0]->nama_kota;else echo "";?>">
									</div>
									<div class="col-xs-6">
										<label>Jenis Tour</label>
										<select class="form-control select2" style="width: 100%;" id="jenis" name="jenisproduct">
										</select>
									</div>
								</div>

							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Jumlah Anggota</label>
								<input type="number" class="form-control" name="jml_anggota" id="namaProduct" placeholder="Enter your name" value=" <?php echo $data->jml_anggota?>">
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Harga</label>
								<input type="text" class="form-control harga" name="harga" id="namaProduct" placeholder="Enter your name" value="<?php echo $data->harga ?>" onkeyup="splitInDots(this)">
							</div>
						</div>
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
							<!-- <form class="form-horizontal" method="post"> -->
								<!-- <div class="form-group">
								<input type="text" name="judul" class="form-control" placeholder="Judul">
							</div> -->
								<div class="form-group">
								<div class="file-loading">
									
									<input id="editfoto" name="filefoto[]" type="file" multiple>
								</div>
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
							<h3 class="box-title">Detail Produk
							</h3>
							<br>
							<div class="form-group">
								<label for="exampleInputEmail1"><small>Deskripsi Singkat</small></label><br><small><i> *block to styling</i></small>
								<div class="panel panel-default" style="padding:5px">
									<textarea name="descsingkat" id="descsingkat"><?php echo $deskripsi->deskripsi ?></textarea>
								</div>

							</div>
							<div class="form-group">
								<label for="exampleInputEmail1"><small>Highlight</small></label><br><small><i> *block to styling</i></small>
								<div class="panel panel-default" style="padding:5px">
									<textarea name="highlight" id="highlight"><?php echo $deskripsi->highlight ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1"><small>Fasilitas</small></label>
								<div class="panel panel-default" style="padding:5px">
									<textarea name="fasilitas" id="fasilitas"><?php echo $deskripsi->fasilitas ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputEmail1"><small>Kebijakan</small></label>
								<div class="panel panel-default" style="padding:5px">
									<textarea name="kebijakan" id="kebijakan"><?php echo $deskripsi->kebijakan ?></textarea>
								</div>
							</div>
							<!-- tools box -->
							<!-- /. tools -->
						</div>
						<!-- /.box-header -->
						<!-- <div class="box-body pad">
							<textarea name="deskripsi" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
						</div> -->

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
