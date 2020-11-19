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

<!--   <div class="container">
    <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
  </div> -->
  
  <div class='heading'>
	<h1>Requests</h1>
</div>

<input class="form-control" id="myInput" type="text" placeholder="Search.." style="margin-left: 20px;"><br>

<table class="table table-bordered table-hover">
	<form action='./modify.php' method='post'>
	<tr>
		<th>Order Id</th>
		<th>User Id</th>
		<th>Order Details</th>
        <th>Remarks</th>
        <th>Approve</th>
        <th>Reject</th>
	</tr>

	<tbody id="myTable">

	<?php
	include '../config/db_connection.php';

	$conn = OpenCon();
	echo $conn->error;

    $sql = "SELECT OrderId,UserId, OrderDetails, Remarks FROM Orders";
    echo $result;
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
	  // output data of each row
	  $count = 0;
	  while($row = $result->fetch_assoc()) 
	  {
	  	$count++;
	    echo "<tr>";
	    echo "<td>" . $row['OrderId'] . "</td>";
	    echo "<td>" . $row['UserId'] . "</td>";
	    echo "<td>" . $row['OrderDetails'] . "</td>";
        echo "<td>" . $row['Remarks'] . "</td>";
        echo "<td><button>Approve</button></td>"; 
        echo "<td><button>Reject</button></td>"; 
	  }
	}
	else
	{
	  echo "Database Error";
	}
	?>
	</tbody>
</table>

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

