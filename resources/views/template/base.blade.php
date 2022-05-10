<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
	<meta charset="utf-8"/>
	<title>Dashboard - Ace Admin</title>

	<meta name="description" content="overview &amp; stats"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

	@include('template.partials.header_scripts')
</head>

<body class="no-skin">

@include('template.partials.navbar')

<div class="main-container ace-save-state" id="main-container">
	<script type="text/javascript">
		try {
			ace.settings.loadState('main-container')
		} catch (e) {
		}
	</script>

	@include('template.partials.sidebar')

	<div class="main-content">
		<div class="main-content-inner">

			@include('template.partials.breadcrums')

			<div class="page-content">


				{{--Todo--}}
				 {{--@include('template.partials.page_header')--}}

				<div class="row">
					<div class="col-xs-12">
						<!-- PAGE CONTENT BEGINS -->

						@include('template.partials.alert')
						<div class="row">

							@yield('page_content')

						</div>

						<!-- PAGE CONTENT ENDS -->
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.page-content -->

		</div>
	</div><!-- /.main-content -->

	@include('template.partials.footer')

	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>
</div><!-- /.main-container -->

@include('template.partials.footer_scripts')

</body>
</html>