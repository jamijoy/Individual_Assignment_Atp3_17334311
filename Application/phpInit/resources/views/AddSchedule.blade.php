<!DOCTYPE html>
<html>
<head>
	<title>Add Schedule page</title>
	<link href="{{ asset('css/design.css') }}" rel="stylesheet">
</head>
<body>	

	<h1>Create New Bus Schedule</h1>&nbsp
	<a href="{{route('home.index')}}">Back To Home</a> |
	<a href="{{route('BusesSchedule.index')}}">Back To List</a> |
	<a href="/logout">Logout</a> <br>

	<form method="post">
		{{csrf_field()}}
		<table>
			<tr>
				<td></td>
				<td>
				@foreach($errors->all() as $err)
					{{$err}} <br>
				@endforeach
				</td>
			</tr>
			<tr>
				<td>NAME</td>
				<td><input type="text" name="name" Placeholder="Enter Name Here"></td>
			</tr>
			<tr>
				<td>OPERATOR NAME</td>
				<td><input type="text" name="operator"  Placeholder="Enter Operator Here"></td>
			</tr>
			<tr>
				<td>MANAGER</td>
				<td><input type="text" name="manager"  Placeholder="Enter Manager Name"></td>
			</tr>
			<tr>
				<td>LOCATION</td>
				<td><input type="text" name="location"  Placeholder="Enter Location Here"></td>
			</tr>
			<tr>
				<td>ROUTE</td>
				<td><input type="text" name="route" Placeholder="Example: Dhaka-Rajshahi"></td>
			</tr>
			<tr>
				<td>FARE</td>
				<td><input type="text" name="fare"  Placeholder="Enter Fare Amount Here"></td>
			</tr>
			<tr>
				<td>DEPARTURE</td>
				<td><input type="text" name="departure"  Placeholder="Enter Time of Deparature"></td>
			</tr>
			<tr>
				<td>ARRIVAL</td>
				<td><input type="text" name="arrival" Placeholder="Enter Time of Deparature"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Add Schedule"></td>
			</tr>
		</table>
	</form>
</body>
</html>