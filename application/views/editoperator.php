<!-- Modal Header -->
<div class="modal fade" id="ModalEdit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-uppercase">
					Update Operator</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<!-- Modal body -->
			<div class="modal-body">
			<?php foreach ($operator as $data){?>
				<form class="form-validate form-horizontal" method="post" action="<?php echo base_url('index.php/C_operator/update'); ?>">
					<div class="form-group ">
						<label for="cname" class="control-label col-lg-2">Nama
							<span class="required">*</span>
						</label>
						<div class="col-lg-10">
							<input class="form-control" id="cname" name="nama" minlength="5" type="text" required value="<?php echo $data->nama_operator ?>" />
						</div>
					</div>
					<div class="form-group ">
						<label for="curl" class="control-label col-lg-2">Biografi
							<span class="required">*</span>
						</label>
						<div class="col-lg-10">
							<input class="form-control " id="curl" type="text" name="biografi" />
						</div>
					</div>
					<div class="form-group ">
						<label for="cname" class="control-label col-lg-2">Contact</label>
						<div class="col-lg-10">
							<div class="row">
								<div class="col-md-4 ">
									<input class="form-control " id="curl" type="text" name="twitter" />
								</div>
								<div class="col-md-4 ">
									<input class="form-control " id="curl" type="text" name="number" />
								</div>
								<div class="col-md-4 ">
									<input class="form-control " id="curl" type="text" name="instagram" />
								</div>
								<br />
							</div>
						</div>
						<div class="form-group">
							<label for="cname" class="control-label col-lg-2">Logo
								<span class="required">*</span>
							</label>
							<div class="col-lg-10">
								<input class="form-control" id="subject" name="logo" minlength="5" type="text" />
							</div>
						</div>
						<div class="form-group">
							<div class="col-lg-offset-2 col-lg-10">
								<button class="btn btn-primary" type="submit" name="Save">Save</button>
							</div>
						</div>
				</form>
			<?php } ?>
			</div>
			<!-- Modal footer -->
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
