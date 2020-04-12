<!DOCTYPE html>
<html>
<head>
	<title>Report Page</title>
</head>
<body>	

	<h1>Bus Summary/Details</h1>
	<a href="{{route('home.index')}}">back to home</a> |
	<a href="/logout">Logout</a> 
	<br/><br/>
	Select a Month 
	&nbsp <a href="{{route('Summary.Search','January')}}">January</a>
	&nbsp <a href="{{route('Summary.Search','February')}}">February</a>
	&nbsp <a href="{{route('Summary.Search','March')}}">March</a>
	&nbsp <a href="{{route('Summary.Search','April')}}">April</a>
	&nbsp <a href="{{route('Summary.Search','May')}}">May</a>
	&nbsp <a href="{{route('Summary.Search','June')}}">June</a>
	&nbsp <a href="{{route('Summary.Search','July')}}">July</a>
	&nbsp <a href="{{route('Summary.Search','August')}}">August</a>
	&nbsp <a href="{{route('Summary.Search','September')}}">September</a>
	&nbsp <a href="{{route('Summary.Search','October')}}">October</a>
	&nbsp <a href="{{route('Summary.Search','November')}}">November</a>
	&nbsp <a href="{{route('Summary.Search','December')}}">December</a>
	<br/><br/>
	<table border="1">
		<tr>
			<th>NAME</th>
			<th>ROUTE</th>
			<th>OPERATOR</th>
			<th>AMOUNT</th>
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