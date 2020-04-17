<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<style>
	.loginDiv{
		width:50%;
		padding:30px;
		border:2px black solid;
		border-radius:10px;
		background-color:transparent;
	}
</style>
<body>
	<center>
	<div class="loginDiv" style="margin-top:100px;">
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
	
	</div>
	</center>
</body>
</html>