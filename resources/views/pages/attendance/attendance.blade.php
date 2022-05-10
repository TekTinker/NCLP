@extends('template.base')

@section('page_content')

	<div class="col-xs-12">

		<div class="clearfix"></div>
		<div class="table-header">
			Attendance List
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
							aria-label="Domain: activate to sort column ascending">Date & Time
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Class Name
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">STC
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Submitted By
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Location
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">VT
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">PM
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">PD
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Action
						</th>
					</tr>
					</thead>

					<tbody>

					@foreach($attendances as $attendance)
						@include('template.partials.elements.attendance_table_row')
					@endforeach


					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection