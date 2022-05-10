<tr role="row" class="odd">
	<td>{{ $stc->uid }}</td>
	<td>{{ $stc->name }}</td>
	<td>{{ $stc->address }}</td>
	<td>{{ $stc->taluka }}</td>
	<td>{{ $stc->district }}</td>
	<td>{{ $stc->state }}</td>
	<td>
		<div class="btn-group">

			<form class="inline" method="GET" action="{{ route('stcs.edit', ['stc' => $stc->id]) }}">
				<button type="submit" class="btn btn-xs btn-info">
					<i class="ace-icon fa fa-pencil bigger-120"></i>
					&nbsp;
					Edit

				</button>
			</form>


			<form class="inline" method="POST" action="{{ route('stcs.destroy',  ['stc' => $stc->id]) }}">
				@method('DELETE')
				{{ csrf_field() }}
				<button type="submit" class="btn btn-xs btn-danger">
					<i class="ace-icon fa fa-trash-o bigger-120"></i>
					&nbsp;
					Delete

				</button>
			</form>


		</div>
	</td>
</tr>
