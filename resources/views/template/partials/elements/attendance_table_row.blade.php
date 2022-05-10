<tr role="row" class="odd">
	<td>{{ $attendance->created_at }}</td>
	<td>{{ $attendance->class }}</td>
	<td>{{ $attendance->stc }}</td>
	<td>{{ $attendance->user }}</td>
	<td>{{ $attendance->location }}</td>
	<td>
		@if( $attendance->VT == 0 )
			Pending
		@else
			<i class="ace-icon fa fa-check bigger-120"></i>
		@endif
	</td>
	<td>
		@if( $attendance->PM == 0 )
			Pending
		@else
			<i class="ace-icon fa fa-check bigger-120"></i>
		@endif
	</td>
	<td>
		@if( $attendance->PD == 0 )
			Pending
		@else
			<i class="ace-icon fa fa-check bigger-120"></i>
		@endif
	</td>
	<td>
		<div class="btn-group">


			<form class="inline" method="POST" action="{{ route('attendances.approve') }}">
				{{ csrf_field() }}
				<input type="hidden" name="id" value="{{ $attendance->id }}">
				<button type="submit" class="btn btn-xs btn-info">
					<i class="ace-icon fa fa-trash-o bigger-120"></i>
					&nbsp;
					Approve

				</button>
			</form>

			<form class="inline" method="GET" action="{{ route('attendances.show', ['id' => $attendance->id]) }}">
				<button type="submit" class="btn btn-xs btn-success">
					<i class="ace-icon fa fa-trash-o bigger-120"></i>
					&nbsp;
					View

				</button>
			</form>


		</div>
	</td>
</tr>
