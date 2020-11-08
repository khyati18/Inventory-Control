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

<?php
include 'config/db_connection.php';

$conn = OpenCon();
echo $conn->error;

$sql = "SELECT id, name, company, price FROM Items";
$result = $conn->query($sql);

echo "<div class='container'>
  <label id='switch' class='switch'>
          <input type='checkbox' onchange='toggleTheme()' id='slider'>
          <span class='slider round'></span>
      </label>
</div>";

echo "<div class='heading'>
    <h1>Inventory List</h1>
  </div>";

if ($result->num_rows > 0) {
  echo "<table><colgroup><col width='15'><col width='500'><col width='200'><col width='125'><col width='140'><col width='100'></colgroup>";
  echo "<tr><th>ID</th><th>Chemical Name</th><th>Company Name</th><th>Price(per gm)</th><th>Quantity(in gm)</th><th><center>Select</center></th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['company'] . "</td>";
    echo "<td><center>" . $row['price'] . "</center></td>";
    echo "<td>" . "<center> <input  type='number' min='1' max='10000000' </center>" . "</td>";
    echo "<td><center>" . "<input type='checkbox' />" . "</center></td>";
    echo "</tr>";
  }
  echo "</table>";
}
else{
  echo "NO results";
}
?>
<br><br>
<div>
  <center>
    <a href="./Cart.php">
      <button class="checkoutbtn">Go to Cart</button>
    </a>
  </center>
</div>
<script src="./js/script.js"></script>

</body>
</html>
