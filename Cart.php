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
          <th><h3>Item Name</h3></th>
          <th><h3>Quantity</h3></th>
          <th><h3>Price</h3></th>
        </tr>
        <tr>
          <td>Item 1</td>
          <td>50</td>
          <td>200</td>
        </tr>
        <tr>
          <td>Item 4</td>
          <td>10</td>
          <td>300</td>
        </tr>
      </table>
    </div>

    <button type="submit" class="checkoutbtn" name="checkout">
        Checkout
    </button>
  </section>

  <script src="./js/script.js"></script>

</body>
</html>