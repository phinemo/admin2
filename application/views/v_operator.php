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
									<th style="width:400px;">Biografi</th>
									<th style="width:200px">Contact</th>
									<th style="width:90px;">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
					foreach ($operator as $data){
						$medsos = json_decode($data->contact);
						echo "<tr>
					  <td>".$data->id_operator."</td>
					  <td>".$data->nama_operator."</td>
					  <td>".$data->biografi."</td>
					  <td>
					  <div class='col-xs-3 col-md-3'><a href='https://twitter.com/".$medsos->twitter."' class='btn btn-xs btn-primary'><i class='fa fa-twitter' aria-hidden='true'></i></a></div>
					  <div class='col-xs-3 col-md-3'><a href='https://web.facebook.com/".$medsos->facebook."' class='btn btn-xs btn-primary'><i class='fa fa-facebook' aria-hidden='true'></i></a></div>
					  <div class='col-xs-3 col-md-3'><a href='https://wa.me/".$medsos->number."' class='btn btn-xs btn-primary'><i class='fa fa-phone' aria-hidden='true'></i></a></div>
					  <div class='col-xs-3 col-md-3'><a href='https://www.instagram.com/".$medsos->instagram."' class='btn btn-xs btn-primary'><i class='fa fa-instagram' aria-hidden='true'></i></a></div>
					  </td>
					  <td>";
					   echo anchor("C_operator/getdatawhere/".$data->id_operator,"<div class='col-xs-6 col-md-6'><button class='btn btn-xs btn-primary'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button></div>");
					   echo anchor('C_operator/delete/'.$data->id_operator,'<div class="col-xs-6 col-md-6"><button class="btn btn-xs btn-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></button></div>
						</td>
							</tr>');}
?>
								<!-- <a class='glyphicon glyphicon-trash btn btn-primary' href ='/index.php/dashboard/delete/".$data->nis."'></a> -->
							</tbody>
							<tfoot>
								<tr>
									<th>ID</th>
									<th style="width:200px;">Nama</th>
									<th style="width:400px;">Biografi</th>
									<th>Contact</th>
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
