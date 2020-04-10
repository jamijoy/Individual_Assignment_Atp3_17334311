<!DOCTYPE html>
<html>
<head>
	<title>Register page</title>
</head>
<body>	

	<h1>Register Manager</h1>&nbsp
	<a href="/login">Back to login</a> <br>

	<form method="post">
		{{csrf_field()}}
		<table>
			<tr>
				<td>Name</td>
				<td><input type="text" name="name" value="{{old('name')}}"></td>
			</tr>

			<tr>
				<td>Email</td>
				<td><input type="email" name="email" value="{{old('email')}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="pass" value="{{old('pass')}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Register Manager"></td>
			</tr>
		</table>
	</form>
	
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach

</body>
</html>