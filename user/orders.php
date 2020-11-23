<!DOCTYPE html>
<html lang="en" class="theme-light">

<head>
	<title>User</title>
	<link rel="stylesheet" href="../css/styles.css" type="text/css">

	<!-- external stylesheets -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  
  <div class='heading'>
	<h1>Items ordered</h1>
</div>


<table class="table table-bordered table-hover">
	<form action='./requests.php' method='post'>
	<tr>
		<th>User Id</th>
		<th>Order Id</th>
		<th>Order Details</th>		
	</tr>

	<tbody id="myTable">

	<?php
	include '../config/db_connection.php';

	$conn = OpenCon();
	echo $conn->error;

    $sql = "SELECT Orders.UserId,Orders.OrderId,Orders.OrderDetails FROM Orders INNER JOIN Users WHERE Orders.UserId=1";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
	  // output data of each row
	  $count = 0;
	  $count++;

	  while($row = $result->fetch_assoc()) 
	  {
		echo "<tr>";
	    echo "<td>" . $row['UserId'] . "</td>";
	    echo "<td>" . $row['OrderId'] . "</td>";
	    echo "<td>" . $row['OrderDetails'] . "</td>";
		// echo "<td><textarea style='width:200px; height:40px'></textarea></td>";
	  }
	}
	else
	{
	  echo "Database Error";
	}
?>
	</tbody>
</table>

</form>

</body>
</html>
