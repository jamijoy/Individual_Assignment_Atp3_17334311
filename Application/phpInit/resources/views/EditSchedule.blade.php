<!DOCTYPE html>
<html>
<head>
	<title>Edit Schedule page</title>
	<link href="{{ asset('css/design.css') }}" rel="stylesheet">
</head>
<body>	

	<h1>Edit Schedule</h1>&nbsp
	<a href="{{route('home.index')}}">Back To Home</a> |
	<a href="{{route('BusesSchedule.index')}}">Back To List</a> |
	<a href="/logout">Logout</a> <br>

	<form method="post">
		{{csrf_field()}}
		<table>
			<tr>
				<td></td>
				<td><input type="hidden" readonly name="id" value="{{$data->id}}">
				@foreach($errors->all() as $err)
					{{$err}} <br>
				@endforeach
				</td>
			</tr>
			<tr>
				<td>NAME</td>
				<td><input type="text" name="name" value="{{$data->name}}"></td>
			</tr>
			<tr>
				<td>OPERATOR NAME</td>
				<td><input type="text" name="operator" value="{{$data->operator}}"></td>
			</tr>
			<tr>
				<td>MANAGER</td>
				<td><input type="text" name="manager" value="{{$data->manager}}"></td>
			</tr>
			<tr>
				<td>LOCATION</td>
				<td><input type="text" name="location" value="{{$data->location}}"></td>
			</tr>
			<tr>
				<td>ROUTE</td>
				<td><input type="text" name="route" value="{{$data->route}}"></td>
			</tr>
			<tr>
				<td>FARE</td>
				<td><input type="text" name="fare" value="{{$data->fare}}"></td>
			</tr>
			<tr>
				<td>DEPARTURE</td>
				<td><input type="text" name="departure" value="{{$data->departure}}"></td>
			</tr>
			<tr>
				<td>ARRIVAL</td>
				<td><input type="text" name="arrival" value="{{$data->arrival}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Save"></td>
			</tr>
		</table>
	</form>
</body>
</html>