<!DOCTYPE html>
<html>
<head>
	<title>Report Page</title>
	<link href="{{ asset('css/design.css') }}" rel="stylesheet">
</head>
<script>
	function selectFunc()
	{
		var selected = document.getElementById("mon").value;
		var link = "/system/bussummary/Search/"+selected;
		window.location.replace(link);
	}
</script>
<body>	

	<div class="formDiv">
	<h1>Bus Summary/Details</h1>
	<a href="{{route('home.index')}}">back to home</a> |
	<a href="/logout">Logout</a> 
	<br/>
	</div>
	<br/>
	Select a Month 
	<select id="mon" onchange="selectFunc()">
		<option value="Select" hidden>Select A Month</option>
		<option value="January">January</option>
		<option value="February">February</option>
		<option value="March">March</option>
		<option value="April">April</option>
		<option value="May">May</option>
		<option value="June">June</option>
		<option value="July">July</option>
		<option value="August">August</option>
		<option value="September">September</option>
		<option value="October">October</option>
		<option value="November">November</option>
		<option value="December">December</option>
	</select>
	<br/><br/><br/>
	<table border="1">
		<tr>
			<th>NAME</th>
			<th>ROUTE</th>
			<th>OPERATOR</th>
			<th>TICKET PRICE</th>
			<th>BOOKED TICKET</th>
		</tr>
		@foreach($schedules as $arr)
		@foreach($data as $arry)
		@if($arry->busid == $arr->id)
		<tr>
			<td>{{$arr->manager}}</td>
			<td>{{$arr->route}}</td>
			<td>{{$arr->operator}}</td>
			<td>{{$arr->fare}}</td>
			<td>
			{{$arry->nums}}			
			</td>
		</tr>
		@endif
		@endforeach
		@endforeach
	</table>

</body>
</html>