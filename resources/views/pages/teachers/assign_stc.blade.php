@extends('template.base')

@section('page_content')
	<div class="clearfix">
		<div class="page-header">
			<h1>
				<b> {{ $user->name }}</b>

				<i class="ace-icon fa fa-angle-double-right"></i>
				&nbsp; {{ $user->email }}

			</h1>
		</div>
	</div>

	@if(count($stcs) > 0)

	<div class="clearfix"></div>
	<div class="table-header">
		Special Training Center Currently Assigned
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
						aria-label="Domain: activate to sort column ascending">Uid
					</th>
					<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
						aria-label="Domain: activate to sort column ascending">Name
					</th>
					<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
						aria-label="Domain: activate to sort column ascending">Address
					</th>
					<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
						aria-label="Domain: activate to sort column ascending">Taluka
					</th>
					<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
						aria-label="Domain: activate to sort column ascending">District
					</th>
					<th tabindex="0" aria-controls="dynamic-table" rowspan="1" colspan="1"
						aria-label="Domain: activate to sort column ascending">State
					</th>
				</tr>
				</thead>

				<tbody>

				@foreach($stcs as $stc)
					@include('template.partials.elements.stc_assigned_teacher_table_row')
				@endforeach


				</tbody>
			</table>
		</div>
	</div>

	@else
		<div class="clearfix"></div>
		<div class="table-header">
			No STCs have been Assigned to this user.
		</div>
	@endif

	<hr>

	<div class="col-md-10">
		<div class="widget-box">
			<div class="widget-header">
				<h4 class="widget-title">Assign STC</h4>
			</div>

			<div class="widget-body">
				<div class="widget-main">
					<form class="form-inline" method="POST" action="{{ route('user.teacher.assign_stc', ['id' => $user->id]) }}">
						{{ csrf_field() }}
						<select class="col-sm-5" name="stc" id="form-field-select-1">
							<option value="">Select STC</option>
							@foreach($all_stcs as $all_stc)
								<option value="{{ $all_stc->id }}">
									{{ $all_stc->name }}
								</option>
							@endforeach
						</select>

						&nbsp;

						<button type="submit" class="btn btn-info btn-sm">
							<i class="ace-icon fa fa-plus bigger-110"></i> &nbsp;Add
						</button>
					</form>
				</div>
			</div>
		</div>

		<div class="space-6"></div>
	</div>
@endsection