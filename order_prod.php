<?php
    include 'db_con.php';
    include 'session.php';
    $pid=$_GET['pid'];
    $timestamp = date("Y-m-d H:i:s ");
    $uid=$login_session;
    $order="INSERT INTO user_product_ordered (uid, pid, date_time) VALUES ('$uid','$pid','$timestamp')";
    $submit_order=mysqli_query($con,$order) or die(mysqli_error($con));
    header("location:user_index.php");
?>