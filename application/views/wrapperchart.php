<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
	<h1>
	  Dashboard
	  <small>Version 2.0</small>
	</h1>
	<ol class="breadcrumb">
	  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	  <li class="active">Dashboard</li>
	</ol>
  </section>

  <!-- Main content -->
  <section class="content">
	<!-- Info boxes -->
	<div class="row">
	  <div class="col-md-4 col-sm-6 col-xs-12">
		  <div class="info-box bg-yellow">
			  <span class="info-box-icon"><i class="ion ion-man"></i></span>
  
			  <div class="info-box-content">
				<span class="info-box-text">Jumlah siswa laki-laki</span>
				<span class="info-box-number"><?php echo $jml_laki ?></span>
  
				<div class="progress">
				  <div class="progress-bar" style="width: <?php echo $persen_laki?>%"></div>
				</div>
				<span class="progress-description">
				<?php echo $persen_laki?>% Increase in 30 Days
					</span>
			  </div>
			  <!-- /.info-box-content -->
			</div>
		<!-- /.info-box -->
	  </div>
	  <!-- /.col -->
	  <div class="col-md-4 col-sm-6 col-xs-12">
		  <div class="info-box bg-green">
			  <span class="info-box-icon"><i class="ion ion-woman"></i></span>
  
			  <div class="info-box-content">
				<span class="info-box-text">Jumlah Siswa perempuan</span>
				<span class="info-box-number"><?php echo $jml_per ?></span>
  
				<div class="progress">
				  <div class="progress-bar" style="width: <?php echo $persen_per?>%"></div>
				</div>
				<span class="progress-description">
				<?php echo $persen_per?>% Increase Many more
					</span>
			  </div>
			  <!-- /.info-box-content -->
			</div>
		<!-- /.info-box -->
	  </div>
	  <!-- /.col -->

	  <!-- fix for small devices only -->
	  <div class="clearfix visible-sm-block"></div>

	  <div class="col-md-4 col-sm-6 col-xs-12">
		  <div class="info-box bg-red">
			  <span class="info-box-icon">
					<i class="ion ion-man"></i>
					<i class="ion ion-woman"></i>
				</span>
  
			  <div class="info-box-content">
				<span class="info-box-text">Jumlah Keseluruhan</span>
				<span class="info-box-number" style="font-size:300%;"><?php echo $jml ?></span>
			  <!-- /.info-box-content -->
			</div>
		<!-- /.info-box -->
	  </div>
	  <!-- /.col -->
    </div>
    </div>
	<!-- /.row -->
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<div class="box">
				<div class="box-header">
				  <h3 class="box-title">Chart Data Siswa</h3>
				</div>
				<!-- /.box-header -->
			    <div class="box box-danger">
                    <div class="box-body">
                        <canvas id="areaChart" style="height:250px"></canvas>
                    </div>
                </div>
            <!-- /.box-body -->
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
			<div class="box">
				<div class="box-header">
				  <h3 class="box-title">Chart Data Siswa</h3>
				</div>
				<!-- /.box-header -->
			    <div class="box box-danger">
                    <div class="box-body">
                        <canvas id="lineChart" style="height:250px"></canvas>
                    </div>
                </div>
            <!-- /.box-body -->
            </div>
        </div>
    </div>
    <!-- /.row -->
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<div class="box">
				<div class="box-header">
				  <h3 class="box-title">Chart Data Siswa</h3>
				</div>
				<!-- /.box-header -->
			    <div class="box box-danger">
                    <div class="box-body">
                        <canvas id="pieChart" style="height:250px"></canvas>
                    </div>
                </div>
            <!-- /.box-body -->
            </div>
        </div>
        <div class="col-xs-12 col-md-6">
			<div class="box">
				<div class="box-header">
				  <h3 class="box-title">Chart Data Siswa</h3>
				</div>
				<!-- /.box-header -->
			    <div class="box box-danger">
                    <div class="box-body">
                        <canvas id="barChart" style="height:250px"></canvas>
                    </div>
                </div>
            <!-- /.box-body -->
            </div>
        </div>
	</div>


    
	<!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

