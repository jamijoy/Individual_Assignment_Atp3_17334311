<!DOCTYPE html>
<html>
<head>
	<title>Bus Schedule Page</title>
</head>

<script>
	function delFunc()
	{
		if (confirm("Delete This Bus Schedule ? \nSure Sir ?\n")) {
			
			// header('location:/home');
			// window.location.replace("localhost:3000/home");
			// window.location.href = "/home";
			window.location = "{url('/home')}";
			
		  } else {
			window.location.replace("localhost:3000/home");
		  }
	}
	
	function del2Func()
	{
		
		if (confirm("Delete This Bus Schedule ? \nSure Sir ?\n")) {
			
			window.location.replace("/home");
			
		  } else {
			window.location.replace("/login");
		  }
		
	}
</script>

<body>	

	<h1>Bus Schedules</h1>
	<a href="{{route('BusesSchedule.add')}}">Add A New Schedule</a> ||
	<a href="{{route('home.index')}}">back</a> ||
	<a href="/logout">Logout</a> 
    <br/><br/>
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
				<a href="/system/busesshedule/{{$arr->id}}/Delete">Delete</a> ||
				<!--<a  href="">Delete button</a>-->
				<button onclick="del2Func()"> do</button>
			</td>
		</tr>
		@endforeach
	</table>
	
	<!--<div id="delDiv">
		<p>Are you sure want to delete this ?
		</p>
		
	</div>-->

</body>
</html>