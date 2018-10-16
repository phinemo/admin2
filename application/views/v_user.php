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
						<h3 class="box-title">Data Produk</h3>
						<div align="right">
						<?php echo anchor("C_user/toadd","<div ><button class='btn btn-primary '>Tambah User</button></div>"); ?>
							<!-- <button class="btn btn-warning sendata" data-toggle="modal" data-target="#ModalTambah">Tambah Data</button> -->
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">

						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th style="width:30%;">Nama Lengkap</th>
									<th style="width:30%;">E-mail</th>
									<th style="width:20%;">Operator</th>
									<th style="width:20%;">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
					foreach ($users as $user){
                        // var_dump($users);
                        echo "<tr>
					  	<td>".$user->full_name."</td>
					  	<td>".$user->email."</td>
                        <td>".$user->nama_operator."</td>
                        <td>
						<div class='row'>";
							echo anchor("C_user/getdatawhere/".$user->id_user,"<div class='col-xs-6 col-md-6'><button class='btn btn-primary glyphicon glyphicon-pencil'></button></div>");
							echo anchor('C_user/delete/'.$user->id_user,'<div class="col-xs-6 col-md-6"><button class="btn btn-primary glyphicon glyphicon-trash"></button></div>
						</div>
						</td></tr>');}
					?>
								<!-- <a class='glyphicon glyphicon-trash btn btn-primary' href ='/index.php/dashboard/delete/".$data->nis."'></a> -->
							</tbody>
							<tfoot>
								<tr>
								    <th style="width:30%;">Nama Lengkap</th>
									<th style="width:30%;">E-mail</th>
									<th style="width:20%;">Operator</th>
									<th style="width:20%;">Action</th>
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
