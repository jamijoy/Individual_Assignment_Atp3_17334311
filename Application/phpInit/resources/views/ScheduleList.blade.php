<!DOCTYPE html>
<html>
<head>
	<title>Bus Schedule Page</title>
</head>
<body>	

	<h1>Bus Schedules</h1>
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
		@foreach($schedules as $arr)
		<tr>
			<td>{{$arr->id}}</td>
			<td>{{$arr->operator}}</td>
			<td>{{$arr->manager}}</td>
			<td>{{$arr->name}}</td>
			<td>{{$arr->location}}</td>
			<td>{{$arr->route}}</td>
			<td>{{$arr->fare}}</td>
			<td>{{$arr->departure}}</td>
			<td>{{$arr->arrival}}</td>
			<td>
				<a href="/system/busesshedule/{{$arr->id}}/edit">Edit</a> || 
				<a href="/system/busesshedule/{{$arr->id}}/delete">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
	
	

</body>
</html>