<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../css/Styles.css" type="text/css">
	<link rel="stylesheet" href="../css/user_style.css" type="text/css">

	<!-- external stylesheets -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!-- nav_bar begin -->  
<div id="nav_place"></div>
<script>
$(function(){
  $("#nav_place").load("Nav_Bar.html");
});
</script>  
<!-- nav_bar end -->   
<br><br><br>
<h1 style="text-align:center">User Profile</h1>
<div class="card">  
<?php
	include '../config/db_connection.php';

	$conn = OpenCon();
	echo $conn->error;

	$sql = "SELECT id, firstname, lastname, email, reg_date, contact, Address FROM Users WHERE id=1";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
	  // output data of each row
	  while($row = $result->fetch_assoc()) 
	  {
	  	echo "<br>";
	    echo "<h1>" . $row['firstname'] ." ".$row['lastname'] . "</h1>";
	    echo "<br>";
	    echo "<p>Email : " . "<b>" . $row['email'] . "</b></p>";
	    echo "<p>UserId : " . "<b>" . $row['id'] . "</b>" . "<p>";
	    echo "<p>Contact : " . "<b>" . $row['contact'] . "</b></h3>";
		echo "<p>Reg. Date : " . "<b>" . $row['reg_date'] . "</b>" . "</p>"; 
		echo "<p>Address : " . "<b>" . $row['Address'] . "</b>" . "</p>"; 
		echo "<br>";
	  }
	}
	else
	{
	  echo "Database Error";
	}
?>
</div>
</body>
</html>

