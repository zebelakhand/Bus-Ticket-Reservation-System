<?php


$conn=mysqli_connect("sql306.epizy.com","epiz_26828252","hWkYAGSBXsNTIb","epiz_26828252_bookmybus");
$sql = "SELECT * FROM passanger";
$result= mysqli_query($conn,$sql);

?>
<?php

$conn=mysqli_connect("sql306.epizy.com","epiz_26828252","hWkYAGSBXsNTIb","epiz_26828252_bookmybus");
$sql2 = "SELECT * FROM bus";
$result2= mysqli_query($conn,$sql2);


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel = "stylesheet" href = "s.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>BOOKMYBUS</title>
    <style>
    	
    	body{
    		background-color:#dacfcf;
    	}
    	tbody tr:nth-child(odd) {
  			background:#A9A9A9;
		}
    	#g{
    		margin-left:200px;
    	}
    	.i{
    		margin-left:200px;
    	}
    </style>
</head>

<body>
	<div align="right">
    	<a class="btn btn-dark" href="index.php">Log Out</a>
    </div>
	</br>
	<table id="g">
		<h1 class="i"><strong>Bus List</strong></h1>
		<thead>
			<th>Bus Number</th>
			<th>Bus Model</th>
			<th>Travel from</th>
			<th>Travel to</th>
			<th>Fare</th>
			<th>Departure Time</th>
			
		</thead>
		<tbody>
			<?php while($row = mysqli_fetch_assoc($result2)){ ?>
				<tr>
					<td><?php echo $row['busnumber']?></td>
					<td><?php echo $row['model']?></td>
					<td><?php echo $row['from']?></td>
					<td><?php echo $row['to']?></td>
					<td><?php echo $row['fare']?></td>
					<td><?php echo $row['time']?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
  	</br></br></br></br></br>
    <div class="container">
    	<h1><strong>Passenger Info</strong></h1>
    	</br></br>
    	<div class="row">
    		<div class="col-md-12">
				<form action="store.php" method="POST">
				  <div class="form-row">
				    <div class="form-group col-md-6">
				      <label for="name">Passenger Name</label>
				      <input type="text" class="form-control" id="name" name="name" required>
				    </div>
				    <div class="form-group  col-md-6">
				      <label for="gender">Gender</label>
				      <select type="text" class="form-control" id="gender" name="gender">
				      	<option>Male</option>
				      	<option>Female</option>
				      </select>
				    </div>
				  </div>
				  <div class="form-group">
				    <label for="email">Email</label>
				    <input type="text" class="form-control" id="email" name="email">
				  </div>
				  <div class="form-group">
				    <label for="cardnumber">Credit Card Number</label>
				    <input type="cardnumber" class="form-control" id="cardnumber" name="cardnumber">
				  </div> 
				  <div class="form-group">
				    	<label for="date">Date of Departure</label>
     					<input type="date" name="date"  class="form-control" name="date" required>
     			  </div>
     			  <div class="form-group">
				      <label for="busnumber">Bus Number</label>
				      <input class="form-control" id="busnumber" name="bus">
				    </div>
				    <div class="form-group">
				      <label for="numberofseats">Number of Seats</label>
				      <input class="form-control" id="numberofseats" name="seat" required >
				    </div>
				  </div>
				  
				  <button type="submit" class="btn btn-primary" name="confirm" >Confirm Booking</button>
				</form>
			</div>
		</div>
	</div>
  </body>
