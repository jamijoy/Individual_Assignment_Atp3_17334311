<!DOCTYPE html>
<html>
<head>
	<title>About Bus Ticket Reservation System</title>
	<link href="{{ asset('css/design.css') }}" rel="stylesheet">
</head>
<style>
	.letter{
		width:95%;
		text-align:justify;
		font-family:Tahoma;
	}
</style>
<body>	
	<div class="formDiv">
	<h1>Bus Ticket Reservation System</h1>&nbsp
	<a href="/">Bus Ticket Reservation System</a> || <a href="/system/supportstaff/login">Log in</a> || <a href="/system/register">Account Registration</a> || 
	</div><br/>
	<center>
	<form method="post">
		{{csrf_field()}}
		<table style="width:50%;margin-top:100px;">
			<tr>
				<td>
					Online Bus Ticket Reservation System
					@<a href="#">Jami Joy</a>
				</td>
				<td>
					<p class="letter">Online Bus Ticket Reservation System is a portal for both Manager And The Admin of the system. Several functionalities like Adding a new Bus Schedule of different Bus Operators with assigned manager details and Updating and Deleting the list is possible from this system. As well as manager can register himself with the system with own account modification functionalities and more. A system reporting functionality has been introduced to maintain monthly statements.</p>
				</td>
			</tr>
		</table>
	</form>
	</center>
	
	@foreach($errors->all() as $err)
		{{$err}} <br>
	@endforeach

</body>
</html>