@extends('template.base')

@section('page_content')

	<div class="col-xs-12">
		<div class="clearfix"></div>
		<div class="table-header">
			List of all Students in Class
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
							aria-label="Domain: activate to sort column ascending">Name
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Emp ID
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Punch ID
						</th>

						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Address
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Marrital Status
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Designation
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Mobile
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Shift
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Week Off
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Date of Birth
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Date of Joining
						</th>

					</tr>
					</thead>

					<tbody>

					@foreach($students as $student)
						@include('template.partials.elements.student_table_row')
					@endforeach


					</tbody>
				</table>
			</div>
		</div>
	</div>

@endsection