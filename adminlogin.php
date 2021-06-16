<?php

	session_start();
	$db = new mysqli("sql306.epizy.com","epiz_26828252","hWkYAGSBXsNTIb","epiz_26828252_bookmybus");

	if(isset($_POST['login'])){
		$admin = 'admin';
		$name = $_POST['lname'];
		$password = $_POST['lpassword'];
		
		$conn=mysqli_connect("sql306.epizy.com","epiz_26828252","hWkYAGSBXsNTIb","epiz_26828252_bookmybus");
		if($name == $admin && $password == $admin){
			
			header("location:admin.php");
		}
		else {
    		echo '<script type = "text/javascript">';
    		echo 'alert("Incorrect Information. Try again.")';
    		echo '</script>';

    		echo '<script type = "text/javascript">';
    		echo 'window.location.href = "adminlogin.php"';
    		echo '</script>';
  		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

	 
	<style>
		body{
				background-image:url(image/b.jpg);
				height: 100vh;
				background-size: cover;
				background-position: center;
		}

		.login-page{
				width: 360px;
				padding: 10% 0 0;
				margin: auto;
		}

		.form{
				position: relative;
				z-index: 1;
				background: #ADADAD;
				max-width: 360px;
				margin: 0 auto 100px;
				padding: 45px;
				text-align: center;
		}

		.form input{
				font-family: "Roboto", sans-serif;
				outline: 1;
				background: #f2f2f2;
				width: 100%;
				border: 0;
				margin: 0 0 15px;
				padding: 15px;
				box-sizing: border-box;
				font-size: 14px;
		}

		.form button{
				font-family: "Roboto", sans-serif;
				text-transform: uppercase;
				outline: 0;
				background: #4caf50;
				width: 100%;
				border: 0;
				padding: 15px;
				color: #ffffff;
				font-size: 14px;
				cursor: pointer;
		}

		.form button:hover, .form button:active{
				background: #4caf50;
		}

		.form .message{
				margin: 15px 0 0;
				color: #333333;
				font-size: 18px;
		}

		.form .message a{
				color: blue;
				text-decoration: none;
		}

		.form .register-form{
				display: none;
		}
		.header{
  				text-align: center;
 				font-family: 'Monoton', cursive;
 				float: none;
  				font-size: 25px;
  				
  				color: black;

		}
	</style>
</head>
<body>
	
	<div class="login-page">
		<div class="form">
			<h1 class="header">ADMIN LOGIN</h1>

			<form action="adminlogin.php" method="post" class="login-form">
				<input type="text" name="lname" placeholder="name">
				<input type="password" name="lpassword" placeholder="password">
				<button name="login">Log in</button>
			</form>
		</div>
	</div>

	<script src='http://code.jquery.com/jquery-3.3.1.min.js'></script>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstarp.min.js"></script>
	<script src="js/custom.js"></script>

	<script>
		$('.message a').click(function(){
			$('form').animate({height: "toggle",opacity: "toggle"}, "slow");
		});
	</script>

</body>
</html>