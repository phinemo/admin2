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

		<!-- Main content -->
		<section class="content">
			<!-- Info boxes -->
			<div class="row">
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="info-box bg-yellow">
						<span class="info-box-icon">
							<i class="ion ion-man"></i>
						</span>

						<div class="info-box-content">
							<span class="info-box-text">Jumlah siswa laki-laki</span>
							<span class="info-box-number">
								<?php echo $jml_laki ?>
							</span>

							<div class="progress">
								<div class="progress-bar" style="width: <?php echo $persen_laki?>%"></div>
							</div>
							<span class="progress-description">
							Sekitar	<?php echo $persen_laki?>%
							</span>
						</div>
						<!-- /.info-box-content -->
					</div>
					<!-- /.info-box -->
				</div>
				<!-- /.col -->
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="info-box bg-green">
						<span class="info-box-icon">
							<i class="ion ion-woman"></i>
						</span>

						<div class="info-box-content">
							<span class="info-box-text">Jumlah Siswa perempuan</span>
							<span class="info-box-number">
								<?php echo $jml_per ?>
							</span>

							<div class="progress">
								<div class="progress-bar" style="width: <?php echo $persen_per?>%"></div>
							</div>
							<span class="progress-description">
								Sekitar <?php echo $persen_per?>%
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
							<span class="info-box-number" style="font-size:300%;">
								<?php echo $jml ?>
							</span>
							<!-- /.info-box-content -->
						</div>
						<!-- /.info-box -->
					</div>
					<!-- /.col -->
				</div>
			</div>
			<!-- /.row -->
			<div class="row">
				<div class="col-xs-12">
					<div class="box">
						<div class="box-header">
							<h3 class="box-title">Data Siswa</h3>
							<div align="right">
								<button class="btn btn-warning sendata" data-toggle="modal" data-target="#ModalTambah">Tambah Data</button>
							</div>
						</div>
						<!-- /.box-header -->
						<div class="box-body">

							<table id="example1" class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>No</th>
										<th>No Induk</th>
										<th>Nama</th>
										<th>Tanggal Lahir</th>
										<th>Jenis Kelamin</th>
										<th>Alamat</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php 
					$no = 1;
					foreach ($data_siswa as $data){
						echo "<tr>
						<td>".$no++."</td>
					  <td>".$data->nis."</td>
					  <td>".$data->nama."</td>
					  <td>".$data->tanggal_lahir."</td>
					  <td>".$data->jenis_kelamin."</td>
						<td>".$data->alamat."</td>
						<td>
						<div class='row'>
							<div class='col-xs-6'>
							";
							echo "<a href='#' class='btn btn-primary glyphicon glyphicon-pencil text-center' id='nis' data-target='#ModalData' data-toggle='modal' data-id='".$data->nis."'></a></div>";
							echo anchor('dashboard/delete/'.$data->nis,'<div class="col-xs-6"><button class="btn btn-primary glyphicon glyphicon-trash"></button></div>
						</div>
						</td></tr>');}
					?>
									<!-- <a class='glyphicon glyphicon-trash btn btn-primary' href ='/index.php/dashboard/delete/".$data->nis."'></a> -->
								</tbody>
								<tfoot>
									<tr>
										<th>No Induk</th>
										<th>Nama</th>
										<th>Tanggal Lahir</th>
										<th>Jenis Kelamin</th>
										<th>Alamat</th>
										<th>Aksi</th>
									</tr>
								</tfoot>
							</table>
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
	<div class="modal fade" id="ModalData">
		<div class="modal-dialog">
			<div class="modal-content">
			</div>
		</div>
		
		
