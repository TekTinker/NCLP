@extends('template.base')

@section('page_content')

	<div class="row">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="profile-user-info profile-user-info-striped">
					<div class="profile-info-row">
						<div class="profile-info-name"> Name</div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="name">{{ $user->name }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Email</div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="email">{{ $user->email }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Mobile</div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="mobile">{{ $user->mobile }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Gender</div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="dob">{{ $user->gender }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> DOB</div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="dob">{{ $user->dob }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Address</div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="address">{{ $user->address }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Ward</div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="ward">{{ $user->ward }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Taluka</div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="taluka">{{ $user->taluka }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> District</div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="district">{{ $user->district }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Aadhar number</div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="aadhar">{{ $user->aadhar }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Pan Number</div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="pan">{{ $user->pan }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Category</div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="category">{{ $user->category }}</span>
						</div>
					</div>

					<div class="profile-info-row">
						<div class="profile-info-name"> Cast</div>

						<div class="profile-info-value">
							<span class="editable editable-click" id="cast">{{ $user->cast }}</span>
						</div>
					</div>


				</div>


			</div>
		</div>

		<div class="clearfix">&nbsp; </div>

		<div class="row">
			<div class="col-sm-2 col-sm-offset-3">
				<a class="btn btn-primary btn-block" href="{{ route('profile.edit') }}">
					<i class="ace-icon fa fa-edit align-top smaller-90"></i>
					Edit Profile
				</a>
			</div>
		</div>
	</div>


@endsection