@extends('template.base')

@section('page_content')

	<div class="col-xs-12">

		<div class="clearfix">
			<div class="pull-right tableTools-container">
				<a href="{{ route('cls.create') }}">
					<button class="btn btn-app btn-success btn-sm">
						<i class="ace-icon fa fa-plus bigger-200"></i>
						Add
					</button>
				</a>
				<a class="btn btn-app btn-yellow btn-sm" href="{{ route('cls.index') }}">
					<i class="ace-icon fa fa-refresh bigger-200"></i>
					Reload
				</a>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="table-header">
			List of all Classes
		</div>

		<!-- div.table-responsive -->

		<!-- div.dataTables_borderWrap -->
		<div>
			<div id="dynamic-table_wrapper" class="dataTables_wrapper form-inline no-footer">

				<table id="dynamic-table" class="table table-striped table-bordered table-hover dataTable no-footer"
					   role="grid" aria-describedby="dynamic-table_info">
					<thead>
					<tr role="row">
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">ID
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Name
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">STC
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Action
						</th>
					</tr>
					</thead>

					<tbody>

					@foreach($cls as $cl)
						@include('template.partials.elements.cl_table_row')
					@endforeach


					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection