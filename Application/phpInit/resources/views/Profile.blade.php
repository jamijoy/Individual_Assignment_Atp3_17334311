<!DOCTYPE html>
<html>
<head>
	<title>Pofile Page</title>
	<link href="{{ asset('css/design.css') }}" rel="stylesheet">
</head>
<body>	
	<h1>Bus Schedules</h1>
	<a href="{{route('home.index')}}">back</a> |
	<a href="/logout">Logout</a> 

	<table border="1">
		<tr>
			<th>NAME</th>
			<th>EMAIL</th>
			<th>PASSWORD</th>
		</tr>
		
		<tr>
			<td>{{$data->name}}</td>
			<td>{{$data->email}}</td>
			<td>{{$data->password}}</td>
			<td>
				<a href="/system/profile/{{$data->userid}}/edit">Edit Profile</a>
			</td>
		</tr>
		
	</table>

</body>
</html>