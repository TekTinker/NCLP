@extends('template.base')

@section('page_content')

	<form class="form-horizontal" role="form" action="{{ route('stcs.store') }}" method="POST">
		{{ csrf_field() }}
		<div class="clearfix">
			@include('template.partials.errors')
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> UID </label>

			<div class="col-sm-9">
				<input name="uid" id="form-field-1" placeholder="UID" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('uid') ?: '' }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

			<div class="col-sm-9">
				<input name="name" id="form-field-1" placeholder="Name" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('name') ?:  '' }}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>

			<div class="col-sm-9">
				<input name="address" id="form-field-1" placeholder="Address" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('address') ?:  '' }}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Taluka </label>

			<div class="col-sm-9">
				<input name="taluka" id="form-field-1" placeholder="Taluka" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('taluka') ?:  '' }}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> District </label>

			<div class="col-sm-9">
				<input name="district" id="form-field-1" placeholder="District" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('district') ?:  '' }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> State </label>

			<div class="col-sm-9">
				<input name="state" id="form-field-1" placeholder="State" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('state') ?: '' }}">
			</div>
		</div>


		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" type="submit">
					<i class="ace-icon fa fa-check bigger-110"></i>
					Add
				</button>

				&nbsp; &nbsp; &nbsp;
				<a class="btn" href="{{ route('stcs.index') }}">
					<i class="ace-icon fa fa-undo bigger-110"></i>
					Cancel
				</a>
			</div>
		</div>

	</form>

@endsection