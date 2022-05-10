<tr role="row" class="odd">
	<td>{{ $user->name }}</td>
	<td>{{ $user->email }}</td>
	<td>
		<div class="btn-group">

			<form class="inline" method="GET" action="{{ route('user.vt.assign_stc', ['user' => $user->id]) }}">
				<button type="submit" class="btn btn-xs btn-info">
					<i class="ace-icon fa fa-check bigger-120"></i>
					&nbsp;
					STCs
				</button>
			</form>


			<form class="inline" method="GET" action="{{ route('user.view', ['user' => $user->id]) }}">
				<button type="submit" class="btn btn-xs btn-success">
					<i class="ace-icon fa fa-trash-o bigger-120"></i>
					&nbsp;
					View Profile
				</button>
			</form>


		</div>
	</td>
</tr>
