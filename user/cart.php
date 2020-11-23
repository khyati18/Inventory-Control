<!DOCTYPE html>
<html lang="en" class="theme-light">

<head>
	<title>Cart</title>
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
  
  <div class="heading">
    <h1>CART</h1>
  </div>
  
  <section>

    <div class="cart">
      <table class="table table-bordered table-hover">
        <tr>
          <th><h3>Chemical Name</h3></th>
          <th><h3>Quantity</h3></th>
          <th><h3>Price</h3></th>
        </tr>
        
        <?php
          include '../config/db_connection.php';

          $conn = OpenCon();
          echo $conn->error;

          $sql = "SELECT id, name, company, price FROM Items";
          $result = $conn->query($sql);

          $total = 0;
          $items = 0;
          $cart = "";

          if ($result->num_rows > 0) 
          {
            $count = 0;
            while($row = $result->fetch_assoc()) 
            {
              $count++;

              if(isset($_POST["check_row_$count"]))
              {
                $cart .=  "chemicalId: " . $row['name'] . " quantity: " . $_POST["quantity_$count"] . " price: " . $row['price'] . "<br>";
                
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $_POST["quantity_$count"] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                $items ++;
                $total += $row['price'] * $_POST["quantity_$count"];
                echo "</tr>";
              }
            }
          }
          else
          {
            echo "Database Error";
          }

      
        
      	echo "</table>";
          

          if($total>0)
          {
            echo '<div class="price">';
            echo "Total Price for " . $items . " items : " . $total . " ";
            echo "</div>";
          }
          
          echo "<form action='send_order.php?cart=$cart' method='POST'>";
          echo "<input type=textarea name='remark' value='Remarks...' id='remarks'/>";
      ?>
  	</div>
  </section>

  <?php
  echo "<input type='submit' class='button' name='Checkout' value='Checkout'/>";
  echo "</form>";
  ?>

  <script src="../js/script.js"></script>

  <input type='submit' class='button' name='Order' value='Orders' onclick='myFunction()'>
  <script>
  function myFunction() 
  {
            window.location.href="./orders.php";       // Url to phpmyadmin database
  }
  </script>

</body>
</html>

