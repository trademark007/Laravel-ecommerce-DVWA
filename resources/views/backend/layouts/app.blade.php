<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>commerce</title>

	<!-- Global stylesheets -->
    <link rel="stylesheet" href="{{asset('aset/css/icons/icomoon/styles.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('css/bootstrap-datepicker.css')}}"  rel="stylesheet" type="text/css">
	<link href="{{asset('css/pace.css')}}"  rel="stylesheet" type="text/css">
	@toastr_css
	<!-- /global stylesheets -->

</head>

<body>
	
	@include('backend.includes.header')
	<div class="pace" id="pace"></div>
	<!-- Page content -->
	<div class="page-content">

		@include('backend.includes.sidebar')

		<!-- Main content -->
		<div class="content-wrapper">

			<nav aria-label="breadcrumb" class="navbar-light" >
				<ol class="breadcrumb  p-1 ml-4">
						<li class="breadcrumb-item active">{{date('d-m-y')}}</li>
						<li class="breadcrumb-item active" aria-current="page" id="liveClock" class="clock" onload="showTime()">Home</li>
					&nbsp;
				</ol>
			</nav>

			<!-- Content area -->
			<div class="content pt-0 mt-2">

				@yield('content')

			</div>
			<!-- /content area -->

			@include('backend.includes.footer')
		</div>
		<!-- /main content -->

	</div>


	<!-- Core JS files -->
	<script src="{{asset('js/plugin/pace.min.js')}}"></script>

	<script src="{{asset('aset/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('aset/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('aset/js/main/app.js')}}"></script>
	@toastr_js
    @toastr_render
	<!-- Theme JS files -->
	<script src="{{asset('aset/js/plugins/visualization/d3/d3.min.js')}}"></script>
	<script src="{{asset('aset/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
	<script src="{{asset('aset/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script src="{{asset('aset/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script src="{{asset('aset/js/plugins/ui/moment/moment.min.js')}}"></script>
	<script src="{{asset('aset/js/plugins/pickers/daterangepicker.js')}}"></script>
	<script src="{{asset('aset/js/demo_pages/dashboard.js')}}"></script>
	<!-- /theme JS files -->

	<script src="{{asset('aset/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('aset/js/plugins/forms/selects/select2.min.js')}}"></script>

	<script src="{{asset('aset/js/demo_pages/datatables_basic.js')}}"></script>

    @yield('script')
	<script>
	
		$(function () {
			// Show the time
			showTime();
		})

		function showTime(){
			var date = new Date();
			var hours = date.getHours();
			var minutes = date.getMinutes();
			var seconds = date.getSeconds();

			var session = hours >= 12 ? 'pm' : 'am';

			hours = hours % 12;
			hours = hours ? hours : 12;
			minutes = minutes < 10 ? '0'+minutes : minutes;
			seconds = seconds < 10 ? '0'+seconds : seconds;

			var time = hours + ":" + minutes + ":" + seconds + " " + session;
			document.getElementById("liveClock").innerText = time;
			document.getElementById("liveClock").textContent = time;

			setTimeout(showTime, 1000);
		}
	</script>
</body>
</html>