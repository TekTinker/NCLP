<tr role="row" class="odd">
	<td>{{ $stc->uid }}</td>
	<td>{{ $stc->name }}</td>
	<td>{{ $stc->address }}</td>
	<td>{{ $stc->taluka }}</td>
	<td>{{ $stc->district }}</td>
	<td>{{ $stc->state }}</td>
	<td>
		<div class="btn-group">

			<form class="inline" method="POST" action="{{ route('user.vt.remove_stc', ['id' => $user->id, 'stc_id' => $stc->id]) }}">
				{{ csrf_field() }}
				<button type="submit" class="btn btn-xs btn-danger">
					<i class="ace-icon fa fa-trash-o bigger-120"></i>
					&nbsp;
					Remove

				</button>
			</form>


		</div>
	</td>
</tr>
