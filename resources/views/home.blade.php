@extends('template.base')

@section('page_content')

	<div class="col-md-8 col-md-offset-2">
		<div class="panel panel-default">
			<div class="panel-heading">Dashboard</div>

			<div class="panel-body">
				You are logged in!
				{{ Auth::user()->hasPermissionTo('stc_view')}}

				@if (Auth::user()->can('view', NCLP\Models\STC::find(2)))
					Allowed
				@endif

			</div>
		</div>
	</div>
@endsection