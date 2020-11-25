<?php

	include '../config/db_connection.php';

	$conn = OpenCon();
	echo $conn->error;

	// echo $_GET['var'];
	$order = $_GET['order'];

	$q_details = "SELECT OrderDetails FROM Orders WHERE OrderId=$order";
	$details = $conn->query($q_details);

	$item_id = "";
	$quantity = "";
	
	if ($details->num_rows > 0) 
    {
    	while($row = $details->fetch_assoc())
    	{
    		echo $row['OrderDetails'];
    		$pieces = explode(": ", $row['OrderDetails']);

    		$item_id_ = explode(" ", $pieces[1]);
    		$quantity_ = explode(" ", $pieces[3]);

    		$item_id = $item_id_[0];
    		$quantity = $quantity_[0];

    		echo $item_id;
    		echo $quantity;
    	}
    }

    $q_sel = "SELECT Id, quantity from Items WHERE Id=$item_id";
    $q_sel_res = $conn->query($q_sel);
    $prev_quan = "";

    if ($q_sel_res->num_rows > 0) 
    {
    	while($row = $q_sel_res->fetch_assoc())
    	{
    		$prev_quan = $row['quantity'];
    	}
    }

    echo $prev_quan;

    $final_quan = number_format($prev_quan)-number_format($quantity);

	if($_GET['var']=='1')
	{
		$sql = "UPDATE Orders SET Status='Approved' WHERE OrderId=$order";
		$result = $conn->query($sql);

		$sql2 = "UPDATE Orders SET Admin_Remarks='Thanks for Ordering' WHERE OrderId=$order";
		$result2 = $conn->query($sql2);

		$update_inv = "UPDATE Items SET quantity=$final_quan WHERE Id=$item_id";
		$update_inv_res = $conn->query($update_inv);

		echo "<script>alert('Order Approved'); window.location.href='./requests.php';</script>";
	}
	else if($_GET['var']=='0')
	{
		$sql = "UPDATE Orders SET Status='Rejected' WHERE OrderId=$order";
		$result = $conn->query($sql);

		$sql2 = "UPDATE Orders SET Admin_Remarks='Your order is rejected. Please order again after 10 days.' WHERE OrderId=$order";
		$result2 = $conn->query($sql2);

		echo "<script>alert('Order Rejected'); window.location.href='./requests.php';</script>";
	}
?>