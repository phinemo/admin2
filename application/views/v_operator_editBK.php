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
	<?php foreach ($operator as $data){?>
		<form role="form" class="form-validate" method="post" action="<?php echo base_url('index.php/C_operator/update'); ?>">
			<div class="col-md-6">
				<!-- general form elements -->
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">Operator Data</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->

					<div class="box-body">
						<div class="form-group">
                            <label for="exampleInputEmail1">Nama Operator</label>
                            <input type="hidden" name="id" value="<?php echo $data->id_operator ?>">
							<input type="text" class="form-control" name="nama" id="namaOperator" placeholder="Enter your name" value="<?php echo $data->nama_operator ?>">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Contact</label>
							<input type="text" class="form-control" name="facebook" placeholder="Facebook">
							<input type="text" class="form-control" name="twitter" placeholder="Twitter">
							<input type="text" class="form-control" name="instagram" placeholder="Instagram">
							<input type="text" class="form-control" name="number" placeholder="Phone Number">
						</div>
						<div class="form-group">
                            <label for="exampleInputFile">Logo</label>
							<input type="file" id="exampleInputFile" name="logo">
							<p class="help-block">upload your logo in here</p>
						</div>
					</div>
					<!-- /.box-body -->
                    <div class="box-footer">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					

				</div>
				<!-- /.box -->

			</div>
			<!--/.col (left) -->
			<!-- right column -->
			<div class="col-md-6">
				<!-- Horizontal Form -->
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Biography</h3>
					</div>
					<!-- /.box-header -->
					<!-- form start -->

					<div class="box-body">
						<div class="form-group">
							<label for="inputEmail3" class="col-sm-2 control-label">Tell about your self</label>
							<div class="col-sm-10">
								<textarea rows="6" class="form-control" id="biography" name="biografi" placeholder="Biography"><?php echo $data->biografi ?></textarea>
							</div>
						</div>
					</div>
					<!-- /.box-body -->
                    
					<!-- /.box-footer -->
					<!-- </form> -->
				</div>
				<!-- /.box -->
				<!-- /.box -->
			</div>
		</form>
		<?php } ?>
	</div>
	</section>
</div>
