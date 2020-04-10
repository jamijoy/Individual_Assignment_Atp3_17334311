<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
	<h1>Login Page</h1>
	<h3>{{session('msg')}}</h3>
	
	<form method="post" >
		@csrf
		Email: <input type="email" name="email" > <br>
		Password: <input type="password" name="pass" ><br>
		<input type="submit" name="submit" value="Submit" >
	</form>
	
	<a href="/system/supportstaff/add">Regsiter Manager<a>
	
</body>
</html>