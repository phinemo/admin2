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

		<!-- /.row -->
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
						<h3 class="box-title">Data Operator</h3>
						<div align="right">
						<?php echo anchor("C_operator/toadd","<div ><button class='btn btn-primary '>Tambah Operator</button></div>"); ?>
							<!-- <button class="btn btn-warning sendata" data-toggle="modal" data-target="#ModalTambah">Tambah Data</button> -->
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">

						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th style="width:200px;">Nama</th>
									<th style="width:20px;">Jumlah Tour Aktif</th>
									<th style="width:20px">Jumlah Tour Total</th>
									<th style="width:600px;">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
					foreach ($operator as $data){
						$medsos = json_decode($data->contact);
						echo "<tr>
					  <td>".$data->id_operator."</td>
					  <td>".$data->nama_operator."</td>
					  <td> 20 </td>
					  <td> 60 </td>
					  <td><div class='btn-group'><button class='btn btn-primary'>Setting Account</button>";
					   echo anchor("C_operator/getdatawhere/".$data->id_operator,"<button class='btn btn-primary'>Edit</button>");
					   echo anchor('C_operator/delete/'.$data->id_operator,'<button class="btn btn-danger">Delete</button></div>
						</td>
							</tr>');}
?>
								<!-- <a class='glyphicon glyphicon-trash btn btn-primary' href ='/index.php/dashboard/delete/".$data->nis."'></a> -->
							</tbody>
							<tfoot>
								<tr>
								<th>ID</th>
									<th style="width:200px;">Nama</th>
									<th style="width:400px;">Jumlah Tour Aktif</th>
									<th style="width:200px">Jumlah Tour Total</th>
									<th style="width:90px;">Action</th>
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
