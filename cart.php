<!DOCTYPE html>
<html lang="en" class="theme-light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inventory</title>
  <link rel="stylesheet" href="./css/styles.css" type="text/css">
</head>

<body>

  <div class="container">
    <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
  </div>
  <div class="heading">
    <h1>Cart</h1>
  </div>
  
  <section class="container2">
    

    <div style="margin-top: 50px">
      <table style="text-align: center; width: 100%; color: steelgray;">
        <tr>
          <th><h3>Chemical Name</h3></th>
          <th><h3>Quantity</h3></th>
          <th><h3>Price</h3></th>
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

            if(isset($_POST["check_row_$count"]))
            {
              echo "<tr>";
              echo "<td>" . $row['name'] . "</td>";
              echo "<td>" . $_POST["quantity_$count"] . "</td>";
              echo "<td>" . $row['price'] . "</td>";
              echo "</tr>";
            }
          }
        }
        else
        {
          echo "Database Error";
        }
        ?>
      
      </table>
    </div>

    <textarea name="remarks" name="remarks">
      Remarks...
    </textarea>

    <button type="submit" class="button" name="checkout">
        Checkout
    </button>
  </section>

  <script src="./js/script.js"></script>

</body>
</html>