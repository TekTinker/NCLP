@extends('template.base')

@section('page_content')

	<div class="col-xs-12">

		<div class="clearfix">
			<div class="pull-right tableTools-container">
				<a href="{{ route('gallery.banner.create') }}">
					<button class="btn btn-app btn-success btn-sm">
						<i class="ace-icon fa fa-plus bigger-200"></i>
						Add
					</button>
				</a>
				<a class="btn btn-app btn-yellow btn-sm" href="{{ route('gallery.banner.index') }}">
					<i class="ace-icon fa fa-refresh bigger-200"></i>
					Reload
				</a>
			</div>
		</div>

    <ul class="ace-thumbnails clearfix">

        @foreach($galleries as $gallery)
            @include('template.partials.elements.gallery_table_row')
        @endforeach

    </ul>

	</div>

@endsection