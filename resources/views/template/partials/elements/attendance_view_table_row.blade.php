<tr role="row" class="odd">
	<td>{{ $attendance['name'] }}</td>
	<td>
		@if($attendance['present'] == 0)
			Absent
		@else
			Present
		@endif
	</td>
</tr>
