<!DOCTYPE html>
<html lang="en">
<head>
	<title>BOOKMYBUS</title>
	<meta charset="utf-8" />
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link rel = "stylesheet" href = "s.css">
	
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
	bootstrap.min.css">
	
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
	bootstrap-theme.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		function submit(){
			alert("HURRAH!! TICKET CONFIRMED");
		}

	</script>





	<style>
	body{
				background-image:url(image/m.jpg);
				height: 100vh;
				background-size: cover;
				background-position: center;
	}
	html , body {
	   height: 100%;
	}
	.container {
	   background-image:url("source/home/css/image.jpg");
	   position: relative;
	   width:100%;
	   height:100%;
	   background-position: center;
	   background-repeat: no-repeat;
	   background-size: cover;
	   padding-top:140px;
	}
	.loginForm {
	border:2px solid green;
	border-radius:10px;
	margin-top:20px;
	background-color:#e1e1e1;
	}
	form {
	padding-top:10px;
	padding-bottom:20px;
	}
	.morepadd {
	   padding-top:90px;
	}
	.btnpadd {
	   margin-left:150px;
	}
	.center {
	   text-align:center;
	}
	.a{
		margin-left:200px;
	}
	.z{
		margin-left:120px;
	}
	
	</style>
</head>
<body>
	<div class="container morepadd">
	  <div class="row">
	  	<div class="a">
    		<a class="btn btn-info" href="form.php">Back</a>
    	</div></br></br>
	    <div class="col-md-6 col-md-offset-3 loginForm">
	    <h1 class="center"><strong>Confirm Ticket Details</strong></h1>
	      <br>
	      <ul class="list-group">
	      
	      <li class="list-group-item list-group-item-info"><strong>Passenger Name : <?php echo $_GET['name']; ?></strong></li>
		  <li class="list-group-item list-group-item-info"><strong>Date of Departure : <?php echo $_GET['date']; ?></strong></li>
	      <li class="list-group-item list-group-item-info"><strong>Bus Number : <?php echo $_GET['bus']; ?></strong></li>
	      <li class="list-group-item list-group-item-info"><strong>Number Of Seats : <?php echo $_GET['seat']; ?></strong></li>
	      <li class="list-group-item list-group-item-info"><strong>Total Cost : <?php echo $_GET['totalfare']; ?></strong></li>
	      
	      </ul>

	      <form method="post">
	      	<div class="z" onclick="submit()">
	        	<input type="submit" name="confirm" class="btn btn-success btn-lg btnpadd" value="Confirm Ticket"  />
	        </div>
	      </form>
	    
	    </div>
	  </div>
	</div>

	
</body>

