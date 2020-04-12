<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link href="{{ asset('css/design.css') }}" rel="stylesheet">
</head>
<body>
	<h1>Login Page</h1>
	<h3>{{session('msg')}}</h3>
	
	<form method="post" >
		@csrf
		<table>
			<tr>
				<td>
					Email: 
				</td>
				<td>
					<input type="email" name="email" >
				</td>
			</tr>
			<tr>
				<td>
					Password: 
				</td>
				<td>
					<input type="password" name="pass" >
				</td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					
					<input type="submit" name="submit" value="Login" >
				</td>
			</tr>
		</table>
	</form>
	
	<a href="/system/register">Regsiter Manager<a>
	
</body>
</html>