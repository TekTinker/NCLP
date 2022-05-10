@extends('template.base')

@section('page_content')

	<form class="form-horizontal" role="form" action="{{ route('students.store') }}" method="POST">
		{{ csrf_field() }}
		<div class="clearfix">
			@include('template.partials.errors')
		</div>
		<input type="hidden" value="{{ $cl_id }}" name="cl_id">

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

			<div class="col-sm-9">
				<input name="name" id="form-field-1" placeholder="Name" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('name') ?:  '' }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Emp ID </label>

			<div class="col-sm-9">
				<input name="emp_id" id="form-field-1" placeholder="Employee ID" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('emp_id') ?: '' }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Punch ID </label>

			<div class="col-sm-9">
				<input name="punch_id" id="form-field-1" placeholder="Punch ID" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('punch_id') ?: '' }}">
			</div>
		</div>


		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">Marrital Status</label>

			<div class="col-sm-9">
				&nbsp;
				<label>
					<input name="marital_status" class="ace" type="radio" value="Married"
							{{Request::old('marital_status')=='Married' ? 'checked': ''}}>
					<span class="lbl"> Married</span>
				</label>

				&nbsp;

				<label>
					<input name="marital_status" class="ace" type="radio"
						   value="Unmarried"
							{{Request::old('marital_status')=='Unmarried' ? 'checked': ''}} >
					<span class="lbl"> Unmarried</span>
				</label>
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
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Designation </label>

			<div class="col-sm-9">
				<input name="designation" id="form-field-1" placeholder="Designation" class="col-xs-10 col-sm-5"
					   type="text"
					   value="{{Request::old('designation') ?:  '' }}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobile </label>

			<div class="col-sm-9">
				<input name="mobile" id="form-field-1" placeholder="Mobile" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('mobile') ?:  '' }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Shift </label>

			<div class="col-sm-9">
				<input name="shift" id="form-field-1" placeholder="Shift" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('shift') ?: '' }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Week Off </label>

			<div class="col-sm-9">
				<input name="week_off" id="form-field-1" placeholder="Week Off" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('week_off') ?: '' }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date of Birth </label>

			<div class="col-sm-9">
				<input name="dob" id="form-field-1" placeholder="DOB" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('dob') ?: '' }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date of Joining </label>

			<div class="col-sm-9">
				<input name="doj" id="form-field-1" placeholder="Date of Joining" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('doj') ?: '' }}">
			</div>
		</div>


		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" type="submit">
					<i class="ace-icon fa fa-check bigger-110"></i>
					Add
				</button>

				&nbsp; &nbsp; &nbsp;
				<a class="btn" href="{{ route('cls.index') }}">
					<i class="ace-icon fa fa-undo bigger-110"></i>
					Cancel
				</a>
			</div>
		</div>

	</form>

@endsection