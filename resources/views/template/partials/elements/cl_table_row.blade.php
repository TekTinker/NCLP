<tr role="row" class="odd">
	<td>{{ $cl->id }}</td>
	<td>{{ $cl->name }}</td>
	<td>{{ $cl->stc_name}}</td>
	<td>
		<div class="btn-group">

			<form class="inline" method="GET" action="{{ route('students.index', ['id' => $cl->id]) }}">
				<button type="submit" class="btn btn-xs btn-info">
					<i class="ace-icon fa fa-pencil bigger-120"></i>
					&nbsp;
					View Students

				</button>
			</form>

			<form class="inline" method="GET" action="{{ route('students.create', ['id' => $cl->id]) }}">
				<button type="submit" class="btn btn-xs btn-info">
					<i class="ace-icon fa fa-plus bigger-120"></i>
					&nbsp;
					Add Student

				</button>
			</form>


		</div>
	</td>
</tr>
