@extends('template.base')

@section('page_content')

	<form class="form-horizontal" enctype="multipart/form-data" role="form" action="{{ route('gallery.circular.store') }}" method="POST">
		{{ csrf_field() }}
		<div class="clearfix">
			@include('template.partials.errors')
		</div>

        <div class="form-group">
            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Title </label>

            <div class="col-sm-9">
                <input name="title" id="form-field-1" placeholder="Title" class="col-xs-10 col-sm-5" type="text"
                       value="{{Request::old('title') ?:  '' }}">
            </div>
        </div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Select PDF </label>

			<div class="col-sm-9">
				<input name="circular" id="form-field-1" placeholder="PDF" class="col-xs-10 col-sm-5" type="file"
					   value="" accept="application/pdf">
			</div>
		</div>


		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" type="submit">
					<i class="ace-icon fa fa-check bigger-110"></i>
					Add
				</button>

				&nbsp; &nbsp; &nbsp;
				<a class="btn" href="{{ route('gallery.circular.index') }}">
					<i class="ace-icon fa fa-undo bigger-110"></i>
					Cancel
				</a>
			</div>
		</div>

	</form>

@endsection