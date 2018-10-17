<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>User
			<small>Change Password</small>
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
					</i>Change Password</a>
			</li>
		</ol>
	</section>
	<section class="content">
		<?php foreach($user as $data){
			//  var_dump($user) ?>
		<form role="form" enctype="multipart/form-data" class="form-validate" method="post" action="<?php echo base_url('index.php/C_user/passwordchange'); ?>">
			<div class="row">
				<div class="col-md-12 col-lg-12">
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
								<label for="exampleInputPassword1">E-mail</label>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<input type="text" class="form-control" id="" name="emailuser" require value="<?php echo $data->email?>" disabled>
									</div>
								</div>
							</div>
							<div class="form-group">
								<label for="exampleInputPassword1">Password</label>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<input type="password" class="form-control" id="" name="passworduser" required>
									</div>
								</div>
                            </div>
                            <div class="form-group">
								<label for="exampleInputPassword1">New Password</label>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<input type="password" class="form-control" id="" name="passwordusernew" required>
									</div>
								</div>
                            </div>
                            <div class="form-group">
								<label for="exampleInputPassword1">Retype New Password</label>
								<div class="row">
									<div class="col-xs-12 col-md-12">
										<input type="password" class="form-control" id="" name="passwordusernew2" required>
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
			</div>
			<div class="row">
				<div class="col-md-9">
					<button class="btn btn-success" type="submit">Simpan</button>
					<span></span>
					<button class="btn btn-danger" type="cancel" onclick="">Cancel</button>
				</div>
			</div>
		</form>
<?php }?>
	</section>
</div>
