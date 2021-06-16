<?php
	if(isset($_POST['submit'])){
		$conn=mysqli_connect("sql306.epizy.com","epiz_26828252","hWkYAGSBXsNTIb","epiz_26828252_bookmybus");
		$busnumber = $_POST['number'];
		$busmodel = $_POST['busmodel'];
		$from = $_POST['from'];
		$to = $_POST['to'];
		$fare = $_POST['fare'];
		$time = $_POST['time'];
		
		$query="INSERT INTO bus VALUES($busnumber, '$busmodel', '$from', '$to', '$fare', '$time')";
		if(mysqli_query($conn,$query)){
			echo '<script type = "text/javascript">';
    		echo 'alert("Information Saved")';
    		echo '</script>';
		}
		else{
			echo '<script type = "text/javascript">';
    		echo 'alert("Incorrect Information")';
    		echo '</script>';
		}
	}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel = "stylesheet" href = "s.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Manage Buses</title>
    <style>
    	body{
			background-image:url(image/j.jpg);
			height: 100vh;
			background-size: cover;
			background-position: center;
		}
    </style>
    
   
</head>
<body>
	
	
  	</br></br></br></br></br>
    <div class="container">
    	<div class="row">
    		<div class="col-md-3">
    			<a class="btn btn-info" href="admin.php">Back</a>
    		</div></br></br></br></br>
    		
    		<div class="col-md-12">
				<form action="managebus.php" method="POST">
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="number">Bus Number</label>
				      <input type="number" class="form-control" id="number" name="number" required>
				    </div>
				    <div class="form-group col-md-6">
				      <label for="busmodel">Bus Model</label>
				      <select type="text" class="form-control" id="busmodel" name="busmodel">
				      	<option>Choose...</option>
				      	<option>Scania</option>
				      	<option>Volvo</option>
				      	<option>Hyundai</option>
				      </select>
				    </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="travelfrom">Travel From</label>
				      <select id="travelfrom" class="form-control" name="from" required>
				        <option selected>Choose...</option>
				        <option>Dhaka</option>
				        <option>Dinajpur</option>
				        <option>Rajshahi</option>
				        <option>Chittagong</option>
				        
				      </select>
				    </div>
				    <div class="form-group col-md-6">
				      <label for="travelto">Travel To</label>
				      <select id="travelto" class="form-control" name="to" required>
				        <option selected>Choose...</option>
				        <option>Dhaka</option>
				        <option>Dinajpur</option>
				        <option>Rajshahi</option>
				        <option>Chittagong</option>
				        
				      </select>
				    </div>
				    <div class="form-group col-md-6">
				      <label for="fare">Fare</label>
				      <input class="form-control" id="fare" name="fare" >
				    </div>
				    <div class="form-group col-md-6">
				      <label for="time">Time</label>
				      <input class="form-control" id="time" name="time" type="time">
				    </div>

				  </div>
				  
				  <button type="submit" class="btn btn-primary" name="submit">Save</button>
				</form>
			</div>
		</div>
	</div>
  </body>
