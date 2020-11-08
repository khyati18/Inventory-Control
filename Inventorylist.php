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

$sql = "SELECT id, name, price FROM Items";
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
  echo "<table><colgroup><col width='15'><col width='500'><col width='150'><col width='100'></colgroup>";
  echo "<tr><th>ID</th><th>Chemical</th><th>Price</th><th>Select</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['price'] . "</td>";
    echo "<td>" ."<input type='checkbox' />" . "</td>";
    echo "</tr>";
  }
  echo "</table>";
}
else{
  echo "NO results";
}
?>
<div>
  <center>
    <a href="./Cart.php">
      <button class="bluebutton">Go to Cart</button>
    </a>
  </center>
</div>
<script src="./js/script.js"></script>

</body>
</html>
