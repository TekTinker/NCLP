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

						<div id="signup-box" class="signup-box widget-box visible no-border">
							<div class="widget-body">
								<div class="widget-main">
									<h4 class="header green lighter bigger">
										<i class="ace-icon fa fa-users blue"></i>
										New User Registration
									</h4>

									<div class="space-6"></div>
									<p> Enter your details to begin: </p>

									<form method="POST" action="{{ route('register') }}">
										{{ csrf_field() }}
										<fieldset>

											<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" name="name" class="form-control"
																   placeholder="Name" value="{{ old('name') }}"/>
															<i class="ace-icon fa fa-user"></i>
														</span>
											</label>

											<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" name="email" class="form-control"
																   placeholder="Email" value="{{ old('email') }}"/>
															<i class="ace-icon fa fa-envelope"></i>
														</span>
											</label>


											<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password" class="form-control"
																   placeholder="Password"/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
											</label>

											<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" name="password_confirmation"
																   class="form-control" placeholder="Repeat password"/>
															<i class="ace-icon fa fa-retweet"></i>
														</span>
											</label>

											@include('template.partials.errors')

											<div class="space-24"></div>

											<div class="clearfix">
												<button type="reset" class="width-30 pull-left btn btn-sm">
													<i class="ace-icon fa fa-refresh"></i>
													<span class="bigger-110">Reset</span>
												</button>

												<button type="submit"
														class="width-65 pull-right btn btn-sm btn-success">
													<span class="bigger-110">Register</span>

													<i class="ace-icon fa fa-arrow-right icon-on-right"></i>
												</button>
											</div>
										</fieldset>
									</form>
								</div>

								<div class="toolbar center">
									<a href="{{ route('login') }}" data-target="#login-box" class="back-to-login-link">
										<i class="ace-icon fa fa-arrow-left"></i>
										Back to login
									</a>
								</div>
							</div><!-- /.widget-body -->
						</div><!-- /.signup-box -->
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
<![endif]-->
<script type="text/javascript">
	if ('ontouchstart' in document.documentElement) document.write("<script src='{{ asset('assets/js/jquery.mobile.custom.min.js') }}'>" + "<" + "/script>");
</script>

</body>
</html>
