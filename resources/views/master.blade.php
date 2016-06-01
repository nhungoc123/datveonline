<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Laravel</title>

	<!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{ asset('/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('/plugins/datatables/dataTables.bootstrap.css') }}">

  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/dist/css/AdminLTE.min.css') }}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('/dist/css/skins/_all-skins.min.css') }}">
  
  <!-- iCheck -->
  <!-- <link rel="stylesheet" href="{{ asset('/plugins/iCheck/flat/blue.css') }}"> -->
  <!-- Morris chart -->
  <!-- <link rel="stylesheet" href="{{ asset('/plugins/morris/morris.css') }}"> -->
  <!-- jvectormap -->
  <!-- <link rel="stylesheet" href="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.css') }}"> -->
  <!-- Date Picker -->
  <!-- <link rel="stylesheet" href="{{ asset('/plugins/datepicker/datepicker3.css') }}"> -->
  <!-- Daterange picker -->
  <!-- <link rel="stylesheet" href="{{ asset('/plugins/daterangepicker/daterangepicker-bs3.css') }}"> -->
  <!-- bootstrap wysihtml5 - text editor -->
  <!-- <link rel="stylesheet" href="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}"> -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  @yield('css')

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
	@include('include.header')

	@include('include.sidebar')

	@yield('content')

	@include('include.footer')

	@include('include.control')

	<!-- Add the sidebar's background. This div must be placed
	   immediately after the control sidebar -->
	<div class="control-sidebar-bg"></div>

</div>
<!-- ./wrapper -->

	<!-- jQuery 2.2.0 -->
	<script src="{{ asset('/plugins/jQuery/jQuery-2.2.0.min.js') }}"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
	<script>
	  $.widget.bridge('uibutton', $.ui.button);
	</script>
	<!-- Bootstrap 3.3.6 -->
	<script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}"></script>

	<!-- DataTables -->
	<script src="{{asset('/plugins/datatables/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>

	{{--<!-- Morris.js charts -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
	<script src="{{ asset('/plugins/morris/morris.min.js') }}"></script>
	<!-- Sparkline -->
	<script src="{{ asset('/plugins/sparkline/jquery.sparkline.min.js') }}"></script>
	<!-- jvectormap -->
	<script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}"></script>
	<script src="{{ asset('/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<!-- jQuery Knob Chart -->
	<script src="{{ asset('/plugins/knob/jquery.knob.js') }}"></script>
	<!-- daterangepicker -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
	<script src="{{ asset('/plugins/daterangepicker/daterangepicker.js') }}"></script>
	<!-- datepicker -->
	<script src="{{ asset('/plugins/datepicker/bootstrap-datepicker.js') }}"></script>
	<!-- Bootstrap WYSIHTML5 -->
	<script src="{{ asset('/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
	--}}

	<!-- Slimscroll -->
	<script src="{{ asset('/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
	<!-- FastClick -->
	<script src="{{ asset('/plugins/fastclick/fastclick.js') }}"></script>
	<!-- AdminLTE App -->
	<script src="{{ asset('/dist/js/app.min.js') }}"></script>

	{{--<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="{{ asset('/dist/js/pages/dashboard.js') }}"></script>--}}
	
	<!-- AdminLTE for demo purposes -->
	<script src="{{ asset('/dist/js/demo.js') }}"></script>

	<script type="text/javascript">
	// auto close alert success
		$(".alert-success").fadeTo(2000, 500).slideUp(500, function(){
		    $(".alert-success").alert('close');
		});
	</script>

	@yield('script')
</body>
</html>
