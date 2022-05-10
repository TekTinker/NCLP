<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta charset="utf-8"/>
	<title>National Child Labor Project</title>

	<meta name="description" content="User login page"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

	<!-- bootstrap & fontawesome -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('assets/font-awesome/4.5.0/css/font-awesome.min.css') }}"/>

	<!-- text fonts -->
	<link rel="stylesheet" href="{{ asset('assets/css/fonts.googleapis.com.css') }}"/>


	<!-- ace styles -->
	<link rel="stylesheet" href="{{ asset('assets/css/ace.min.css') }}"/>

	<!--[if lte IE 9]-->
	<link rel="stylesheet" href="{{ asset('assets/css/ace-part2.min.css') }}"/>
	<!--[endif]-->
	<link rel="stylesheet" href="{{ asset('assets/css/ace-rtl.min.css') }}"/>

	<!--[if lte IE 9]-->
	<link rel="stylesheet" href="{{ asset('assets/css/ace-ie.min.css') }}"/>
	<!--[endif]-->

	<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

	<!--[if lte IE 8]-->
	<script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
	<script src="{{ asset('assets/js/respond.min.js') }}"></script>
	<!--[endif]-->
</head>

<body class="login-layout light-login">
<div class="main-container">
	<div class="main-content">
		<div class="row">
			<div class="col-sm-10 col-sm-offset-1">
				<div class="login-container">
					<div class="center">
						<h1>
							<span class="red">National Child Labor Project</span>
						</h1>
					</div>

					<div class="space-6"></div>

					<div class="position-relative">
						<div id="forgot-box" class="forgot-box widget-box no-border visible">
							<div class="widget-body">
								<div class="widget-main">
									<h4 class="header red lighter bigger">
										<i class="ace-icon fa fa-key"></i>
										Retrieve Password
									</h4>

									<div class="space-6"></div>
									<p>
										Enter your email and to receive instructions
									</p>

									<form method="POST" action="{{ route('password.email') }}">
										{{ csrf_field() }}
										<fieldset>
											<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control" name="email"
																   value="{{ old('email') }}" required autofocus
																   placeholder="Email"/>
															<i class="ace-icon fa fa-envelope"></i>
														</span>
											</label>

											@foreach($errors->all() as $error)
												<div class="alert alert-danger">
													<i class="ace-icon fa fa-times"></i>
													{{ $error }}
												</div>
											@endforeach

											<div class="clearfix">
												<button type="submit" class="width-35 pull-right btn btn-sm btn-danger">
													<i class="ace-icon fa fa-lightbulb-o"></i>
													<span class="bigger-110">Send Me!</span>
												</button>
											</div>
										</fieldset>
									</form>
								</div><!-- /.widget-main -->

								<div class="toolbar center">
									<a href="{{ route('login') }}" data-target="#login-box" class="back-to-login-link">
										Back to login
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</div>
							</div><!-- /.widget-body -->
						</div><!-- /.forgot-box -->
					</div><!-- /.position-relative -->
				</div>
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.main-content -->
</div><!-- /.main-container -->

<!-- basic scripts -->

<!--[if !IE]> -->
<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>

<!-- <![endif]-->

<!--[if IE]-->
<script src="{{ asset('assets/js/jquery-1.11.3.min.js') }}"></script>
<!--[endif]-->
<script type="text/javascript">
	if ('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('assets/js/jquery.mobile.custom.min.js') }}'>" + "<" + "/script>");
</script>

</body>
</html>
