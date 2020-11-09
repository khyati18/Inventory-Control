<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html>
<head>
    <title>Inventory List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/styles.css" type="text/css">
</head>

<body>

<div class='container'>
	<label id='switch' class='switch'>
  		<input type='checkbox' onchange='toggleTheme()' id='slider'>
  		<span class='slider round'></span>
	</label>
</div>

<div class='heading'>
	<h1>Inventory List</h1>
</div>

<form action='./Cart.php' method='post'>

<table>
	<colgroup>
		<col width='15'>
		<col width='500'>
		<col width='200'>
		<col width='125'>
		<col width='140'>
		<col width='100'>
	</colgroup>

	<tr>
		<th>ID</th>
		<th>Chemical Name</th>
		<th>Company Name</th>
		<th>Price (per gm)</th>
		<th>Quantity (in gm)</th>
		<th>Select</th>
	</tr>

	<?php
	include 'config/db_connection.php';

	$conn = OpenCon();
	echo $conn->error;

	$sql = "SELECT id, name, company, price FROM Items";
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
	    echo "<td>" . "<input  type='number' value='1' min='1' max='10000000' name='quantity_$count' />" . "</td>";
	    echo "<td>" . "<input type='checkbox' name='check_row_$count' />" . "</td>";
	  }
	}
	else
	{
	  echo "Database Error";
	}
	?>

</table>

<div>
	<button type="submit" class="button" name="submit">Go To Cart</button>
</div>

</form>

<script src="./js/script.js"></script>

</body>
</html>
