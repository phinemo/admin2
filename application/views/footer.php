<!-- Control Sidebar -->
</div>
<!-- ./wrapper -->
</div>
<!-- jQuery 3 -->
<script src="<?php echo base_url('admintemplate/bower_components/jquery/dist/jquery.min.js')?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('admintemplate/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
<!-- iCheck -->
<script src="<?php echo base_url('admintemplate/plugins/iCheck/icheck.min.js')?>"></script>
<script>
	$(function () {
		$('input').iCheck({
			checkboxClass: 'icheckbox_square-blue',
			radioClass: 'iradio_square-blue',
			increaseArea: '20%' /* optional */
		});
	});

</script>
<!-- DataTables -->
<script src="<?php echo base_url('admintemplate/bower_components/datatables.net/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('admintemplate/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')?>"></script>
<!-- Chart JS -->
<script src="<?php echo base_url('admintemplate/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?>"></script>

<script src="<?php echo base_url('admintemplate/plugins/input-mask/jquery.inputmask.js')?>"></script>
<script src="<?php echo base_url('admintemplate/plugins/input-mask/jquery.inputmask.date.extensions.js')?>"></script>
<script src="<?php echo base_url('admintemplate/plugins/input-mask/jquery.inputmask.extensions.js')?>"></script>
<script src="<?php echo base_url('admintemplate/bower_components/moment/min/moment.min.js')?>"></script>
<script src="<?php echo base_url('admintemplate/bower_components/bootstrap-daterangepicker/daterangepicker.js')?>"></script>

<script src="<?php echo base_url('admintemplate/bower_components/chart.js/Chart.js')?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('admintemplate/bower_components/fastclick/lib/fastclick.js')?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('admintemplate/dist/js/adminlte.min.js')?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('admintemplate/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url('admintemplate/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')?>"></script>
<!-- ChartJS -->
<script src="<?php echo base_url('admintemplate/bower_components/chart.js/Chart.js')?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url('admintemplate/dist/js/pages/dashboard2.js')?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('admintemplate/dist/js/demo.js')?>"></script>
<script src="<?php echo base_url('admintemplate/dropify/dropify.min.js')?>"></script>
<script src="<?php echo base_url('admintemplate/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>
<script src="<?php echo base_url('admintemplate/fileinput/js/plugins/sortable.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('admintemplate/fileinput/js/fileinput.js')?>" type="text/javascript"></script>
<!-- <script src="../js/locales/fr.js" type="text/javascript"></script> -->
<!-- <script src="../js/locales/es.js" type="text/javascript"></script> -->
<script src="<?php echo base_url('admintemplate/fileinput/themes/explorer-fa/theme.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('admintemplate/fileinput/themes/fa/theme.js')?>" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script>
	// $(function () {
	// 	// Replace the <textarea id="editor1"> with a CKEditor
	// 	// instance, using default configuration.
	// 	// CKEDITOR.replace('editor1')
	// 	//bootstrap WYSIHTML5 - text editor
	// 	$('textarea.textarea').wysihtml5()
	// });
	function account(id) {
		save_method = 'update';
		$('#account')[0].reset(); // reset form on modals
		$('.form-group').removeClass('has-error'); // clear error class
		$('.help-block').empty(); // clear error string

		//Ajax Load data from ajax
		$.ajax({
			url: "<?php echo site_url('C_operator/getuser/')?>" + id,
			type: "GET",
			dataType: "JSON",
			success: function (data) {
				// console.log(data);
				$('[name="id"]').val(data.id_operator);
				$('[name="id_layanan"]').val(data.id_layanan);
				$('[name="jenis_layanan"]').val(data.jenis_layanan);
				$('#modal_form').modal('show'); // show bootstrap modal when complete loaded
				$('.modal-title').text('Jenis Paket'); // Set title to Bootstrap modal title

			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log(jqXHR);
				console.log(textStatus);
				console.log(errorThrown);
				// alert('Error get data from ajax');
			}
		});
	}
	function deleteoperator(id){
		$('#popup_operator').modal('show'); // show bootstrap modal when complete loaded
		$('.modal-title').text('Are you sure to delete ?'); // Set title to Bootstrap modal title
		$('#ids').val(id);
	}
	function deleteproduct(id){
		$('#popup_product').modal('show'); // show bootstrap modal when complete loaded
		$('.modal-title').text('Are you sure to delete ?'); // Set title to Bootstrap modal title
		$('#ids').val(id);
	}
	function deloperator(){
		var ids = $('#ids').val();
		// console.log(parseInt(ids));
		$('#btnSave').text('deleting');
		$('#btnSave').attr('disabled', true); //set button disable 

		$.ajax({
			url: "<?php echo site_url('C_operator/delete/')?>"+ids,
			type: "POST",
			dataType:"JSON",
			success: function(data){
				if(data.status)
				$('#popup_form').modal('hide');
				location.reload(true);				
			},
			error:function(jqXHR, textStatus, errorThrown){
				alert('Failed to delete')
			}
		})
	}
	function delproduct(){
		var ids = $('#ids').val();
		// console.log(parseInt(ids));
		$('#btnSave').text('deleting');
		$('#btnSave').attr('disabled', true); //set button disable 

		$.ajax({
			url: "<?php echo site_url('C_product/delete/')?>"+ids,
			type: "POST",
			dataType:"JSON",
			success: function(data){
				if(data.status)
				$('#popup_form').modal('hide');
				location.reload(true);				
			},
			error:function(jqXHR, textStatus, errorThrown){
				alert('Failed to delete')
			}
		})
	}
	function update() {
		$('#btnSave').text('saving...'); //change button text
		$('#btnSave').attr('disabled', true); //set button disable 

		// ajax adding data to database
		$.ajax({
			url: "<?php echo site_url('C_operator/editUser')?>",
			type: "POST",
			data: $('#account').serialize(),
			dataType: "JSON",
			success: function (data) {
				// console.log(data);
				if (data.status) //if success close modal and reload ajax table
				{
					$('#modal_form').modal('hide');
					// $('#layanan').text(data.layanan.toUpperCase());
					location.reload(true);
					// reload_table();
				} else {
					for (var i = 0; i < data.inputerror.length; i++) {
						$('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
						$('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]); //select span help-block class set text error string
					}
				}
				$('#btnSave').text('save'); //change button text
				$('#btnSave').attr('disabled', false); //set button enable 


			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log($('#form').serialize());
				console.log(errorThrown);
				alert('Error adding / update data');
				$('#btnSave').text('save'); //change button text
				$('#btnSave').attr('disabled', false); //set button enable 

			}
		});
	}
	function save() {
		$('#btnSave').text('saving...'); //change button text
		$('#btnSave').attr('disabled', true); //set button disable 

		// ajax adding data to database
		$.ajax({
			url: "<?php echo site_url('C_operator/addUser')?>",
			type: "POST",
			data: $('#form').serialize(),
			dataType: "JSON",
			success: function (data) {

				if (data.status) //if success close modal and reload ajax table
				{
					$('#modal_form').modal('hide');
					reload_table();
				} else {
					for (var i = 0; i < data.inputerror.length; i++) {
						$('[name="' + data.inputerror[i] + '"]').parent().parent().addClass('has-error'); //select parent twice to select div form-group class and add has-error class
						$('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]); //select span help-block class set text error string
					}
				}
				$('#btnSave').text('save'); //change button text
				$('#btnSave').attr('disabled', false); //set button enable 


			},
			error: function (jqXHR, textStatus, errorThrown) {
				alert('Error adding / update data');
				$('#btnSave').text('save'); //change button text
				$('#btnSave').attr('disabled', false); //set button enable 

			}
		});
	}
	// Run summer note
	$(document).ready(function () {
		// BS File Input
		var $el1 = $('#produkmedia');
		$('#produkmedia').fileinput({
			uploadUrl:'C_upload/upload_image',
			showUpload: false,
			showRemove: false,
			overwriteInitial: false,
			maxFileSize: 2048,
			initialPreviewAsData: true,
		}).on("filebatchselected", function(event, files) {
    	$el1.fileinput("upload"); 
		});
		$('.harga').mask("#.##0", {
			reverse: true
		});
		$('#descsingkat').summernote({
			// disableResizeEditor: true
			//   airMode:true,
			height: "100px",
			placeholder: 'quick description'
		});
		$('#biografi').summernote({
			// disableResizeEditor: true
			//   airMode:true,
			height: "400px",
			// placeholder:'quick description'
		});
		$('#highlight').summernote({
			// disableResizeEditor: true
			//   airMode:true,
			height: "300px",
			placeholder: 'Main features of your product'
		});
		$('#fasilitas').summernote({
			// disableResizeEditor: true
			//   airMode:true,
			height: "300px",
			placeholder: 'Your facilites you provide'
		});
		$('#kebijakan').summernote({
			// disableResizeEditor: true
			//   airMode:true,
			height: "300px",
			placeholder: 'Term and condition'

		});
		// $('.note-statusbar').hide(); 
		$('.noteair').summernote({
			//   airMode:true,
			placeholder: 'write your description here',
			height: "300px",
		});
		$('#kota').autocomplete({
			source: function (req, res) {
				$.getJSON("<?php echo site_url('C_product/autokota/')?>", {
					nama_kota: req.term
				}, res);
			}
		});
		$('#touroperator').autocomplete({
			source: function (req, res) {
				$.getJSON("<?php echo site_url('C_product/autooperator/')?>", {
					nama_operator: req.term
				}, res);
			}
		});
		$.getJSON('<?php echo site_url("C_product/autojenis/")?>',
			function (data) {
				var html = '';
				var len = data.length;
				for (var i = 0; i < len; i++) {
					if (data[i] == "<?php if(isset($jenis)) echo $jenis[0]->jenis_tour ?>") {
						html += '<option selected value="' + data[i] + '">' + data[i] + '</option>';
					} else {
						html += '<option value="' + data[i] + '">' + data[i] + '</option>';
					}
				}
				$('select#jenis').append(html);
			});
		var dataid = new Array();
		$("#addfoto").fileinput({
			'theme': 'explorer-fa',
			uploadUrl: "<?php echo site_url('/C_upload/upload_image/insert')?>",
			showUpload: false,
			overwriteInitial: false,
			maxFileSize: 2048,
			initialPreviewAsData: true,
			maxFileCount: 5,
        	showBrowse: true,
			showRemove: false,
       		browseOnZoneClick: true,
			
		}).on("filebatchselected", function(event, files) {
    	$('#addfoto').fileinput("upload"); 
		}).on('fileuploaded', function(event, data, previewId, index) {
    	var response = data.response;
		dataid.push(response.initialPreviewConfig[0].key);
		console.log(dataid);
		$('[name="idmedia"]').val(dataid);
		});
		$('#editfoto').fileinput({
			'theme': 'explorer-fa',
			uploadUrl:"<?php echo site_url('/C_upload/upload_image/update')?>",
			showUpload: false,
			overwriteInitial: false,
			maxFileSize: 2048,
			initialPreviewAsData: true,
			maxFileCount: 5,
        	showBrowse: true,
			showRemove: false,
       		browseOnZoneClick: true,
			initialPreview: <?php if(isset($med)) echo $med; else echo '[]'; ?>,
			initialPreviewConfig: <?php if(isset($med)) echo $met; else echo '[],' ?>
		}).on("filebatchselected", function(event, files) {
    	$('#editfoto').fileinput("upload"); 
		});

	})

</script>
<!-- Chart Script -->

<!-- Data Table Script -->
<script>
	$(function () {
		$('#example1').DataTable()
		$('#example2').DataTable({
			'paging': true,
			'lengthChange': false,
			'searching': false,
			'ordering': true,
			'info': true,
			'autoWidth': false
		})
	})

</script>
<script type="text/javascript">

</script>
<script type="text/javascript">
	var save_method;
	var table;
	$(document).ready(function () {
		$('.dropify').dropify({
			messages: {
				default: 'Drag and Drop to upload your logo',
				replace: 'Replace',
				remove: 'Delete',
				error: 'error'
			}
		});
		$('.dropify').on('click touchstart', function () {
			$(this).val('');
		})
		$('dropify').change(function (e) {
			// console.log(e);
		})


	});

</script>
<script>
	$(function () {
		//Initialize Select2 Elements
		// $('.select2').select2()

		//Datemask dd/mm/yyyy
		// $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
		// //Datemask2 mm/dd/yyyy
		// $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
		// //Money Euro
		// $('[data-mask]').inputmask()

		//Date range picker
		$('#reservation').daterangepicker({}, function (start, end, label) {
			console.log(start.format('YYYY/MM/DD'));
			console.log(end.format('YYYY/MM/DD'))
		});
		$(function () {

			var start = moment().subtract(29, 'days');
			var end = moment();

			function cb(start, end) {
				$('#statistic span').html(start.format('D/MM/YYYY') + ' - ' + end.format('D/MM/YYYY'));
			}

			$('#statistic').daterangepicker({
				startDate: start,
				endDate: end,
				ranges: {
					'Today': [moment(), moment()],
					'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
					'Last 7 Days': [moment().subtract(6, 'days'), moment()],
					'Last 30 Days': [moment().subtract(29, 'days'), moment()],
					'This Month': [moment().startOf('month'), moment().endOf('month')],
					'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				}
			}, cb);

			cb(start, end);

		});
		//Date range picker with time picker
		$('#reservationtime').daterangepicker({
			timePicker: true,
			timePickerIncrement: 30,
			format: 'MM/DD/YYYY h:mm A'
		})
		//Date range as a button
		$('#daterange-btn').daterangepicker({
				ranges: {
					'Today': [moment(), moment()],
					'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
					'Last 7 Days': [moment().subtract(6, 'days'), moment()],
					'Last 30 Days': [moment().subtract(29, 'days'), moment()],
					'This Month': [moment().startOf('month'), moment().endOf('month')],
					'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				},
				startDate: moment().subtract(29, 'days'),
				endDate: moment()
			},
			function (start, end) {
				$('#daterange-btn span').html(start.format('YYYY/MM/DD') + ' - ' + end.format('YYYY/MM/DD'));
				console.log(start);
			}
		)

		//Date picker
		$('#datepicker').datepicker({
			autoclose: true,
			dateFormat: 'dd/mm/yy'
		})


		// //iCheck for checkbox and radio inputs
		// $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
		//   checkboxClass: 'icheckbox_minimal-blue',
		//   radioClass   : 'iradio_minimal-blue'
		// })
		// //Red color scheme for iCheck
		// $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
		//   checkboxClass: 'icheckbox_minimal-red',
		//   radioClass   : 'iradio_minimal-red'
		// })
		// //Flat red color scheme for iCheck
		// $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
		//   checkboxClass: 'icheckbox_flat-green',
		//   radioClass   : 'iradio_flat-green'
		// })

		// //Colorpicker
		// $('.my-colorpicker1').colorpicker()
		// //color picker with addon
		// $('.my-colorpicker2').colorpicker()

		// //Timepicker
		// $('.timepicker').timepicker({
		//   showInputs: false
		// })
	})

</script>
</body>

</html>
