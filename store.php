<?php
	$conn=mysqli_connect("sql306.epizy.com","epiz_26828252","hWkYAGSBXsNTIb","epiz_26828252_bookmybus");
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$cardnumber = $_POST['cardnumber'];
	$date = $_POST['date'];
	$bus = $_POST['bus'];
	$seat = $_POST['seat'];
	$totalfare = 500 * $seat ;
	
	$query="INSERT INTO passanger VALUES(NULL, '$name', '$gender', '$email', '$cardnumber', '$date', '$bus', '$seat', '$totalfare')";
	if(mysqli_query($conn,$query)){
		header('Location: ticket.php?name='. $name. '&totalfare='. $totalfare. '&seat='. $seat. '&bus='. $bus. '&date='. $date    );
	
	}
	
?>
