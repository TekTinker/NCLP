@extends('template.base')

@section('page_content')

	<form class="form-horizontal" enctype="multipart/form-data" role="form" action="{{ route('gallery.store') }}" method="POST">
		{{ csrf_field() }}
		<div class="clearfix">
			@include('template.partials.errors')
		</div>

        <input type="hidden" value="stripe" name="type" />

        <div class="form-group">
            <div class="center">
                <img id="photo" src="#" alt="" />
            </div>
        </div>

		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Select Photo </label>

			<div class="col-sm-9">
				<input name="photo" id="form-field-1" placeholder="Photo" class="col-xs-10 col-sm-5" type="file"
					   value="" accept="image/gif, image/jpeg, image/jpg,image/png, image/bmp" onchange="readURL(this);">
			</div>
		</div>


		<div class="clearfix form-actions">
			<div class="col-md-offset-3 col-md-9">
				<button class="btn btn-info" type="submit">
					<i class="ace-icon fa fa-check bigger-110"></i>
					Add
				</button>

				&nbsp; &nbsp; &nbsp;
				<a class="btn" href="{{ route('gallery.stripe.index') }}">
					<i class="ace-icon fa fa-undo bigger-110"></i>
					Cancel
				</a>
			</div>
		</div>

	</form>

    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#photo')
                        .attr('src', e.target.result)
                        .width(400)
                        .height(400);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>

@endsection