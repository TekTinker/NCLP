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
						<div id="login-box" class="login-box visible widget-box no-border">
							<div class="widget-body">
								<div class="widget-main">
									<h4 class="header blue lighter bigger">
										<i class="ace-icon fa fa-coffee green"></i>
										Please Enter Your Information
									</h4>

									<div class="space-6"></div>

									<form method="POST" action="{{ route('login') }}">
										{{ csrf_field() }}

										<fieldset>
											<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" class="form-control"
																   placeholder="Email" name="email"
																   value="{{ old('email') }}" required autofocus/>
															<i class="ace-icon fa fa-user"></i>
														</span>
											</label>

											<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control"
																   placeholder="Password" name="password"/>
															<i class="ace-icon fa fa-lock"></i>
														</span>
											</label>

											<div class="space"></div>

											@foreach($errors->all() as $error)
												<div class="alert alert-danger">
													<i class="ace-icon fa fa-times"></i>
													{{ $error }}
												</div>
											@endforeach

											<div class="clearfix">
												<label class="inline">
													<input type="checkbox" class="ace"
														   name="remember" {{ old('remember') ? 'checked' : '' }}/>
													<span class="lbl"> Remember Me</span>
												</label>

												<button type="submit"
														class="width-35 pull-right btn btn-sm btn-primary">
													<i class="ace-icon fa fa-key"></i>
													<span class="bigger-110">Login</span>
												</button>
											</div>

											<div class="space-4"></div>
										</fieldset>
									</form>


								</div><!-- /.widget-main -->

								<div class="toolbar clearfix">
									<div>
										<a href="{{ route('password.request') }}" data-target="#forgot-box"
										   class="forgot-password-link">
											<i class="ace-icon fa fa-arrow-left"></i>
											I forgot my password
										</a>
									</div>

									<div>
										<a href="{{ route('register') }}" data-target="#signup-box"
										   class="user-signup-link">
											I want to register
											<i class="ace-icon fa fa-arrow-right"></i>
										</a>
									</div>
								</div>
							</div><!-- /.widget-body -->
						</div><!-- /.login-box -->
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
