@foreach($errors->all() as $error)
	<div class="alert alert-danger">
		<i class="ace-icon fa fa-times"></i>
		{{ $error }}
	</div>
@endforeach