@extends('template.base')

@section('page_content')

	<div class="col-xs-12">

		@if(count($users) > 0)


		<div class="clearfix"></div>
		<div class="table-header">
			Pending Staff Approvals
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
								aria-label="Domain: activate to sort column ascending">Email
							</th>
							<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
								aria-label="Domain: activate to sort column ascending">Action
							</th>
						</tr>
						</thead>

						<tbody>

						@foreach($users as $user)
							@include('template.partials.elements.appovals_table_row')
						@endforeach


						</tbody>
					</table>
					<div class="row">
						<div class="col-xs-6">
							<div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate">
								{{ $users->links() }}
							</div>
						</div>
					</div>
				</div>
			</div>

		@else
			<div class="clearfix"></div>
			<div class="table-header">
				No Pending Staff Approvals
			</div>
		@endif
	</div>

@endsection