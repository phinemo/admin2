
<footer class="main-footer">
  <div class="pull-right hidden-xs">
	<b>Version</b> 2.4.0
  </div>
  <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
  reserved.
</footer>

<!-- Control Sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="<?php echo base_url('admintemplate/bower_components/jquery/dist/jquery.min.js')?>"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('admintemplate/bower_components/bootstrap/dist/js/bootstrap.min.js')?>"></script>
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
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    // CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
<!-- Chart Script -->

<!-- Data Table Script -->
<script>
    $(function () {
      $('#example1').DataTable()
      $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': false,
        'searching'   : false,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : false
      })
    })
</script>
<script type="text/javascript">
   
  </script>
  <script type="text/javascript">
	$(document).ready(function(){
		$('.dropify').dropify({
			messages: {
                default: 'Drag and Drop to upload your picture',
                replace: 'Replace',
                remove:  'Delete',
                error:   'error'
            }
    });
    $('.dropify').on('click touchstart',function(){
      $(this).val('');
    })
    $('dropify').change(function(e){
     console.log(e); 
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
    $('#reservation').daterangepicker({
      }, function (start, end, label) {
        console.log(start.format('YYYY/MM/DD'));
        console.log(end.format('YYYY/MM/DD'))
      });
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
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