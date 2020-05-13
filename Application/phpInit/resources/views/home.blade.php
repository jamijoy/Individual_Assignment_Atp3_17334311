<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link href="{{ asset('css/design.css') }}" rel="stylesheet">
	<script src="{{ asset('js/jquery-3.4.1.js') }}"></script>
	<script src="{{ asset('js/myScript.js') }}"></script>
	
</head>
<style>
	#bookingForm{
		display:none;
	}
</style>
<body>
	
	<center>
	<div class="formDiv"  style="margin-top:100px;">
	
	<h1>Home Page</h1>
	<h3>{{session('mail')}}</h3>
	<button onclick="barOpen()" id="navBtn" style="border:1px dashed black;" class="btn"> &#9776; Search </button> 
	<a href="/system/profile/{{session('id')}}/profile">Profile<a> || 
	<a href="/system/BusSchedule">Bus Schedule<a> || 
	<a href="/system/bussummary">Report / Summary<a> || 
	<a href="/system/register">Regsiter Manager<a> || 
	<a href="/logout">Logout<a>
	</div>
	</center>
	
	<div class="sidebar shadow animate-left" id="sideBar">
		
			<input class="searcherBox" id="searcherBox" type="text" placeholder="Enter keyword to search..." onkeyup="srcFunc('{{csrf_token()}}')"> <button style="font-weight: bold; float:right;" onclick="barClose()" class="btn"> &#10060 </button>
		<br/>
			<p class="baritem">Search Results:<hr width="95%"></p>
			<div id="searchList"></div>
			
	</div>
	
	<div style="text-align:right;float:left;margin-top:100px;margin-left:500px;">
		Select a Coach : &nbsp <br/><br/>
		Number of Tickets : &nbsp <br/><br/>
		Fare : &nbsp <br/>
		Month : &nbsp <br/>
	</div>
	<div style="text-align:left;float:left;margin-top:100px;">
		
		<form method="post">
		{{csrf_field()}}
		<select name="busid">
			@foreach($BusData as $ids)
				<option value="{{$ids->id}}">{{$ids->name}}({{$ids->id}})</option>
			@endforeach
		</select><br/>
		
		<input type="text" name="ticketNo"><br/>
		
		<input type="text" name="fare"><br/>
		
		<select name="mon">
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
		</select><br/><br/>
		@foreach($errors->all() as $err)
					{{$err}} <br>
				@endforeach
		
		<input type="submit" value="Confirm Booking">
		</form>
	</div>
	
</body>
</html>