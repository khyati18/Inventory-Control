<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html>
<head>
    <title>Inventory List</title>
    
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="../css/styles.css" type="text/css">

	<!-- external stylesheets -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

<!-- <div class='container'>
	<label id='switch' class='switch'>
  		<input type='checkbox' onchange='toggleTheme()' id='slider'>
  		<span class='slider round'></span>
	</label>
</div> -->

<div class='heading'>
	<h1>INVENTORY</h1>
</div>

<input class="form-control" id="myInput" type="text" placeholder="Search.." style="margin-left: 20px;"><br>

<table class="table table-bordered table-hover">
	<form action='../user/cart.php' method='post'>
	<tr>
		<th>ID</th>
		<th>Chemical Name</th>
		<th>Company Name</th>
		<th>Price (per gm)</th>
		<th>Quantity (in gm)</th>
		<th>Select</th>
	</tr>

	<tbody id="myTable">

	<?php
	include '../config/db_connection.php';

	$conn = OpenCon();
	echo $conn->error;

	$sql = "SELECT id, name, company, quantity, price FROM Items";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) 
	{
	  // output data of each row
	  $count = 0;
	  while($row = $result->fetch_assoc()) 
	  {
	  	$count++;
	    echo "<tr>";
	    echo "<td>" . $row['id'] . "</td>";
	    echo "<td>" . $row['name'] . "</td>";
	    echo "<td>" . $row['company'] . "</td>";
	    echo "<td>" . $row['price'] . "</td>";
	    echo "<td>" . "<input  type='number' value='0' min='0' max='".$row['quantity']."' name='quantity_$count' />" . "</td>";
	    echo "<td>" . "<input type='checkbox' name='check_row_$count' />" . "</td>";
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
	<button type="submit" class="button" name="submit">Go To Cart</button>
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

