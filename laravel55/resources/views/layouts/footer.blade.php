<!-- 主页脚 -->
<footer class="main-footer">
  <!-- To the right -->
  <div class="pull-right hidden-xs"></div>
  <!-- Default to the left -->
  <strong> <a href="#"></a></strong>


  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</footer>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->



     <!-- jQuery 3 -->
<script src="{{ asset('admin-lte/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin-lte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('admin-lte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin-lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('admin-lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin-lte/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin-lte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin-lte/dist/js/demo.js') }}"></script>
<!-- page script -->

<!-- Select2 -->
<script src="{{ asset('admin-lte/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('admin-lte/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset('admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset('admin-lte/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
<!-- date-range-picker -->
<script src="{{ asset('admin-lte/bower_components/moment/min/moment.min.js') }}"></script>
<script src="{{ asset('admin-lte/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<!-- bootstrap datepicker -->
<script src="{{ asset('admin-lte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}"></script>
<!-- bootstrap color picker -->
<script src="{{ asset('admin-lte/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
<!-- bootstrap time picker -->
<script src="{{ asset('admin-lte/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>

<!-- iCheck 1.0.1 -->
<script src="{{ asset('admin-lte/plugins/iCheck/icheck.min.js') }}"></script>




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

</body>
{{--<script>--}}
{{--  var t = 0;--}}

{{--  var btn = document.getElementsByClassName('tian')[0];--}}
{{--  var start;--}}
{{--  var one;--}}
{{--  var end;--}}
{{--  var two;--}}
{{--  document.body.onclick = function () {--}}
{{--    if (t == 0) {--}}
{{--      t = 1;--}}
{{--      start = new Date();--}}
{{--      one = start.getTime();--}}
{{--    } else {--}}
{{--      end = new Date();--}}
{{--      two = end.getTime();--}}
{{--      if (two - one < 1000) {--}}
{{--        t += 1;--}}
{{--        one = two;--}}
{{--        if (t == 3) {--}}
{{--          window.location.href = 'https://www.baidu.com/'--}}
{{--        }--}}
{{--      } else {--}}
{{--        t = 1;--}}
{{--        start = new Date();--}}
{{--        one = start.getTime();--}}
{{--      }--}}
{{--    }--}}
{{--  }--}}
{{--</script>--}}
</html>