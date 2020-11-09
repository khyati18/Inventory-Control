<?php
include 'config/db_connection.php';

$conn = OpenCon();
echo $conn->error;

If(isset($_POST['submit'])) {

    if($_SERVER['REQUEST_METHOD'] == 'POST') 
    {
        $email = $_POST['email'];

        $user_id = $_POST['user_id'];

        if($email && $user_id) {

            echo "Connected Successfully. Stage 1 done";
            echo "<br>";

        }

        $sql = "SELECT id, email, firstname, lastname FROM Users WHERE id=$user_id";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) 
        {
          // output data of each row
          header('Location: ./inventorylist.php');
          echo "WELCOME";
          echo "<br>";
          while($row = $result->fetch_assoc()) 
          {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
          }
        } 
        else 
        {
          echo "sorry !! email or id is incorrect";
        }

    }

}

?>