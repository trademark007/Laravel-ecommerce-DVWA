
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/components.min')}}.css" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('js/main/jquery.min.js')}}"></script>
	<script src="{{asset('js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('js/plugins/forms/styling/uniform.min.js')}}"></script>

	<script src="{{asset('js/app.js')}}"></script>
	<script src="{{asset('js/demo_pages/login.js')}}"></script>
	<!-- /theme JS files -->

</head>

<body>

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Unlock form -->
				<form class="login-form" action="index.html">
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center">
								<div class="card-img-actions d-inline-block mb-3">
									<img class="rounded-circle" src="../../../../global_assets/images/placeholders/placeholder.jpg" width="160" height="160" alt="">
									<div class="card-img-actions-overlay card-img rounded-circle">
										<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
											<i class="icon-question7"></i>
										</a>
									</div>
								</div>
							</div>

							<div class="text-center mb-3">
								<h6 class="font-weight-semibold mb-0">Victoria Baker</h6>
								<span class="d-block text-muted">Unlock your account</span>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-right">
								<input type="password" class="form-control" placeholder="Your password">
								<div class="form-control-feedback">
									<i class="icon-user-lock text-muted"></i>
								</div>
							</div>

							<button type="submit" class="btn btn-primary btn-block"><i class="icon-unlocked mr-2"></i> Unlock</button>
						</div>
					</div>
				</form>
				<!-- /unlock form -->

			</div>
			<!-- /content area -->


		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
