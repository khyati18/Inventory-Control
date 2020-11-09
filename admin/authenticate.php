<?php
include '../config/db_connection.php';

$conn = OpenCon();
echo $conn->error;

If(isset($_POST['submit'])) {

    if($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        $name = $_POST['name'];

        $user_id = $_POST['user_id'];
        
        // Credentials: admin 
        if ($name == "admin" && $user_id == 0) 
        {
          // output data of each row
          header('Location: localhost:8080');
        } 
        else 
        {
          echo "Sorry !! Admin Id or Name is incorrect";
        }

    }

}

?>