<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Product
			<small>List Products</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo site_url('C_dashboard')?>">
					<i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li>
				<a href="<?php echo site_url('C_product')?>">
					<i class="fa fa-gift"></i> Products</a>
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
						<h3 class="box-title">Data Product</h3>
						<div align="right">
							<?php if(isset($product)) echo anchor("C_product/toadd","<button class='btn btn-primary '>Tambah Product</button>"); ?>
							<!-- <button class="btn btn-warning sendata" data-toggle="modal" data-target="#ModalTambah">Tambah Data</button> -->
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">

						<table id="example1" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th style="width:5%;">ID</th>
									<th style="width:40%;">Nama</th>
									<th style="width:10%;">Mulai</th>
									<th style="width:10%;">Selesai</th>
									<th style="width:5%;">Maks Anggota</th>
									<th stlye="width:20%">Harga</th>
									<th style="width:20%;">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
					if(isset($product))					
					foreach ($product as $data){
						$price = number_format($data->harga,0,',','.');
						echo "<tr>
					  	<td>".$data->id_produk."</td>
					  	<td>".$data->nama_produk."</td>
					  	<td>".$data->tanggal_mulai."</td>
					  	<td>".$data->tanggal_akhir."</td>
					  	<td>".$data->jml_anggota."</td>
						<td>".$price."</td>
						<td>
						<div class='row'>";
							echo anchor("C_product/getdatawhere/".$data->id_produk,"<div class='col-xs-4 col-md-4'><button class='btn btn-primary glyphicon glyphicon-pencil'></button></div>");
							echo anchor("C_showoffer/index/".$data->id_produk,"<div class='col-xs-4 col-md-4'><button class='btn btn-primary glyphicon glyphicon-eye-open'></button></div>");
							echo '<div class="col-xs-4 col-md-4"><button class="btn btn-danger glyphicon glyphicon-trash" onclick="deleteproduct('.$data->id_produk.')"></button></div>';
							echo '</div></td></tr>';}
						?>
								<!-- <a class='glyphicon glyphicon-trash btn btn-primary' href ='/index.php/dashboard/delete/".$data->nis."'></a> -->
							</tbody>
							<tfoot>
								<tr>
									<th style="width:5%;">ID</th>
									<th style="width:40%;">Nama</th>
									<th style="width:10%;">Mulai</th>
									<th style="width:10%;">Selesai</th>
									<th style="width:5%;">Maks Anggota</th>
									<th stlye="width:20%">Harga</th>
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
	<div class="modal fade" id="popup_product" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h3 class="modal-title"></h3>
					<input id="ids" type="hidden">
				</div>
				<div class="modal-footer">
					<button type="button" id="btnSave" onclick="delproduct()" class="btn btn-primary">Delete</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
