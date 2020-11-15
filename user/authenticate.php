<?php
include '../config/db_connection.php';

$conn = OpenCon();
echo $conn->error;

If(isset($_POST['submit'])) 
{

  if($_SERVER['REQUEST_METHOD'] == 'POST') 
  {
      $email = $_POST['email'];
      $user_id = $_POST['user_id'];

      $sql = "SELECT id, email, firstname, lastname FROM Users WHERE id='$user_id' AND email='$email'";
      $result = $conn->query($sql);
      
      if($result->num_rows>0) 
      {
        header('Location: /Inventory-Control/user/inventory.php');
      } 
      else 
      {
        echo "<script>alert('Incorrect User Id or Name'); window.history.back();</script>";
      }

  }

}

?>