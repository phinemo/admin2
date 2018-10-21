<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Product
			<small>Add Product</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo site_url('C_dashboard')?>">
					<i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li>
				<a href="#<?php //echo site_url('C_product')?>">
					<i class="fa fa-gift"></i> Media</a>
			</li>
			<li>
				<a href="#">
					</i>Upload Product Media</a>
			</li>
		</ol>
	</section>
	<section class="content">
		<form role="form" class="form-validate" method="post" action="<?php echo base_url('index.php/C_upload/upload_image'); ?>"
		 enctype="multipart/form-data">
			<div class="row">
				<!--/.col (left) -->
				<!-- right column -->
				<div class="col-md-12">
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
								<div class="file-loading">
									<input id="produkmedia" name="filefoto[]" type="file" multiple>
								</div>
								<br>
								<!-- <div class="file-loading">
									<input id="file-0a" class="file" type="file" multiple data-min-file-count="9">
								</div>
								<br> -->

							</div>

							<!-- <div class="form-group">
									<input type="file" name="filefoto" class="dropify" data-height="300">
								</div> -->

						</div>
						<!-- /.box -->
						<!-- /.box -->
					</div>

				</div>
			</div>

		</form>
	</section>
</div>
