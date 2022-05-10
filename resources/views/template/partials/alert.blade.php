@if (session('info-error'))
	<div class="alert alert-block alert-danger">

		<button type="button" class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>



		<i class="ace-icon fa fa-check red"></i>
		{{ session('info-error') }}

	</div>
@endif
@if (session('info-success'))
	<div class="alert alert-block alert-success">

		<button type="button" class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>



		<i class="ace-icon fa fa-check green"></i>
		{{ session('info-success') }}

	</div>
@endif
@if (session('info'))
	<div class="alert alert-block alert-info">



		<button type="button" class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>



		<i class="ace-icon fa fa-check green"></i>
		{{ session('info') }}

	</div>
@endif