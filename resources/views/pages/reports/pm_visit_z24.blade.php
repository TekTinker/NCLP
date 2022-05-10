@extends('template.base')

@section('page_content')

	<div class="col-xs-12">
		<div class="clearfix"></div>
		<div class="table-header">
			Reports of PM Visits A2
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
							aria-label="Domain: activate to sort column ascending">STC UID
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Date
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">PM Name
						</th>
						<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
							aria-label="Domain: activate to sort column ascending">Remark
						</th>
					</tr>
					</thead>

					<tbody>

					@foreach($reports as $report)
						@include('template.partials.elements.pm_visit_z24_table_row')
					@endforeach


					</tbody>
				</table>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="dataTables_paginate paging_simple_numbers" id="dynamic-table_paginate">
                            {{ $reports->links() }}
                        </div>
                    </div>
                </div>
			</div>
		</div>
	</div>

@endsection