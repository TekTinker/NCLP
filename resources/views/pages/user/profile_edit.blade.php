@extends('template.base')

@section('page_content')



	<form class="form-horizontal" role="form" action="{{ route('profile.update') }}" method="POST">
		{{ csrf_field() }}
		<div class="clearfix">
			@include('template.partials.errors')
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Name </label>

			<div class="col-sm-9">
				<input name="name" id="form-field-1" placeholder="Name" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('name') ?: $user->name }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>

			<div class="col-sm-9">
				<input name="email" id="form-field-1" placeholder="Email" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('email') ?:  $user->email }}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right">Gender</label>

			<div class="col-sm-9">
				&nbsp;
				<label>
					<input name="gender" class="ace" type="radio" value="Male"
						@if(Request::old('gender'))
							{{Request::old('gender')=='Male' ? 'checked': ''}}
						@elseif($user->gender)
							{{$user->gender=='Male' ? 'checked': ''}}
						@endif
					>
					<span class="lbl"> Male</span>
				</label>

				&nbsp;

				<label>
					<input name="gender" class="ace" type="radio"
						   value="Female"
						@if(Request::old('gender'))
							{{Request::old('gender')=='Female' ? 'checked': ''}}
						@elseif($user->gender)
							{{$user->gender=='Female' ? 'checked': ''}}
						@endif
					>
					<span class="lbl"> Female</span>
				</label>
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Mobile </label>

			<div class="col-sm-9">
				<input name="mobile" id="form-field-1" placeholder="Mobile" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('mobile') ?:  $user->mobile }}">
			</div>
		</div>


		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Education </label>

			<div class="col-sm-9">
				<input name="education" id="form-field-1" placeholder="Education" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('education') ?:  $user->education }}">
			</div>
		</div>


		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Date of Birth </label>

			<div class="col-sm-9">
				<input name="dob" id="form-field-1" placeholder="yyyy-mm-dd" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('dob') ?:  $user->dob }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Address </label>

			<div class="col-sm-9">
				<input name="address" id="form-field-1" placeholder="Address" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('address') ?:  $user->address }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Ward </label>

			<div class="col-sm-9">
				<input name="ward" id="form-field-1" placeholder="Ward" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('ward') ?:  $user->ward }}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Taluka </label>

			<div class="col-sm-9">
				<input name="taluka" id="form-field-1" placeholder="Taluka" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('taluka') ?:  $user->taluka }}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> District </label>

			<div class="col-sm-9">
				<input name="district" id="form-field-1" placeholder="District" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('district') ?:  $user->district }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> State </label>

			<div class="col-sm-9">
				<input name="state" id="form-field-1" placeholder="State" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('state') ?:  $user->state }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Pan Number </label>

			<div class="col-sm-9">
				<input name="pan" id="form-field-1" placeholder="Pan Number" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('pan') ?:  $user->pan }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Aadhar Number </label>

			<div class="col-sm-9">
				<input name="aadhar" id="form-field-1" placeholder="Aadhar Number" class="col-xs-10 col-sm-5"
					   type="text"
					   value="{{Request::old('aadhar') ?:  $user->aadhar }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Category </label>

			<div class="col-sm-9">
				<input name="category" id="form-field-1" placeholder="Category" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('category') ?:  $user->category }}">
			</div>
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Cast </label>

			<div class="col-sm-9">
				<input name="cast" id="form-field-1" placeholder="Cast" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('cast') ?:  $user->cast }}">
			</div>
		</div>

		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" type="submit">
					<i class="ace-icon fa fa-check bigger-110"></i>
					Submit
				</button>

				&nbsp; &nbsp; &nbsp;
				<a class="btn" href="{{ route('profile.view') }}">
					<i class="ace-icon fa fa-undo bigger-110"></i>
					Cancel
				</a>
			</div>
		</div>

	</form>





@endsection