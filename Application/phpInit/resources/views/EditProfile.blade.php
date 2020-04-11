<!DOCTYPE html>
<html>
<head>
	<title>Edit Profile page</title>
</head>
<body>	

	<h1>Update Profile</h1>&nbsp
	<a href="{{route('home.index')}}">Back To Home</a> |
	<a href="{{route('Profile.index',$data->userid)}}">Back To Profile</a> |
	<a href="/logout">Logout</a> <br>

	<form method="post">
		{{csrf_field()}}
		<table>
			<tr>
				<td></td>
				<td><input type="hidden" readonly name="id" value="{{$data->userid}}">
					<input type="hidden" readonly name="type" value="{{$data->type}}">
				@foreach($errors->all() as $err)
					{{$err}} <br>
				@endforeach
				</td>
			</tr>
			<tr>
				<td>Username</td>
				<td><input type="text" name="name" value="{{$data->name}}"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="{{$data->email}}"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password" value="{{$data->password}}"></td>
			</tr>
			<tr>
				<td>Confirm Password</td>
				<td><input type="password" name="ConfirmPassword" value="{{$data->password}}"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Update Profile"></td>
			</tr>
		</table>
	</form>
</body>
</html>