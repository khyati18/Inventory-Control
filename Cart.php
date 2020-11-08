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
    <h1>Inventory Control</h1>
  </div>
  
  <section class="container2">
  <!--
    <div class="dropdown" id="color">
      <select name="one" class="dropdown-select">
        <option value="1">Item 1</option>
        <option value="2">Item 2</option>
        <option value="3">Item 3</option>
        <option value="4">Item 4</option>
        <option value="5">Item 5</option>
        <option value="6">Item 6</option>
        <option value="7">Item 7</option>
        <option value="8">Item 8</option>
        <option value="9">Item 9</option>
        <option value="10">Item 10</option>
      </select>
    </div>

    <div style="margin-top: 25px">
      <label for="quantity" style="color: crimson;">
        <h1>Quantity(grams)</h1></label>
      <input type="number" id="quantity" min="1" max="500">
    </div>

    <button style="margin-top: 40px">Add</button>
  -->
    <div style="margin-top: 50px"x>
      <h1 style="color: darkcyan; font-size: 30px;">Cart</h1>
      <table style="text-align: center; width: 100%; color: goldenrod;">
        <tr>
          <th><h3>Item Name</h3></th>
          <th><h3>Quantity</h3></th>
          <th><h3>Price</h3></th>
        </tr>
        <!-- <tr>
          <td>Item 1</td>
          <td>50</td>
          <td>200</td>
        </tr>
        <tr>
          <td>Item 4</td>
          <td>10</td>
          <td>300</td>
        </tr> -->
      </table>
    </div>
  </section>

  <script src="./js/script.js"></script>

</body>
</html>