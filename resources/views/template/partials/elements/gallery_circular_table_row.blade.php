<tr role="row" class="odd">
	<td>{{ $circular->title }}</td>
	<td>
		<div class="btn-group">

			<form class="inline" method="GET" action="{{ route('gallery.circular.show', ['circular' => $circular->id]) }}">
				<button type="submit" class="btn btn-xs btn-info">
					<i class="ace-icon fa fa-check bigger-120"></i>
					&nbsp;
					View
				</button>
			</form>


			<form class="inline" method="POST" action="{{ route('gallery.circular.delete', ['circular' => $circular->id]) }}">
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
