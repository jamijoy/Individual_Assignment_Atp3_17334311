<!DOCTYPE html>
<html>
<head>
	<title>Bus Schedule Page</title>
</head>
<body>	

	<h1>Bus Schedules</h1>&nbsp
	<a href="{{route('home.index')}}">back</a> |
	<a href="/logout">Logout</a> 

	<table border="1">
		<tr>
			<th>ID</th>
			<th>OPERATOR NAME</th>
			<th>MANAGER</th>
			<th>NAME</th>
			<th>LOCATION</th>
			<th>ROUTE</th>
			<th>FARE</th>
			<th>DEPARTURE</th>
			<th>ARRIVAL</th>
		</tr>
		
		@foreach($schedules as $schedule)
		<tr>
			<td>{{$schedule['id']}}</td>
			<td>{{$schedule['operator']}}</td>
			<td>{{$schedule['manager']}}</td>
			<td>{{$schedule['name']}}</td>
			<td>{{$schedule['location']}}</td>
			<td>{{$schedule['route']}}</td>
			<td>{{$schedule['fare']}}</td>
			<td>{{$schedule['departure']}}</td>
			<td>{{$schedule['arrival']}}</td>
			<td>
				<a href="{{route('BusesSchedule.edit', $user['userId'])}}">Edit</a> || 
				<a href="{{route('BusesSchedule.delete', $user['userId'])}}">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>