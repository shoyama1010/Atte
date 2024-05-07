@extends('layouts.app')

@section('content')
<h1>勤怠履歴</h1>

<table class="table table-striped">
	<thead>
		<tr>
			<th>日付</th>
			<th>勤務開始</th>
			<th>勤務終了</th>
			<th>休憩時間</th>
			<th>勤務時間</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($attendances as $attendance)
		<tr>
			<td>{{ $attendance->created_at->format('Y-m-d') }}</td>
			<td>{{ $attendance->punch_in_at }}</td>
			<td>{{ $attendance->punch_out_at }}</td>
			<td>{{ $attendance->break_time }}</td>
			<td>{{ $attendance->work_time }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection