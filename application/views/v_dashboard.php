<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>Dashboard
			<small>Statistic</small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo site_url('C_dashboard')?>">
					<i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li>
				<a href="<?php echo site_url('C_user')?>">
					<i class="fa fa-line-chart"></i> Statistic</a>
			</li>
		</ol>
	</section>
	<section class="content">
		<!-- Count Box  -->
		<div class="row">
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box bg-aqua">
					<span class="info-box-icon"><i class="fa fa-line-chart"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Impression</span>
						<span class="info-box-number">41,410</span>

						<div class="progress">
							<div class="progress-bar" style="width: 70%"></div>
						</div>
						<span class="progress-description">
							70% Increase in 30 Days
						</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box bg-green">
					<span class="info-box-icon"><i class="fa fa-mobile"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Calls</span>
						<span class="info-box-number">41,410</span>

						<div class="progress">
							<div class="progress-bar" style="width: 70%"></div>
						</div>
						<span class="progress-description">
							70% Increase in 30 Days
						</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box bg-yellow">
					<span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Messages</span>
						<span class="info-box-number">41,410</span>

						<div class="progress">
							<div class="progress-bar" style="width: 70%"></div>
						</div>
						<span class="progress-description">
							70% Increase in 30 Days
						</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
			<div class="col-md-3 col-sm-6 col-xs-12">
				<div class="info-box bg-red">
					<span class="info-box-icon"><i class="fa fa-globe"></i></span>

					<div class="info-box-content">
						<span class="info-box-text">Websites</span>
						<span class="info-box-number">41,410</span>

						<div class="progress">
							<div class="progress-bar" style="width: 70%"></div>
						</div>
						<span class="progress-description">
							70% Increase in 30 Days
						</span>
					</div>
					<!-- /.info-box-content -->
				</div>
				<!-- /.info-box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- Chart -->
		<div class="row">
			<div class="col-md-12">
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Monthly Recap Report</h3>
						<div class="box-tools pull-right">
							<!-- <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button> -->
							<div id="statistic" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc; width: 100%">
								<i class="fa fa-calendar"></i>&nbsp;
								<span></span> <i class="fa fa-caret-down"></i>
							</div>
							<!-- <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button> -->
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
							<?php 
								if(isset($product)){
									$i = 1;
									foreach($product as $data){

									
								echo '<tr>
										<td>'.$i++.'</td>
										<td>'.$data->nama_produk.'</td> 
										<td>45</td>
										<td>60</td>
										<td>40</td>
										<td>20</td>									
									  </tr>';
								}
							}
							?>
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
