<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Tour Operator
			<small>List Operator</small>
		</h1>

		<ol class="breadcrumb">
			<li>
				<a href="<?php echo site_url('C_dashboard')?>">
					<i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li>
				<a href="<?php echo site_url('C_operator')?>">
					<i class="fa fa-desktop"></i> Operator</a>
			</li>
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
							<?php if(isset($operator) && count($operator) > 1) echo anchor("C_operator/toadd","<button class='btn btn-primary '>Tambah Operator</button>"); ?>
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
					if(isset($operator))			
					foreach ($operator as $data){
						// var_dump($operator);
						$medsos = json_decode($data->contact);
						echo "<tr>
					  <td>".$data->id_operator."</td>
					  <td>".$data->nama_operator."</td>
					  <td> 20 </td>
					  <td> 60 </td>
					  <td><div class='btn-group'>";
					  if(isset($operator) && count($operator) > 1){
						echo "<button class='btn btn-primary' onclick=account(".$data->id_operator.")>Setting Account</button>";
					  }
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
	<!-- MODAL VIEW OPERATOR -->
	<!-- Bootstrap modal -->
	<div class="modal fade" id="modal_form" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 class="modal-title">Configure Operator Account</h3>
				</div>
				<div class="modal-body form">
					<form action="#" id="account" class="form-horizontal" method="POST">
						<input type="hidden" name="id" />
						<input type="hidden" name="id_layanan" />
						<div class="form-body">
							<div class="form-group">
								<label class="control-label col-md-3">Jenis Paket</label>
								<div class="col-md-9">
									<select name="jenis_layanan" class="form-control">
										<option value="">--Pilih Paket--</option>
										<option value="free">Free</option>
										<option value="basic">Basic</option>
										<option value="pro">Pro</option>
									</select>
									<span class="help-block"></span>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" id="btnSave" onclick="update()" class="btn btn-primary">Save</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /.content -->

</div>
<!-- /.content-wrapper -->
