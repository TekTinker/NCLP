@extends('template.base')

@section('page_content')

	<form class="form-horizontal" role="form" action="{{ route('cls.store') }}" method="POST">
		{{ csrf_field() }}
		<div class="clearfix">
			@include('template.partials.errors')
		</div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Class Name </label>

			<div class="col-sm-9">
				<input name="name" id="form-field-1" placeholder="Name" class="col-xs-10 col-sm-5" type="text"
					   value="{{Request::old('name') ?:  '' }}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Select STC </label>
			<div class="col-sm-5">
				<select class="col-sm-9" name="stc_id">
					<option value="">Select STC</option>
					@foreach($stcs as $stc)
						<option value="{{ $stc->id }}">
							{{ $stc->name }}
						</option>
					@endforeach
				</select>
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