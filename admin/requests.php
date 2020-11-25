<!DOCTYPE html>
<html lang="en" class="theme-light">

<head>
	<title>Request</title>
	<link rel="stylesheet" href="../css/styles.css" type="text/css">

	<!-- external stylesheets -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

  
  <div class='heading'>
	<h1>Requests</h1>
</div>

<input class="form-control" id="myInput" type="text" placeholder="Search.." style="margin-left: 20px;"><br>

<table class="table table-bordered table-hover">
	<form action='./requests.php' method='post'>
	<tr>
		<th>Order Id</th>
		<th>User Id</th>
		<th>User Email</th>
		<th>Order Details</th>
        <th>User Remarks</th>
		<th>Admin Remarks</th>
        <th>Approve</th>
        <th>Reject</th>
        <th>Order Status</th>
	</tr>

	<tbody id="myTable">

	<?php
	include '../config/db_connection.php';

	$conn = OpenCon();
	echo $conn->error;

    $sql = "SELECT OrderId, UserId, OrderDetails, Status, Remarks FROM Orders";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
	  $count = 0;
	  while($row = $result->fetch_assoc()) 
	  {
		$id = $row['UserId'];
		$sql1 = "SELECT email from Users where id='$id'";
		$result1 = $conn->query($sql1);
	  	$count++;

	  	$order =  $row['OrderId'];
		
		echo "<tr>";
	    echo "<td>" . $row['OrderId'] . "</td>";
		echo "<td>" . $row['UserId'] . "</td>";
	    echo "<td>" . $result1->fetch_assoc()['email'] . "</td>";
	    echo "<td>" . $row['OrderDetails'] . "</td>";
		echo "<td>" . $row['Remarks'] . "</td>";

		echo "<td><input type='text' style='margin:0; background-color: white;' placeholder='thank you for ordering'></td>";
		echo "<td><a href='request_manage.php?var=1&order=$order'>Approve</a></td>";
		echo "<td><a href='request_manage.php?var=0&order=$order'>Reject</a></td>";
		echo "<td>" . $row['Status'] . "</td>";
		echo "</tr>";
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

<form action="http://localhost:8080/db_structure.php?server=1&db=inventory" target="_blank" method='post'>
<div>
	<button type="submit" class="button" name="submit">Modify Database instead</button>
</div>
</form>

<script src="../js/script.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>
</html>

