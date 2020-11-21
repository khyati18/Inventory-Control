<?php
	
	include '../config/db_connection.php';

    $conn = OpenCon();
    echo $conn->error;

    $details = $_GET['cart'];
    $remarks = $_POST['remark'];

    // echo $details;

    $insert_q = "INSERT INTO Orders (UserId, OrderDetails, Remarks) VALUES (1 , '".$details."' , '".$remarks."')";
    $result_insert = $conn->query($insert_q);

    echo "<script>alert('Order Sent to Admin !'); window.history.go(-2);</script>";
?>