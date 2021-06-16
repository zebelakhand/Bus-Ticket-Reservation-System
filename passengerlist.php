<?php

$conn=mysqli_connect("sql306.epizy.com","epiz_26828252","hWkYAGSBXsNTIb","epiz_26828252_bookmybus");
$sql = "SELECT * FROM passanger";
$result= mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel = "stylesheet" href = "s.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>BOOKMYBUS</title>
    <script>
    	function accept(){
    		alert("Payment Accepted");
		}
    </script>
</head>
<body>
  	</br></br></br></br></br>
    <div class="container">
    	<div class="row">
    		<div class="col-md-3">
    			<a class="btn btn-info" href="admin.php">Back</a>
    		</div></br></br></br></br>
    		
    		<div class="col-md-12">

				<table>
					<h1>Passenger list</h1>
					<thead>
						<th>Name</th>
			    		<th>Gender</th>
			    		<th>Email</th>
			    		<th>Credit Card Number</th>
			    		<th>Date of Departure</th>
			    		<th>Bus Number</th>
			    		<th>Number of Seats</th>
			    		<th>Total Fare</th>
			    		<th>Accept Payment</th>

					</thead>
					<tbody>
					<?php while($row = mysqli_fetch_assoc($result)){ ?>
						<tr>
							<td><?php echo $row['name']?></td>
							<td><?php echo $row['gender']?></td>
							<td><?php echo $row['email']?></td>
							<td><?php echo $row['cardnumber']?></td>
							<td><?php echo $row['date']?></td>
							<td><?php echo $row['bus']?></td>
							<td><?php echo $row['seat']?></td>
							<td><?php echo $row['totalfare']?></td>
					
							<td>
                                <button id="ikk" class="btn btn-warning" style="background: green; color: #fff;" type="button" data-uid="UZqTjJnRVdGQjQ" onclick="accept()">Accept 
    							</button>
							</td>

						</tr>
					<?php } ?>
					
					</tbody>
				</table>
			</div>
		</div>
	</div>
  </body>
