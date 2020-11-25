<?php
	
	include '../config/db_connection.php';

    $conn = OpenCon();
    echo $conn->error;

    $cart_delete = "DELETE FROM Cart WHERE UserId=1";
    $cart_q = $conn->query($cart_delete);

    $details = $_GET['cart'];
    $remarks = $_POST['remark'];
    // echo $details;
    $a = explode("<br>",$details);

    foreach ($a as $b){
        if($b != "")
        {
            $insert_q = "INSERT INTO Orders (UserId, OrderDetails, Remarks, Status, Admin_Remarks) VALUES (1 , '".$b."' , '".$remarks."', 'Approval pending', 'Your request will be approved soon')";
            $result_insert = $conn->query($insert_q);
        }
    }

    echo "<script>alert('Order Sent to Admin !'); window.history.go(-2);</script>";
?>