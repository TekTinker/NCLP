<tr role="row" class="odd">
	<td>{{ $user->name }}</td>
	<td>{{ $user->email }}</td>
	<td>
		<div class="btn-group">

			<form class="inline" method="GET" action="{{ route('user.approve', ['user' => $user->id]) }}">
				<button type="submit" class="btn btn-xs btn-info">
					<i class="ace-icon fa fa-check bigger-120"></i>
					&nbsp;
					Approve
				</button>
			</form>


			<form class="inline" method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}">
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
