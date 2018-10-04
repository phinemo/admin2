<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
	<title>Upload dengan Dropify</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admintemplate/dropify/dropify.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'admintemplate/bower_components/bootstrap/dist/css/bootstrap.css'?>">
</head>
<body>
	<div class="container">
		<div class="col-sm-4 col-md-offset-4">
		<h4>Upload Image dengan Dropify Master</h4>
			<form class="form-horizontal" action="<?php echo base_url().'index.php/C_upload/upload_image'?>" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<input type="text" name="judul" class="form-control" placeholder="Judul">
				</div>
				<div class="form-group">
					<input type="file" name="filefoto" class="dropify" data-height="300">
				</div>
				<div class="form-group">
					<button class="btn btn-success" type="submit">Simpan</button>
				</div>
			</form>	
		</div>
	</div>
<script type="text/javascript" src="<?php echo base_url().'admintemplate/bower_components/jquery/dist/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'admintemplate/bower_components/bootstrap/dist/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'admintemplate/dropify/dropify.min.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.dropify').dropify({
			messages: {
                default: 'Drag atau drop untuk memilih gambar',
                replace: 'Ganti',
                remove:  'Hapus',
                error:   'error'
            }
		});
	});
	
</script>
</body>
</html>