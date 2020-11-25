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
<!-- nav_bar begin -->  
<div id="nav_place"></div>
<script>
$(function(){
  $("#nav_place").load("Nav_Bar.html");
});
</script>  
<br><br><br>
<!-- nav_bar end -->     

  <div class='heading'>
	<h1>Items ordered</h1>
</div>


<table class="table table-bordered table-hover">
	<form action='./requests.php' method='post'>
	<tr>
		<th>User Id</th>
		<th>Order Id</th>
		<th>Order Details</th>		
		<th>Order Status</th>
		<th>Admin Remarks</th>
	</tr>

	<tbody id="myTable">

	<?php
	include '../config/db_connection.php';

	$conn = OpenCon();
	echo $conn->error;

    $sql = "SELECT Orders.UserId,Orders.OrderId,Orders.OrderDetails,Orders.Status,Orders.Admin_Remarks FROM Orders WHERE Orders.UserId=1";
	$result = $conn->query($sql);

	$count = 0;
	if ($result->num_rows > 0) 
	{
	  // output data of each row
	  $count++;

	  while($row = $result->fetch_assoc()) 
	  {
		echo "<tr>";
	    echo "<td>" . $row['UserId'] . "</td>";
	    echo "<td>" . $row['OrderId'] . "</td>";
	    echo "<td>" . $row['OrderDetails'] . "</td>";
	    echo "<td>" . $row['Status'] . "</td>";
	    echo "<td>" . $row['Admin_Remarks'] . "</td>";
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
