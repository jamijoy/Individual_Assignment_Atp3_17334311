<!DOCTYPE html>
<html>
<head>
	<title>Report Page</title>
</head>
<body>	

	<h1>Bus Summary/Details</h1>
	<a href="{{route('home.index')}}">back to home</a> |
	<a href="/logout">Logout</a> 

	<table border="1">
		<tr>
			<th>NAME</th>
			<th>ROUTE</th>
			<th>OPERATOR</th>
			<th>AMOUNT</th>
			<th>BOOKED TICKET</th>
		</tr>
		@foreach($schedules as $arr)
		<tr>
			<td>{{$arr->manager}}</td>
			<td>{{$arr->route}}</td>
			<td>{{$arr->operator}}</td>
			<td>{{$arr->fare}}</td>
			<td></td>
			<td>
				<a href="/system/busesshedule/{{$arr->id}}/Delete">Delete</a> ||<a onclick="del2Func()" href="">Delete button</a>
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>