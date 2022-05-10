@extends('template.base')

@section('page_content')


	<div class="clearfix">
		<div class="page-header">
			<h4>

				Class

				<i class="ace-icon fa fa-angle-double-right"></i>
				&nbsp;
				<b> {{ $data->class }}</b>
			</h4>

			<h4>

				STC

				<i class="ace-icon fa fa-angle-double-right"></i>
				&nbsp;
				<b> {{ $data->stc }}</b>
			</h4>

			<h4>

				Submitted By

				<i class="ace-icon fa fa-angle-double-right"></i>
				&nbsp;
				<b> {{ $data->user }}</b>
			</h4>

			<h4>

				Date & Time

				<i class="ace-icon fa fa-angle-double-right"></i>
				&nbsp;
				<b> {{ $data->created_at }}</b>
			</h4>

			<h4>

				Location

				<i class="ace-icon fa fa-angle-double-right"></i>
				&nbsp;
				<b> {{ $data->location }}</b>
			</h4>
		</div>
	</div>
	<div class="clearfix"></div>

	<div class="col-xs-12">

		<div class="clearfix"></div>
		<div class="table-header">
			Attendance
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
							aria-label="Domain: activate to sort column ascending">Student Name
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Attendance
						</th>
					</tr>
					</thead>

					<tbody>

					@foreach($attendances as $attendance)
						@include('template.partials.elements.attendance_view_table_row')
					@endforeach

					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection