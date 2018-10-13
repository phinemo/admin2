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
<!-- jvectormap  -->
<script src="<?php echo base_url('admintemplate/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
<script src="<?php echo base_url('admintemplate/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
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

	// Run summer note
	$(document).ready(function () {
		$('.harga').mask("#.##0", {reverse: true});
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
					if (data[i] == "<?php if(isset($jenis)) echo $jenis[0]->jenis_tour ?>"){
						html += '<option selected value="' + data[i] + '">' + data[i] + '</option>';	
					}
					else {
						html += '<option value="' + data[i] + '">' + data[i] + '</option>';
					}
					
				}
				$('select#jenis').append(html);
			});
		$("#filefoto").fileinput({
			'theme': 'explorer-fa',
			'uploadUrl': null,
			data: 'filefoto',
			showUpload: false,
			overwriteInitial: false,
			maxFileSize: 2048,
			initialPreviewAsData: true,
			initialPreview: [
				<?php 
      			// var_dump($gambar);
        	if (isset($gambar[0]) && count($gambar[0]) != 0){
          		foreach ($gambar as $row){
          		// var_dump($row->gambar);
            		echo "'".base_url()."upload/images/".$row[0]->resized."',";
						}
					}
				?>
			],
			initialPreviewConfig: []
		});

		$("#editfoto").fileinput({
			'theme': 'explorer-fa',
			'uploadUrl': null,
			data: 'filefoto',
			showUpload: false,
			overwriteInitial: false,
			deleteUrl: '<?php echo base_url()."upload/images/file-delete"; ?>',
			initialPreviewAsData: true,
			initialPreview: [
				<?php 
								// var_dump($gambar);
							if (isset($gambar[0]) && count($gambar[0]) != 0){
								foreach ($gambar as $row){
								// var_dump($row->gambar);
									echo "'".base_url()."upload/images/".$row[0]->resized."',";
										}
									}
								?>
			],
			initialPreviewConfig: []
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
	$(document).ready(function () {
		$('.dropify').dropify({
			messages: {
				default: 'Drag and Drop to upload your picture',
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
