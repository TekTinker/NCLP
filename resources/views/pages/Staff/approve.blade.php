@extends('template.base')

@section('page_content')



	<form class="form-horizontal" role="form" action="{{ route('user.approve', ['user' => $user->id]) }}" method="POST">
		{{ csrf_field() }}

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

			<div class="col-sm-9">
				<input name="name" id="form-field-1" placeholder="Name" class="col-xs-10 col-sm-5" type="text"
					   value="{{ $user->name }}" readonly="true">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

			<div class="col-sm-9">
				<input name="email" id="form-field-1" placeholder="Email" class="col-xs-10 col-sm-5" type="text"
					   value="{{ $user->email }}" readonly="true">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Role </label>

			<div class="col-sm-9">
				<select class="col-xs-10 col-sm-5" name="role" id="form-field-select-1">
					<option value="">Select Role</option>
					@foreach($roles as $role)
						<option value="{{ $role->name }}">
							{{ $role->name }}
						</option>
					@endforeach
				</select>
			</div>
		</div>


		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" type="submit">
					<i class="ace-icon fa fa-check bigger-110"></i>
					Submit
				</button>

				&nbsp; &nbsp; &nbsp;
				<a class="btn" href="{{ route('user.approval') }}">
					<i class="ace-icon fa fa-undo bigger-110"></i>
					Cancel
				</a>
			</div>
		</div>

	</form>

@endsection