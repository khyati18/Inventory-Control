<?php
include 'config/db_connection.php';

$conn = OpenCon();
echo "Connected Successfully. Stage 1 done";
echo $conn->error;
?>