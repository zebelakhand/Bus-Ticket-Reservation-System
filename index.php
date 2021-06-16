<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BOOKMYBUS</title>
   
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Black+Ops+One&display=swap" rel="stylesheet">
    <style>
    	body{
		  background-image:url(image/d.jpg);
		  height: 100vh;
		  background-size: cover;
		  background-position: center;
		}
    	.box{
		  width: 450px;
		  height: 400px;
		  padding:40px;
		  position:absolute;
		  top: 50%;
		  left: 50%;
		  transform: translate(-50%, -50%);
		  background: white;
		  text-allign: center;
		  background: rgba(0, 0, 0, 0.65);
		}
		.box h1{
		  font-family: 'Black Ops One', cursive;
		  font-size: 30px;
		  opacity: 1;
		  color: #8fdff1;
		  text-transform: uppercase;
		  text-align: center;
		}
		.a{
		  opacity: 1;
		  height: 45px;
		  width: 250px;
		  border:0;
		  font-weight: 800;
		  font-family: 'Black Ops One', cursive;
		  font-size: 15px;
	      text-transform: uppercase;
		  background: none;
		  display: block;
		  margin: 40px auto;
		  text-align: center;
		  border: 2px solid #cce6ff;
		  outline: none;
		  color:white;
		  border-radius: 24px;
		  transition: 0.25s;
		  cursor: pointer;
		  padding-top:20px;
				
		}
		.a:hover{
		  color: white;
		  background:#4d88ff;
		  width: 180px;

		}
    </style>
  </head>
  <body>
        <form class = "box">

        <h1>WELCOME TO BOOKMYBUS</h1>
       	<div>
    			<a class="a" href="login.php">USER</a>
    	</div>
    	<div>
    			<a class="a" href="adminlogin.php">ADMIN</a>
    	</div>
      
    </form>


  </body>
</html>
