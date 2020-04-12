<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Home Page</h1>
	<h3>{{session('mail')}}</h3>
	
	<a href="/system/profile/{{session('id')}}/profile">Profile<a> || 
	<a href="/system/BusSchedule">Bus Schedule<a> || 
	<a href="/system/bussummary">Report / Summary<a> || 
	<a href="/system/register">Regsiter Manager<a> || 
	<a href="/logout">Logout<a>
	
</body>
</html>