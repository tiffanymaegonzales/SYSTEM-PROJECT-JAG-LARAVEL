@extends('layouts.master')
@section('Title', 'LOGIN')
@section('section')

		<div class="loginbody">

			<form method="POST" action="/login">
				@csrf

				<div class="loginInput">

					<label for="">Username</label>
					<input placeholder="username" type="text" name="user" required />
				</div>
				<div class="loginInput">
					<label for="">Password</label>
					<input placeholder="password" type="Password" name="pass" required />
				</div>
				<div class=" loginbuttoncontainer">
					<button type="submit"  name="log" > Log In</button> 

				</div>

				<div class="regislog">
					<a href="http://localhost:8000/register"> Create an account</a>
				</div>

			</div>
</form>

<br><br><br>
<center>

<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "dpinventory";


	$connect = mysqli_connect($servername,$username,$password,$dbname);

	


		 if(isset($_POST['log'])){
			
			$user = $_POST['user'];
			$pass = $_POST['pass'];
			
		
			$query = "SELECT * FROM users WHERE username='$user' AND password='$pass' ";
			
			
			$result = mysqli_query($connect,$query);
			$count = mysqli_num_rows($result);

			if ($count>0) {
				
			}
			else{
				echo "<strong>Username and Password is Incorrect</strong>";
			}
	}

		?>

	</center>			


@endsection

