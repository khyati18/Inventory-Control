<?php
$servername = "localhost";
$username = "u";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully<br>";
} else {
  echo "Error creating database: " . $conn->error . "<br>";
}

// Use the database
$sql = "USE myDB";
if ($conn->query($sql) === TRUE) {
  echo "Database connected successfully<br>";
} else {
  echo "Error creating database: " . $conn->error . "<br>";
}

// create user table
$sql = "CREATE TABLE Users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  firstname VARCHAR(30) NOT NULL,
  lastname VARCHAR(30) NOT NULL,
  email VARCHAR(50),
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
  if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully<br>";
  } else {
    echo "Error creating table: " . $conn->error . "<br>";
  }

// add some dummy data
$sql = "INSERT INTO Users (firstname, lastname, email)
  VALUES ('Khyati', 'Agarwal', 'test@gmail.com')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
  } else {
    echo "Error: " . $sql . $conn->error . "<br>";
  }

$sql = "INSERT INTO Users (firstname, lastname, email)
  VALUES ('Jai', 'Luthra', 'test@gmail.com')";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
  } else {
    echo "Error: " . $sql . $conn->error . "<br>";
  }


// create items table
$sql = "CREATE TABLE Items (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  quantity INT,
  price INT
  )";
  
  if ($conn->query($sql) === TRUE) {
    echo "Table Items created successfully<br>";
  } else {
    echo "Error creating table: " . $conn->error . "<br>";
  }

// add some dummy data
$sql = "INSERT INTO Items (name, quantity, price)
  VALUES ('Item1', 100, 500)";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
  } else {
    echo "Error: " . $sql . $conn->error . "<br>";
  }

$sql = "INSERT INTO Items (name, quantity, price)
  VALUES ('Item2', 500, 100)";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
  } else {
    echo "Error: " . $sql . $conn->error . "<br>";
  }


$sql = "select * from Users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

$conn->close();
?>