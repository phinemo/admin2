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
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Monthly Recap Report</h3>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
							<div class="btn-group">
								<button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
									<i class="fa fa-wrench"></i></button>
								<ul class="dropdown-menu" role="menu">
									<li><a href="#">Action</a></li>
									<li><a href="#">Another action</a></li>
									<li><a href="#">Something else here</a></li>
									<li class="divider"></li>
									<li><a href="#">Separated link</a></li>
								</ul>
							</div>
							<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<div class="row">
							<div class="col-md-12">
								<p class="text-center">
									<strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
								</p>

								<div class="chart">
									<!-- Sales Chart Canvas -->
									<canvas id="salesChart" style="height: 180px;"></canvas>
								</div>
								<!-- /.chart-responsive -->
							</div>
							<!-- /.col -->
							<div class="col-md-4">
								
							</div>
							<!-- /.col -->
						</div>
						<!-- /.row -->
					</div>
					<!-- ./box-body -->
					<div class="box-footer">
						
						<!-- /.row -->
					</div>
					<!-- /.box-footer -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Bordered Table</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table class="table table-bordered">
							<tr>
								<th style="width: 3%">#</th>
								<th style="width: 37%">Products</th>
								<th style="width: 15%">Impression</th>
								<th style="width: 15%">Call</th>
								<th style="width: 15%">Message</th>
								<th style="width: 15%">Website</th>
							</tr>
							<tr>
								<td>1.</td>
								<td>Mt. Batur Sunrise Hike</td>
								<td>45</td>
								<td>60</td>
								<td>40</td>
								<td>20</td>
							</tr>
							<tr>
								<td>2.</td>
								<td>Ubud Cycling Tour</td>
								<td>45</td>
								<td>60</td>
								<td>40</td>
								<td>20</td>
							</tr>
							<tr>
								<td>3.</td>
								<td>Gili Meno Fun Dive Trip</td>
								<td>45</td>
								<td>60</td>
								<td>40</td>
								<td>20</td>
							</tr>
							<tr>
								<td>4.</td>
								<td>Dieng Plateau Golden Sunrise</td>
								<td>45</td>
								<td>60</td>
								<td>40</td>
								<td>20</td>
							</tr>
							<tr>
								<td>5.</td>
								<td>Lava Tour Yogyakarta</td>
								<td>45</td>
								<td>60</td>
								<td>40</td>
								<td>20</td>
							</tr>
						</table>
					</div>
					<!-- /.box-body -->
					<div class="box-footer clearfix">
						<ul class="pagination pagination-sm no-margin pull-right">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
				<!-- /.box -->
				<!-- /.box -->
			</div>
		</div>
	</section>
</div>
