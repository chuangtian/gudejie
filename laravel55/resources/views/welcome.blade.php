<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('admin-lte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('admin-lte/bower_components/font-awesome/css/font-awesome.min.css') }}">
  <!-- DataTables -->
  <script src="{{ asset('admin-lte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('admin-lte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{ asset('admin-lte/bower_components/Ionicons/css/ionicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin-lte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('admin-lte/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="{{ asset('admin-lte/dist/css/skins/skin-blue.min.css') }}">



 
  <link rel="stylesheet" href="{{ asset('admin-lte/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{ asset('admin-lte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{ asset('admin-lte/plugins/iCheck/all.css') }}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{ asset('admin-lte/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{ asset('admin-lte/plugins/timepicker/bootstrap-timepicker.min.css') }}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{ asset('admin-lte/bower_components/select2/dist/css/select2.min.css') }}">
  

  <script src="{{ asset('js/jq110.js') }}"></script>
  <script src="{{ asset('admin-lte/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
  <body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

  
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1 align="center">
         在線支付
        </h1>
        
      </section>

      <!-- Main content -->
      <section class="content">
       
        <div class="callout callout">
          <p>收款銀行賬號隨時會變更，請每次重新獲取銀行賬號，客戶自行轉賬到舊銀行賬號造成的損失由用戶自行承擔，平臺概不負責；</p>
          <p>步驟: 請在5分鐘內，通過網銀轉賬到以下收款銀行賬號；</p>
          <p><h1 style="color: red">備註：請務必備註客戶姓名及支付流水號，以確保能夠對應款項；</h1></p>
        </div>
         <div class="box box-default">
        <div class="box-header with-border">
	        <h2 class="box-title">收款人信息</h2>
	      </div>
	      <div class="box-body">
	      	 <h4 class="margin">姓名</h4>
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="name" style="height:40px;font-size:20px;" value="{{$data->name}}">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat" style="width:100px;height:40px;font-size:20px;"  onclick="namel()">複製</button>
                    </span>
              </div>
              <h4 class="margin">卡號</h4>
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="account" style="height:40px;font-size:20px;"  value="{{$data->account}}">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat" style="width:100px;height:40px;font-size:20px;"  onclick="account()">複製</button>
                    </span>
              </div>
              <h4 class="margin">銀行名稱</h4>
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="bank_name" style="height:40px;font-size:20px;"  value="{{$data->bank_name}}">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat" style="width:100px;height:40px;font-size:20px;"  onclick="bank_name()">複製</button>
                    </span>
              </div>
              <h4 class="margin">銀行支行</h4>
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="bank_branch" style="height:40px;font-size:20px;"  value="{{$data->bank_branch}}">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat" style="width:100px;height:40px;font-size:20px;"  onclick="bank_branch()">複製</button>
                    </span>
              </div>
              <h4 class="margin">支付流水號</h4>
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="reference_number" style="height:40px;font-size:20px;"  value="{{$data->reference_number}}">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat" style="width:100px;height:40px;font-size:20px;"  onclick="reference_number()">複製</button>
                    </span>
              </div>
              <h4 class="margin">待付金額</h4>
              <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="transfer_amount" style="height:40px;font-size:20px;"  value="{{$data->transfer_amount}}">
                    <span class="input-group-btn">
                      <button type="button" class="btn btn-info btn-flat" style="width:100px;height:40px;font-size:20px;"  onclick="transfer_amount()">複製</button>
                    </span>
              </div>
	      </div>
	      </div>
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
 <script type="text/javascript">
    function namel() {
      var input = document.getElementById("name");
      input.select(); // 选中文本
      document.execCommand("copy"); // 执行浏览器复制命令
      alert("複製成功");
    }
     function account() {
      var input = document.getElementById("account");
      input.select(); // 选中文本
      document.execCommand("copy"); // 执行浏览器复制命令
      alert("複製成功");
    }
     function bank_name() {
      var input = document.getElementById("bank_name");
      input.select(); // 选中文本
      document.execCommand("copy"); // 执行浏览器复制命令
      alert("複製成功");
    }
     function bank_branch() {
      var input = document.getElementById("bank_branch");
      input.select(); // 选中文本
      document.execCommand("copy"); // 执行浏览器复制命令
      alert("複製成功");
    }
    function reference_number() {
      var input = document.getElementById("reference_number");
      input.select(); // 选中文本
      document.execCommand("copy"); // 执行浏览器复制命令
      alert("複製成功");
    }
     function transfer_amount() {
      var input = document.getElementById("transfer_amount");
      input.select(); // 选中文本
      document.execCommand("copy"); // 执行浏览器复制命令
      alert("複製成功");
    }
  </script>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src=".{{ asset('admin-lte/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ asset('admin-lte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('admin-lte/bower_components/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('admin-lte/bower_components/fastclick/lib/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('admin-lte/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('admin-lte/dist/js/demo.js') }}"></script>
</body>
</html>
